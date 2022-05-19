
<div class="container mt-5">
       <div class="card mb-5 mb-xl-10">
              <!--begin::Card header-->
              <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                     <!--begin::Card title-->
                     <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Po Mobile Number Details</h3>
                     </div>
                     <!--end::Card title-->
              </div>
              <!--begin::Card header-->
              <!--begin::Content-->
              <div id="kt_account_settings_profile_details" class="collapse show">
                     <!--begin::Form-->
                     <form action="" method="post" id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" data-action="make_ajax" data-action-after="reload">
                            @csrf
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">


                                   <!--begin::Input group-->

                                   <div class="row mb-6">
                                          <!--begin::Label-->
                                          <label class="col-lg-4 col-form-label required fw-bold fs-6">Choose Your Image</label>
                                          <!--end::Label-->
                                          <!--begin::Col-->
                                          <div class="col-lg-8">
                                                 <!--begin::Row-->
                                                 <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                               <input type="file" name="profile" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="file">
                                                               <div class="fv-plugins-message-container invalid-feedback"></div>
                                                        </div>
                                                        <!--end::Col-->

                                                 </div>
                                                 <!--end::Row-->
                                          </div>
                                          <!--end::Col-->
                                   </div>
                                  
                            @if(@$users)
                            <input type="hidden" name="po_id" value="{{ $users['id'] }}">
                            @else
                            <div class="row mb-6">

                                   <label for="role" class="col-lg-4 col-form-label required fw-bold fs-6">User</label>
                                   <div class="col-lg-8">
                                          <div class="row">
                                                 <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                        <select class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" aria-label="Default select example" for="po_id" name="user_id" id="user_id">
                                                               {{-- @foreach($selected_po as $key=>$val)
                                                               <option value="{{ $val['id'] }}" selected>{{@$val->name}}</option>
                                                               @endforeach  --}}

                                                        </select>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                            @endif
                                   <!--end::Col-->
                                   <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                   <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                   <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                            </div>
                            <!--end::Actions-->
                            <input type="hidden">
                     </form>
                     <!--end::Form-->
              </div>
              <!--end::Content-->
       </div>
</div>
