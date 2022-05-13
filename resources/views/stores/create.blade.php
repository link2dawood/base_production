<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        {{@$page_title}}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
            ×
        </span>
        </button>
    </div>
    <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload" >
       @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="control-label">Store Name</label>
                        <input type='text' name="name" id="name" class="form-control" required="" placeholder="Store Name" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type='text' name="email" id="email" class="form-control" required="" placeholder="Email" />
                    </div>
                </div>
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