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
           <a href="#data_modal" data-toggle="modal" data-url="{{url($module['action'].'/create')}}" data-action="data_modal" class="btn btn-success btn-sm m-btn" style="margin-bottom: 20px; float: right;">+ Add Category</a>
        </div>

        <div class="col-md-12">
           <table class="table table-bordered" id="editable" data-url="{{url($module['action'].'/edit')}}">
             <thead>
               <tr>
                 <th scope="col"># ({{$count}})</th>
                 <th scope="col">Label</th>
                 <th scope="col">Description</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
              @if($list['data'])
                 @foreach($list['data'] as $key=>$val)
               <tr>
                 <td scope="row"></th>
                 <td  data-input="text" data-field="label">{{$val['lable']}}</td>
                 <td  data-input="textarea" data-field="description">{{$val['description']}}</td>
                 <td>
                   <a data-action="delete_record"  href="javascript:void(0);" data-url="{{url('categories/delete/'. $val['id'])}}" >Delete</a> | <a href="#data_modal" data-toggle="modal"  data-url="{{url('categories/edit/'. $val['id'])}}" data-action="data_modal"> Edit </a>
                 </td>
               </tr>
               @endforeach
              @else
                 <tr>
                   <td colspan="8" align="center">
                     <h5 style="text-align: center;"><strong>No {{$module['singular']}} found !</strong> <a href="#data_modal" data-toggle="modal" data-url="{{url($module['action'].'/create')}}" data-action="data_modal">+Add New</a></h5>

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