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
</style>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class=" container modal-content">

    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <a href="{{url('products/')}}" class="btn btn-outline-secondary" ><i class="fas fa-arrow-left"></i></a>
            {{@$page_title}}
        </h5>
    </div>
    <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload" >
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
                <div class="col-md-3 col-sm-3">
                </div>
                <div class="col-md-6 col-sm-9">
                   <div class="flex-box">
                    <textarea id="textarea1" 
                    class="input shadow" 
                    name="name" 
                    rows="15" 
                    cols="100" 
                    placeholder="Description ">
                    </textarea>
                   </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            </section>
            <div class="col-md-12">
    <div class="form-group">
        <label for="Address" class="control-label">Address</label>
        <input type='text' name="address" id="address" class="form-control" placeholder="Store Address"  />
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="City" class="control-label">City</label>
        <input type='text' name="city" id="city" class="form-control" placeholder="City"  />
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="Country" class="control-label">Country</label>
        <input type='country' name="country" id="country" class="form-control" placeholder="Country"  />
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="State" class="control-label">State</label>
        <input type='text' name="state" id="state" class="form-control" placeholder="State"  />
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="Zip-Code" class="control-label">Zip-Code</label>
        <input type='text' name="zip_code" id="zip_code" class="form-control" placeholder="Zip-Code"  />
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="CNIC" class="control-label">CNIC</label>
        <input type='text' name="cnic" id="cnic" class="form-control" placeholder="CNIC" data-mask="phone" data-format="99999-9999999-9" />
    </div>
</div>    
</div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-info" >Add</button>
    <button type="reset" class="btn btn-danger">Clear</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>
</div> 
</div>
</div>
<!--External JavaScript file-->
<script src="{{asset('js/home.js')}}"></script>
@endsection
