@extends('layouts.m8.themes.demo20.theme')
@section('content')
<style>
h1 {
    padding-top: 40px;
    padding-bottom: 40px;
    text-align: center;
    color: #957dad;
    font-family: 'Montserrat', sans-serif;
}

section {
    padding: 5%;
    padding-top: 0;
    height: 100vh;
}

.side {
    margin-left: 0;
}

button {
    margin: 10px;
    border-color: #957dad !important;
    color: #888888 !important;
    margin-bottom: 25px;
}

button:hover {
    background-color: #fec8d8 !important;
}


.flex-box {
    display: flex;
    justify-content: center;
}
.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
}
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
</style>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5">
        <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload" >
            <div class=" container modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <a href="{{url('products/')}}" class="btn btn-outline-secondary" ><i class="fas fa-arrow-left"></i></a>
                        {{@$page_title}}
                    </h5>
                </div>
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" class="control-label">Title</label>
                                <input type='text' name="title" id="title" class="form-control" required="" placeholder="Title" />
                            </div>
                        </div>
                        <section class="des">
                            <div class="flex-box">
                                <div class="row">
                                    <div class="col">
                                        <button type="button" 
                                        onclick="f1()" 
                                        class=" shadow-sm btn btn-outline-secondary" 
                                        data-toggle="tooltip"
                                        data-placement="top" 
                                        title="Bold Text">Bold</button>
                                        <button type="button" 
                                        onclick="f2()" 
                                        class="shadow-sm btn btn-outline-success" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Italic Text">Italic</button>
                                        <button type="button" 
                                        onclick="f3()" 
                                        class=" shadow-sm btn btn-outline-primary" 
                                        data-toggle="tooltip" 
                                        data-placement="top"
                                        title="Left Align">
                                        <i class="fas fa-align-left"></i></button>
                                        <button type="button" 
                                        onclick="f4()" 
                                        class="btn shadow-sm btn-outline-secondary" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Center Align">
                                        <i class="fas fa-align-center"></i></button>
                                        <button type="button" 
                                        onclick="f5()" 
                                        class="btn shadow-sm btn-outline-primary" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Right Align">
                                        <i class="fas fa-align-right"></i></button>
                                        <button type="button" 
                                        onclick="f6()" 
                                        class="btn shadow-sm btn-outline-secondary" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Uppercase Text">Upper Case</button>
                                        <button type="button" 
                                        onclick="f7()" 
                                        class="btn shadow-sm btn-outline-primary" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Lowercase Text">Lower Case</button>
                                        <button type="button" 
                                        onclick="f8()" 
                                        class="btn shadow-sm btn-outline-primary" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Capitalize Text">Capitalize</button>
                                        <button type="button" 
                                        onclick="f9()" 
                                        class="btn shadow-sm btn-outline-primary side" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Tooltip on top">Clear Text</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                 <div class="flex-box">
                                    <textarea id="textarea1" 
                                    class="input shadow" 
                                    name="name" 
                                    rows="15" 
                                    cols="100" 
                                    placeholder="Description " style="border: 1px lightgrey; position: relative; z-index: 20; box-sizing: border-box;">

                                </textarea>
                            </div>
                        </div>
                    </div>
                </section>        
            </div>
        </div>
    </div> 
</form>
<div class="container modal-content mt-5">
    <div class="model-body">    
        <div class="row">   
            <div class="card" style="border: 1px lightgray;">  
                <h5 class="my-5">Media</h5>
                <div class="form-group files">
                    <input name="media" type="file" class="form-control" multiple>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="container modal-content mt-5">
    <div class="model-body">    
        <div class="row">   
            <div class="card" style="border: 1px lightgray;">  
                <h5 class="my-5">Pricing</h5>
                <div class="form-group d-flex">
                    <label class="" for="exampleInputAmount">Price</label>
                    <div class="input-group col-md-5">
                       <input name="price" type="number" min="0.00" step="0.05" value="1.00" id="price" class="form-control" placeholder="Price" style="padding: 1rem;">
                   </div>
                   <label class="" for="exampleInputAmount">Cost per item</label>
                   <div class="input-group col-md-5">
                      <input name="c_price" type="number" min="0.00" step="0.05" value="1.00" id="price" class="form-control" placeholder="Price" style="padding: 1rem;">
                  </div>
              </div>
          </div> 
      </div>
  </div>
