@extends('layouts.m8.themes.demo20.theme')
@section('content')
<div class="container">
   <form action="{{url($module['action'].'/update/_bulk')}}" data-action="bulk-action" method="post">
     <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-6">
           <div class="form-inline " id="actions">
              <div class="form-group ">
                <select class="form-control form-control-sm">
                  <option value="">Bulk Action</option>
                  <option value="delete">Delete</option>
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>
                </select>
              </div>
              <div class="form-group mx-sm-3">
                <button type="button" class="btn btn-primary btn-sm m-btn">Apply</button>
              </div>
            </div>
        </div>
        <div class="col-md-6" >
           <a href="{{url($module['action'].'/create')}}"  class="btn btn-success btn-sm m-btn" style="margin-bottom: 20px; float: right;">+ Add Store</a>
        </div>

        <div class="col-md-12">
           <table class="table table-bordered" id="editable" data-url="{{url($module['action'].'/edit')}}">
             <thead>
               <tr>
                 {{-- <th scope="col"><input type="checkbox"></th> --}}
                 <th scope="col"># ({{$count}})</th>
                 <th scope="col">Store Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">Address</th>
                 <th scope="col">City</th>
                 <th scope="col">Country</th>
                 <th scope="col">State</th>
                 <th scope="col">Zip-Code</th>
                 <th scope="col">CNIC</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
              @if($list['data'])
                 @foreach($list['data'] as $key=>$val)
               <tr>
                 {{-- <td><input type="checkbox" name="user[]" value="19"></th> --}}
                 <td scope="row"></th>
                 <td  data-input="text" data-field="name">{{$val['name']}}</td>
                 <td data-input="text" data-field="email">{{$val['email']}}</td>
                 <td data-input="text" data-field="address">{{$val['address']}}</td>
                 <td data-input="text" data-field="city">{{$val['city']}}</td>
                 <td data-input="text" data-field="country">{{$val['country']}}</td>
                 <td data-input="text" data-field="state">{{$val['state']}}</td>
                 <td data-input="text" data-field="zip_code">{{$val['zip_code']}}</td>
                 <td data-input="text" data-field="cnic">{{$val['cnic']}}</td>
                 <td>
                   <a data-action="delete_record"  href="javascript:void(0);" data-url="{{url('stores/delete/'. $val['id'])}}" >Delete</a> | <a href="#data_modal" data-toggle="modal"  data-url="{{url('stores/delete/'. $val['id'])}}" data-action="data_modal"> Edit </a>
                 </td>
               </tr>
               @endforeach
              @else
                 <tr>
                   <td colspan="12" align="center">
                     <h5 style="text-align: center;"><strong>No {{$module['singular']}} found !</strong> <a href="{{url($module['action'].'/create')}}" data-url="{{url($module['action'].'/create')}}">+Add New</a></h5>

                   </td>
                 </tr>
                @endif
         
             </tbody>
           </table>
           @include('paging')
        </div>
     </div>
  </form>
</div>

@endsection