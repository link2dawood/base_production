<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Models\Store;
use Auth;
use Hash;
class UserController extends Controller
{
    private $type     =  "users";
    private $singular =  "User";
    private $plural   =  "Users";
    private $view     =  "users.";
    private $action   =  "/users";
    private $db_key   =  "id";
    private $perpage = 100000;

    public function __construct()
    {
     // $this->middleware('auth');
 }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function search($records,$request,&$data) {
        /*
        SET DEFAULT VALUES
        */
        if($request->perpage)
            $this->perpage  =   $request->perpage;
        $data['sindex']     = ($request->page != NULL)?($this->perpage*$request->page - $this->perpage+1):1;
        /*
        FILTER THE DATA
        */
        $params = [];
        if($request->is_active) {
            $params['is_active'] = $request->is_active;
            $records = $records->where("is_active",$params['is_active']);
        }
        if($request->name) {
            $params['name'] = $request->name;
            $records = $records->where("name","like",'%'.$params['name'].'%');
        }
        if($request->role) {
            $params['role'] = $request->role;
            $records = $records->where("role","like",'%'.$params['role'].'%');
        }
        if($request->phone) {
            $params['phone'] = $request->phone;
            $records = $records->where("phone","like",'%'.$params['phone'].'%');
        }


        $data['request'] = $params;
        return $records;    
    }
    public function list(Request $request)
    {
     // if(Auth::user()->role == '1')
        $data   = array(
            "page_title"=>$this->plural." List",
            "page_heading"=>$this->plural.' List',
            "breadcrumbs"=>array("#"=>$this->plural." List"),
            "module"=>array('type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>$this->action,'db_key'=>$this->db_key)
        );


        /*
        GET RECORDS
        */
        $records   = User::with('user','store');
        $records   = $this->search($records,$request,$data)->orderBy('id','DESC');
        /*
        GET TOTAL RECORD BEFORE BEFORE PAGINATE
        */
        $data['count']      = $records->count();
        /*
        PAGINATE THE RECORDS
        */
        $records            = $records->paginate($this->perpage);
        $records->appends($request->all())->links();
        $links = $records->links();

        $records = $records->toArray();
        $records['pagination'] = $links;
        /*
        ASSIGN DATA FOR VIEW
        */
        $data['list']   =   $records;
        $data['store'] = Store::all();
        return view($this->view.'list',$data);
    }
    public function cleanData(&$data) {
        $unset = ['ConfirmPassword','q','_token'];
        foreach ($unset as $value) {
            if(array_key_exists ($value,$data))  {
                unset($data[$value]);
            }
        }
    }
    public function create(Request $request)
    {
     // if(Auth::user()->role == '1')
        if($request->isMethod('post')){
            $data = $request->all();
            $this->cleanData($data);
            
            // $data['created_by'] = Auth::user()->name;
            $data['password'] = Hash::make($request->password);
            $Areas = new User;
            $Areas->insert($data);
            $response = array('flag'=>true,'msg'=>$this->singular.' is added sucessfully.','action'=>'reload');
            echo json_encode($response); return;
        }

        $data   = array(
            "page_title"=>"Add ".$this->singular,
            "page_heading"=>"Add ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url($this->action.'/create')
        );
           // if(auth()->user()->police_station_id){
           //      $data['police_station_id'] = Auth::user()->police_station_id;
           //  }
        // $data['users'] = User::all();
        $data['stores'] = Store::with('users')->get();
        // dd($data)
        return view($this->view.'create',$data);
    }
    public function show(Request $request, $id){
        $data   = array(
            "page_title"=>"Add ".$this->singular,
            "page_heading"=>"Add ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url($this->action.'/'),
            "module"=>array('type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>$this->action,'db_key'=>$this->db_key)
        );
        $data['users'] = user::where("id",$id)->get()->toArray();

        return view($this->view.'show',$data);
    }
    public function profile(Request $request){
        // $data   = array(
        //     "page_title"=>"Add ".$this->singular,
        //     "page_heading"=>"Add ".$this->singular,
        //     "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
        //     "action"=> url($this->action.'/'),
        //     "module"=>array('type'=>$this->type,'singular'=>$this->singular,'plural'=>$this->plural,'view'=>$this->view,'action'=>$this->action,'db_key'=>$this->db_key)
        // );
        // $data['users'] = user::where("id",$id)->get()->toArray();

        return view($this->view.'profile');
    }
    public function update(Request $request,$id="")
    {
        if($request->method() == "POST"){
            $data = $request->all();
            $this->cleanData($data);

            if(isset($data['label'])) {
                $is_save             = User::where('label','=',
                    $data['label'])
                ->where($this->db_key,'!=',
                    $id)
                ->count();
                if($is_save > 0)    {
                    $response = array('flag'=>false,'msg'=>$this->singular.' with label already exist.');
                    echo json_encode($response); return;
                }
            }
            $obj = User::find($id);
            $obj->update($data);
            $response = array('flag'=>true,'msg'=>$this->singular.' is updated sucessfully.','action'=>'reload');
            // echo json_encode($response);
             return redirect(url('/users'));
        }
        $data   = array(
            "page_title"=>"Edit ".$this->singular,
            "page_heading"=>"Edit ".$this->singular,
            "breadcrumbs"=>array("dashboard"=>"Dashboard","#"=>$this->plural." List"),
            "action"=> url($this->action.'/edit/'.$id),
            "row" => User::find($id)
        );
        $data['stores'] = Store::all();
        return view($this->view.'edit',$data);
    }
    public function delete($id) {
        // dd($id);
        $del = User::find($id);
        $del -> delete();
        $response = array('flag'=>true,'msg'=>$this->singular.' has been deleted.');
        echo json_encode($response); return;
    }
    
}