</div>
<div class="container modal-content mt-5">
    <div class="model-body">    
        <div class="row">   
            <div class="card" style="border: 1px lightgray;">  
                <h5 class="my-5">Inventory</h5>
                <div class="form-group d-flex">
                    <div class="col-md-6">   
                        <label class="" for="exampleInputAmount">SKU(Stock Keeping Unit)</label>
                        <div class="input-group ">
                         <input name="sku" type="text" class="form-control" style="padding: 1rem;">
                     </div>
                 </div>
                 <div class="">   
                  <label class="d-flex" for="exampleInputAmount">Barcode (ISBN, UPC, GTIN, etc.)</label>
                  <div class="input-group ">
                      <input name="barcode" type="text" class="form-control" style="padding: 1rem;">
                  </div>
              </div>
          </div>
          <div class="form-check mt-4">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Track quantity
            </label>
        </div>
        <div class="form-check mt-2 mb-4">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
          <label class="form-check-label" for="flexCheckChecked">
            Continue selling when out of stock
        </label>
    </div>
    <hr>
    <div class="my-5">
     <h4>Quantity</h4>   
     <label class="" for="exampleInputAmount">Available</label>
     <div class="input-group col-md-5">
         <input name="quantity" type="number" class="form-control" >
     </div>
 </div>

</div> 
</div>
</div>
</div>

<div class="container modal-content mt-5">
    <div class="model-body">    
        <div class="row">   
            <div class="card" style="border: 1px lightgray;">  
                <h5 class="my-5">Shipping</h5>
                <div class="form-group">
                    <label class="" for="exampleInputAmount">Location</label>
                    <div class="input-group">
                     <input name="address" type="text" class="form-control" placeholder="Address" >
                 </div>
                 <div class=" my-5">  
                     <label class="" for="exampleInputAmount">Zip-code</label>  
                     <div class="input-group">
                      <input name="zipcode" type="text" class="form-control" placeholder="Zip-Code">
                  </div>
                  <label class="" for="exampleInputAmount">Country</label>
                  <div class="input-group">
                      <input name="country" type="text" class="form-control" placeholder="Country">
                  </div>
              </div>
          </div>
      </div> 
  </div>
</div>
<hr>    
<div class="model-body">    
    <div class="row">   
        <h4>Weight</h4>
        <div class="my-5">   
         <label class="" for="exampleInputAmount">Weight in KG</label>
         <div class="input-group col-md-5">
             <input name="weight" type="number" class="form-control" placeholder="0.0"  >
         </div>
     </div>
 </div>  
</div>  
</div>                                    
<div class="modal-footer">
    <button type="submit" class="btn btn-info" >Add</button>
    <button type="reset" class="btn btn-danger">Clear</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
<div class="col-md-3">  
    <div class="container modal-content"> 
        {{-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                <a href="{{url('products/')}}" class="btn btn-outline-secondary" ><i class="fas fa-arrow-left"></i></a>
                {{@$page_title}}
            </h5>
        </div> --}}
        <div class="model-body m-5">    
            <div class="row">   
                <h4>Product Status</h4>
                <div class="my-5">   
                 <label class="" for="exampleInputAmount">Active/Draft</label>
                 <div class="input-group col-md-5">
                     <select name="status" id="Select" class="form-control mt-5">
                         <option value="draft" selected>Draft</option>
                         <option value="active">Active</option>
                     </select>
                 </div>
             </div>
         </div>  
     </div>  
 </div>
</div>
</div>  


<!--External JavaScript file-->
<script src="{{asset('js/home.js')}}"></script>
@endsection
