@extends('layouts.m8.themes.demo20.theme')
@section('content')
<div class="container mt-5">
	<div class="card mb-5 mb-lg-5">
		<div class="card-header mt-5">
			<h3>Search User
			</h3>
		</div>
		<form action="" method="get">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3 form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="col-md-3 form-group">
						<label>Role</label>
						<select class="form-control align-middle pb-0" for="role" name="role" id="role">
							<option value="1">Super Admin</option>
							<option value="2">Admin</option>
						</select>
					</div>
					<div class="col-md-3 form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control">
					</div>

				</div>
			</div>
			<div class="card-footer">
				<button class="btn btn-primary" type="submit">Search</button>
			</div>
		</form>
	</div>
	<div class="card mb-5 mb-lg-10">
		<form action="{{url('/update/_bulk')}}" data-action="bulk-action" method="post">
			<!--begin::Card header-->
			<div class="card-header">
				<!--begin::Heading-->
				<div class="card-title">
					<h3>Users</h3>
				</div>
				<!--end::Heading-->
				<div>
					<a class="form-control align-middle btn btn-primary mt-5 p-2" href="{{  url('users/create')}}">Add New User</a>
				</div>
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-0">
				<!--begin::Table wrapper-->
				<div class="table-responsive">
					<!--begin::Table-->
					<table {{url('/edit')}} class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
						<!--begin::Thead-->
						<thead class="border-gray-200 fs-5 fw-bold bg-lighten">
							<tr>
								<th class="min-w-180px">#({{$count}})</th>
								<th class="min-w-180px">Role</th>
								<th class="min-w-180px">Name</th>
								<th class="min-w-180px">Phone</th>
								<th class="min-w-180px">Police Station</th>
								<th class="min-w-180px">Actions</th>
							</tr>
						</thead>
						<!--end::Thead-->
						<!--begin::Tbody-->
						<tbody class="fw-6 fw-bold text-gray-600">
							@if($list['data'])
							@foreach($list['data'] as $key=>$val)
							<tr>
								<td></th>
								<td  class="text-hover-primary text-gray-600"> {{ @config('constants.roles')[$val['role']] }}</td>
								<td class="text-hover-primary text-gray-600">{{$val['name']}}</td>
								<td class="text-hover-primary text-gray-600"> {{$val['phone']}}</td>
								<td data-input="text">{{$val['police_station']['name']}}</td> 
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" data-action="delete_record"  href="javascript:void(0);" data-url="{{url('users/delete/'.$val['id']) }}" >Delete</a> 
											<a class="dropdown-item" href="{{url('users/edit/'.$val['id'])}}"> Edit </a>
										</div>
									</div>
								</td>

							</tr>
							@endforeach

							@else
							<tr>
								<td colspan="8" align="center">
									<h5 style="text-align: center;">
										<strong>No User found !</strong> 
										<a data-bs-target="#data_modal" data-bs-toggle="modal" data-url="{{url('users/create/' )}}">+Add New</a>
									</h5>

								</td>
							</tr>
							@endif
						</tbody>
						<!--end::Tbody-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Table wrapper-->
			</div>
			<!--end::Card body-->
		</form>
	</div>

</div>
@endsection