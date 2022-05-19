@extends('layouts.m8.themes.demo20.theme')
@section('content')
<style type="text/css">
</style>

</style>
<div class="container mt-5">
	<div class="card mb-5 mb-xl-10">

		<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
			<!--begin::Card title-->
			<div class="card-title m-0">
				<h3 class="fw-bolder m-0">Profile Details</h3>
			</div>
			<!--end::Card title-->
		</div>
		<div class="card-body border-top p-9">


			<!--begin::Input group-->
			<div class="row mb-6">

				<label for="role" class="col-lg-4 col-form-label fw-bold fs-6">Role</label>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6 fv-row fv-plugins-icon-container">
							<input type="text" name="role" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{@$users['role']}}" readonly>

						</div>
					</div>
				</div>
			</div>
			<div class="row mb-6">
				<!--begin::Label-->
				<label class="col-lg-4 col-form-label fw-bold fs-6">Name</label>
				<!--end::Label-->
				<!--begin::Col-->
				<div class="col-lg-8">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-6 fv-row fv-plugins-icon-container">
							<input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{@$users['name']}}" readonly>
							<div class="fv-plugins-message-container invalid-feedback"></div>
						</div>
						<!--end::Col-->

					</div>
					<!--end::Row-->
				</div>
				<!--end::Col-->
			</div>
			<div class="row mb-6">
				<!--begin::Label-->
				<label class="col-lg-4 col-form-label fw-bold fs-6">Phone</label>
				<!--end::Label-->
				<!--begin::Col-->
				<div class="col-lg-8">
					<!--begin::Row-->
					<div class="row">
						<!--begin::Col-->
						<div class="col-lg-6 fv-row fv-plugins-icon-container">
							<input type="text" name="phone" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{@$users['phone']}}" readonly>
							<div class="fv-plugins-message-container invalid-feedback"></div>
						</div>
						<!--end::Col-->

					</div>
				</div>
				<!--end::Row-->
			</div>
			<!--end::Col--> 
			<div class="row mb-6">

				<label for="role" class="col-lg-4 col-form-label fw-bold fs-6">Police Station</label>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6 fv-row fv-plugins-icon-container">
							<input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" aria-label="Default select example" for="police_station_id" name="police_station_id" id="police_station_id" value="{{@$users['police_station']['name']}}" readonly>
						</div>
					</div>
				</div>
			</div>

				



			</div>
			@endsection
