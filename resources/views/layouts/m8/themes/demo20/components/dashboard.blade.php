@extends('layouts.m8.themes.demo20.components')

@section('content')
					<!--begin::Toolbar-->
					<div class="toolbar mb-n1 pt-3 mb-lg-n3 pt-lg-6" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
								<!--begin::Title-->
								<h1 class="d-flex text-dark fw-bolder m-0 fs-3">Dashboard
								<!--begin::Separator-->
								<span class="h-20px border-gray-400 border-start mx-3"></span>
								<!--end::Separator-->
								<!--begin::Description-->
								<small class="text-gray-500 fs-7 fw-bold my-1">#XRS-45670</small>
								<!--end::Description--></h1>
								<!--end::Title-->
							</div>
							<!--end::Page title-->
							<!--begin::Actions-->
							<div class="d-flex align-items-center">
								<!--begin::Button-->
								<a href="#" class="btn btn-icon btn-color-primary bg-body w-35px h-35px w-lg-40px h-lg-40px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
									<!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-md-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black" />
											<path d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z" fill="black" />
											<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--end::Button-->
								<!--begin::Button-->
								<a href="#" class="btn btn-icon btn-color-success bg-body w-35px h-35px w-lg-40px h-lg-40px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
									<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-md-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="black" />
											<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="black" />
											<rect x="7" y="13" width="10" height="2" rx="1" fill="black" />
											<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--end::Button-->
								<!--begin::Button-->
								<a href="#" class="btn btn-icon btn-color-warning bg-body w-35px h-35px w-lg-40px h-lg-40px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
									<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-md-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
											<rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
											<rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
											<rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
											<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--end::Button-->
								<!--begin::Daterange-->
								<a href="#" class="btn btn-flex bg-body h-35px h-lg-40px px-5" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
									<span class="me-4">
										<span class="text-muted fw-bold me-1" id="kt_dashboard_daterangepicker_title">Today</span>
										<span class="text-primary fw-bolder" id="kt_dashboard_daterangepicker_date">Jan 11</span>
									</span>
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
									<span class="svg-icon svg-icon-4 m-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--end::Daterange-->
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Row-->
							<div class="row g-5 g-lg-10">
								<!--begin::Col-->
								<div class="col-xl-4 mb-xl-10">
									<!--begin::Mixed Widget 2-->
									<div class="card h-xl-100">
										<!--begin::Header-->
										<div class="card-header border-0 bg-primary py-5">
											<h3 class="card-title fw-bolder text-white">Sales Statistics</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body p-0">
											<!--begin::Chart-->
											<div class="mixed-widget-2-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 200px"></div>
											<!--end::Chart-->
											<!--begin::Stats-->
											<div class="card-p mt-n20 position-relative">
												<!--begin::Row-->
												<div class="row g-0">
													<!--begin::Col-->
													<div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
														<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<a href="#" class="text-warning fw-bold fs-6">Weekly Sales</a>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<a href="#" class="text-primary fw-bold fs-6">New Projects</a>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row g-0">
													<!--begin::Col-->
													<div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<a href="#" class="text-danger fw-bold fs-6 mt-2">Item Orders</a>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col bg-light-success px-6 py-8 rounded-2">
														<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
														<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
																<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<a href="#" class="text-success fw-bold fs-6 mt-2">Bug Reports</a>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4 mb-xl-10">
									<!--begin::Mixed Widget 6-->
									<div class="card h-xl-100">
										<!--begin::Beader-->
										<div class="card-header border-0 py-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Sales Statistics</span>
												<span class="text-muted fw-bold fs-7">Recent sales statistics</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 1-->
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61de1960076f6">
													<!--begin::Header-->
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bolder">Filter Options</div>
													</div>
													<!--end::Header-->
													<!--begin::Menu separator-->
													<div class="separator border-gray-200"></div>
													<!--end::Menu separator-->
													<!--begin::Form-->
													<div class="px-7 py-5">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Status:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div>
																<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61de1960076f6" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Member Type:</label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="d-flex">
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																<!--end::Options-->
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																<!--end::Options-->
															</div>
															<!--end::Options-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Notifications:</label>
															<!--end::Label-->
															<!--begin::Switch-->
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Menu 1-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body p-0 d-flex flex-column">
											<!--begin::Stats-->
											<div class="card-px pt-5 pb-10 flex-grow-1">
												<!--begin::Row-->
												<div class="row g-0 mt-5 mb-10">
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-info">
																	<!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-info">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z" fill="black" />
																			<path d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$2,034</div>
																<div class="fs-7 text-muted fw-bold">Author Sales</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																			<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$706</div>
																<div class="fs-7 text-muted fw-bold">Commision</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row g-0">
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
																			<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
																			<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$49</div>
																<div class="fs-7 text-muted fw-bold">Average Bid</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z" fill="black" />
																			<path d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$5.8M</div>
																<div class="fs-7 text-muted fw-bold">All Time Sales</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
											<!--begin::Chart-->
											<div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 200px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 6-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4 mb-xl-10">
									<!--begin::List Widget 4-->
									<div class="card h-xl-100">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark">Trends</span>
												<span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5">
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
														<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+82$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
														<span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+280$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
														<span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+4500$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
														<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+686$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
														<span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+726$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox Broker App</a>
														<span class="text-muted fw-bold d-block fs-7">Finance, Corporate, Apps</span>
													</div>
													<span class="badge badge-light fw-bolder my-2">+145$</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 4-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row g-5 g-lg-10">
								<!--begin::Col-->
								<div class="col-xl-4 mb-xl-10">
									<!--begin::Statistics Widget 1-->
									<div class="card bgi-no-repeat h-xl-100" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg">
										<!--begin::Body-->
										<div class="card-body">
											<a href="#" class="card-title fw-bolder text-muted text-hover-primary fs-4">Meeting Schedule</a>
											<div class="fw-bolder text-primary my-6">3:30PM - 4:20PM</div>
											<p class="text-dark-75 fw-bold fs-5 m-0">Create a headline that is informative
											<br />and will capture readers</p>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Statistics Widget 1-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4 mb-xl-10">
									<!--begin::Statistics Widget 1-->
									<div class="card bgi-no-repeat h-xl-100" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-2.svg">
										<!--begin::Body-->
										<div class="card-body">
											<a href="#" class="card-title fw-bolder text-muted text-hover-primary fs-4">Meeting Schedule</a>
											<div class="fw-bolder text-primary my-6">03 May 2020</div>
											<p class="text-dark-75 fw-bold fs-5 m-0">Great blog posts don’t just happen Even the best bloggers need it</p>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Statistics Widget 1-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4 mb-xl-10">
									<!--begin::Statistics Widget 1-->
									<div class="card bgi-no-repeat h-xl-100" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg">
										<!--begin::Body-->
										<div class="card-body">
											<a href="#" class="card-title fw-bolder text-muted text-hover-primary fs-4">UI Conference</a>
											<div class="fw-bolder text-primary my-6">10AM Jan, 2021</div>
											<p class="text-dark-75 fw-bold fs-5 m-0">AirWays - A Front-end solution for airlines build with ReactJS</p>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Statistics Widget 1-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row g-5 g-lg-10">
								<!--begin::Col-->
								<div class="col-xxl-4 col-md-4 mb-xxl-10">
									<!--begin::Mixed Widget 6-->
									<div class="card h-md-100">
										<!--begin::Beader-->
										<div class="card-header border-0 py-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Sales Statistics</span>
												<span class="text-muted fw-bold fs-7">Recent sales statistics</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 1-->
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61de196008569">
													<!--begin::Header-->
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bolder">Filter Options</div>
													</div>
													<!--end::Header-->
													<!--begin::Menu separator-->
													<div class="separator border-gray-200"></div>
													<!--end::Menu separator-->
													<!--begin::Form-->
													<div class="px-7 py-5">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Status:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div>
																<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61de196008569" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Member Type:</label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="d-flex">
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																<!--end::Options-->
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																<!--end::Options-->
															</div>
															<!--end::Options-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Notifications:</label>
															<!--end::Label-->
															<!--begin::Switch-->
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Menu 1-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body p-0 d-flex flex-column">
											<!--begin::Stats-->
											<div class="card-px pt-5 pb-10 flex-grow-1">
												<!--begin::Row-->
												<div class="row g-0 mt-5 mb-10">
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-info">
																	<!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-info">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z" fill="black" />
																			<path d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$2,034</div>
																<div class="fs-7 text-muted fw-bold">Author Sales</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																			<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$706</div>
																<div class="fs-7 text-muted fw-bold">Commision</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row g-0">
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
																			<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
																			<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$49</div>
																<div class="fs-7 text-muted fw-bold">Average Bid</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<div class="d-flex align-items-center me-2">
															<!--begin::Symbol-->
															<div class="symbol symbol-50px me-3">
																<div class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z" fill="black" />
																			<path d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div>
																<div class="fs-4 text-dark fw-bolder">$5.8M</div>
																<div class="fs-7 text-muted fw-bold">All Time Sales</div>
															</div>
															<!--end::Title-->
														</div>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
											<!--begin::Chart-->
											<div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 6-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-4 col-md-4 mb-xxl-10">
									<!--begin::List Widget 5-->
									<div class="card h-md-100">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0 mt-4">
											<h3 class="card-title align-items-start flex-column">
												<span class="fw-bolder mb-2 text-dark">Activities</span>
												<span class="text-muted fw-bold fs-7">890,344 Sales</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 1-->
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61de196008c1f">
													<!--begin::Header-->
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bolder">Filter Options</div>
													</div>
													<!--end::Header-->
													<!--begin::Menu separator-->
													<div class="separator border-gray-200"></div>
													<!--end::Menu separator-->
													<!--begin::Form-->
													<div class="px-7 py-5">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Status:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div>
																<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61de196008c1f" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Member Type:</label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="d-flex">
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																<!--end::Options-->
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																<!--end::Options-->
															</div>
															<!--end::Options-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-bold">Notifications:</label>
															<!--end::Label-->
															<!--begin::Switch-->
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Menu 1-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5">
											<!--begin::Timeline-->
											<div class="timeline-label">
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-warning fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-success fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Content-->
													<div class="timeline-content d-flex">
														<span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-danger fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Desc-->
													<div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
													<a href="#" class="text-primary">USD 700</a>. to ESL</div>
													<!--end::Desc-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-primary fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-danger fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Desc-->
													<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
													<a href="#" class="text-primary">#XF-2356</a>.</div>
													<!--end::Desc-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-primary fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-danger fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Desc-->
													<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
													<a href="#" class="text-primary">#XF-2356</a>.</div>
													<!--end::Desc-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="fa fa-genderless text-success fs-1"></i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Timeline-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end: List Widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-4 col-md-4 mb-xxl-10">
									<!--begin::Mixed Widget 1-->
									<div class="card h-md-100">
										<!--begin::Body-->
										<div class="card-body p-0">
											<!--begin::Header-->
											<div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
												<!--begin::Heading-->
												<div class="d-flex flex-stack">
													<h3 class="m-0 text-white fw-bolder fs-3">Sales Summary</h3>
													<div class="ms-1">
														<!--begin::Menu-->
														<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-primary border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																		<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Generate Bill</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">Subscription</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Plans</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Billing</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Statements</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu separator-->
																	<div class="separator my-2"></div>
																	<!--end::Menu separator-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3">
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																				<!--end::Input-->
																				<!--end::Label-->
																				<span class="form-check-label text-muted fs-6">Recuring</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3 my-1">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 3-->
														<!--end::Menu-->
													</div>
												</div>
												<!--end::Heading-->
												<!--begin::Balance-->
												<div class="d-flex text-center flex-column text-white pt-8">
													<span class="fw-bold fs-7">You Balance</span>
													<span class="fw-bolder fs-2x pt-1">$37,562.00</span>
												</div>
												<!--end::Balance-->
											</div>
											<!--end::Header-->
											<!--begin::Items-->
											<div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="black" />
																	<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Description-->
													<div class="d-flex align-items-center flex-wrap w-100">
														<!--begin::Title-->
														<div class="mb-1 pe-3 flex-grow-1">
															<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Sales</a>
															<div class="text-gray-400 fw-bold fs-7">100 Regions</div>
														</div>
														<!--end::Title-->
														<!--begin::Label-->
														<div class="d-flex align-items-center">
															<div class="fw-bolder fs-5 text-gray-800 pe-1">$2,5b</div>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Description-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																	<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																	<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																	<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Description-->
													<div class="d-flex align-items-center flex-wrap w-100">
														<!--begin::Title-->
														<div class="mb-1 pe-3 flex-grow-1">
															<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Revenue</a>
															<div class="text-gray-400 fw-bold fs-7">Quarter 2/3</div>
														</div>
														<!--end::Title-->
														<!--begin::Label-->
														<div class="d-flex align-items-center">
															<div class="fw-bolder fs-5 text-gray-800 pe-1">$1,7b</div>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																	<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Description-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<!--begin::Svg Icon | path: icons/duotune/electronics/elc005.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M15 19H7C5.9 19 5 18.1 5 17V7C5 5.9 5.9 5 7 5H15C16.1 5 17 5.9 17 7V17C17 18.1 16.1 19 15 19Z" fill="black" />
																	<path d="M8.5 2H13.4C14 2 14.5 2.4 14.6 3L14.9 5H6.89999L7.2 3C7.4 2.4 7.9 2 8.5 2ZM7.3 21C7.4 21.6 7.9 22 8.5 22H13.4C14 22 14.5 21.6 14.6 21L14.9 19H6.89999L7.3 21ZM18.3 10.2C18.5 9.39995 18.5 8.49995 18.3 7.69995C18.2 7.29995 17.8 6.90002 17.3 6.90002H17V10.9H17.3C17.8 11 18.2 10.7 18.3 10.2Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Description-->
													<div class="d-flex align-items-center flex-wrap w-100">
														<!--begin::Title-->
														<div class="mb-1 pe-3 flex-grow-1">
															<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Growth</a>
															<div class="text-gray-400 fw-bold fs-7">80% Rate</div>
														</div>
														<!--end::Title-->
														<!--begin::Label-->
														<div class="d-flex align-items-center">
															<div class="fw-bolder fs-5 text-gray-800 pe-1">$8,8m</div>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Description-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
																	<rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
																	<rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
																	<rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Description-->
													<div class="d-flex align-items-center flex-wrap w-100">
														<!--begin::Title-->
														<div class="mb-1 pe-3 flex-grow-1">
															<a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Dispute</a>
															<div class="text-gray-400 fw-bold fs-7">3090 Refunds</div>
														</div>
														<!--end::Title-->
														<!--begin::Label-->
														<div class="d-flex align-items-center">
															<div class="fw-bolder fs-5 text-gray-800 pe-1">$270m</div>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																	<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Description-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 1-->
								</div>
								<!--end::Col-->
							</div>
							<!--begin::Row-->
							<div class="row g-5 g-lg-10">
								<!--begin::Col-->
								<div class="col-xl-6 mb-5 mb-xl-10">
									<!--begin::Tables Widget 3-->
									<div class="card h-xl-100">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Files</span>
												<span class="text-muted mt-1 fw-bold fs-7">Over 100 pending files</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Create Invoice</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link flex-stack px-3">Create Payment
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Generate Bill</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Subscription</span>
															<span class="menu-arrow"></span>
														</a>
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Plans</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Billing</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Statements</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator my-2"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3">
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																		<!--end::Input-->
																		<!--end::Label-->
																		<span class="form-check-label text-muted fs-6">Recuring</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table align-middle gs-0 gy-3">
													<!--begin::Table head-->
													<thead>
														<tr>
															<th class="p-0 w-50px"></th>
															<th class="p-0 min-w-150px"></th>
															<th class="p-0 min-w-140px"></th>
															<th class="p-0 min-w-120px"></th>
															<th class="p-0 min-w-40px"></th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td>
																<div class="symbol symbol-50px me-2">
																	<span class="symbol-label bg-light-success">
																		<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																		<span class="svg-icon svg-icon-2x svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
																				<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
																				<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top Authors</a>
															</td>
															<td class="text-end text-muted fw-bold">ReactJs, HTML</td>
															<td class="text-end text-muted fw-bold">4600 Users</td>
															<td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
														</tr>
														<tr>
															<td>
																<div class="symbol symbol-50px me-2">
																	<span class="symbol-label bg-light-danger">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																		<span class="svg-icon svg-icon-2x svg-icon-danger">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																				<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																				<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																				<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
															</td>
															<td class="text-end text-muted fw-bold">Python, MySQL</td>
															<td class="text-end text-muted fw-bold">7200 Users</td>
															<td class="text-end text-dark fw-bolder fs-6 pe-0">2.8MB</td>
														</tr>
														<tr>
															<td>
																<div class="symbol symbol-50px me-2">
																	<span class="symbol-label bg-light-info">
																		<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																		<span class="svg-icon svg-icon-2x svg-icon-info">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																				<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
															</td>
															<td class="text-end text-muted fw-bold">Laravel, Metronic</td>
															<td class="text-end text-muted fw-bold">890 Users</td>
															<td class="text-end text-dark fw-bolder fs-6 pe-0">1.5MB</td>
														</tr>
														<tr>
															<td>
																<div class="symbol symbol-50px me-2">
																	<span class="symbol-label bg-light-warning">
																		<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																		<span class="svg-icon svg-icon-2x svg-icon-warning">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																				<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
															</td>
															<td class="text-end text-muted fw-bold">AngularJS, C#</td>
															<td class="text-end text-muted fw-bold">4600 Users</td>
															<td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
														</tr>
														<tr>
															<td>
																<div class="symbol symbol-50px me-2">
																	<span class="symbol-label bg-light-primary">
																		<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																		<span class="svg-icon svg-icon-2x svg-icon-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="black" />
																				<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
															</td>
															<td>
																<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
															</td>
															<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
															<td class="text-end text-muted fw-bold">354 Users</td>
															<td class="text-end text-dark fw-bolder fs-6 pe-0">500KB</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--begin::Body-->
									</div>
									<!--end::Tables Widget 3-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6 mb-5 mb-xl-10">
									<!--begin::Table Widget 6-->
									<div class="card h-xl-100">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder fs-3 mb-1">Authors Earnings</span>
												<span class="text-muted mt-1 fw-bold fs-7">More than 400 new authors</span>
											</h3>
											<div class="card-toolbar">
												<ul class="nav">
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_6_tab_1">Month</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_6_tab_2">Week</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 active" data-bs-toggle="tab" href="#kt_table_widget_6_tab_3">Day</a>
													</li>
												</ul>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_table_widget_6_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle gs-0 gy-3">
															<!--begin::Table head-->
															<thead>
																<tr>
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-120px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Successful Fellas</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$200,500</span>
																	</td>
																	<td class="text-end">
																		<span class="text-primary fs-7 fw-bolder">+28%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																		<span class="text-muted fw-bold d-block">HTML, CSS Coding</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-warning fs-7 fw-bolder">+52%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																		<span class="text-muted fw-bold d-block">PHP, Laravel, VueJS</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-danger fs-7 fw-bolder">+52%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
																		<span class="text-muted fw-bold d-block">UI/UX Designer</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$3,400,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-success fs-7 fw-bolder">-34%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin Leonard</a>
																		<span class="text-muted fw-bold d-block">Art Director</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$35,600,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-info fs-7 fw-bolder">+230%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_table_widget_6_tab_2">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle gs-0 gy-3">
															<!--begin::Table head-->
															<thead>
																<tr>
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-120px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																		<span class="text-muted fw-bold d-block">HTML, CSS Coding</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-warning fs-7 fw-bolder">+52%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
																		<span class="text-muted fw-bold d-block">UI/UX Designer</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$3,400,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-success fs-7 fw-bolder">-34%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Successful Fellas</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$200,500</span>
																	</td>
																	<td class="text-end">
																		<span class="text-primary fs-7 fw-bolder">+28%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_table_widget_6_tab_3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle gs-0 gy-3">
															<!--begin::Table head-->
															<thead>
																<tr>
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-140px"></th>
																	<th class="p-0 min-w-120px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																		<span class="text-muted fw-bold d-block">HTML, CSS Coding</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-danger fs-7 fw-bolder">+52%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
																		<span class="text-muted fw-bold d-block">UI/UX Designer</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$3,400,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-success fs-7 fw-bolder">-34%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin Leonard</a>
																		<span class="text-muted fw-bold d-block">Art Director</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$35,600,000</span>
																	</td>
																	<td class="text-end">
																		<span class="text-info fs-7 fw-bolder">+230%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-50px me-2">
																			<span class="symbol-label">
																				<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																			</span>
																		</div>
																	</td>
																	<td>
																		<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																		<span class="text-muted fw-bold d-block">Successful Fellas</span>
																	</td>
																	<td>
																		<span class="text-muted fw-bold d-block fs-7">Paid</span>
																		<span class="text-dark fw-bolder d-block fs-5">$200,500</span>
																	</td>
																	<td class="text-end">
																		<span class="text-primary fs-7 fw-bolder">+28%</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																			<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																			<span class="svg-icon svg-icon-2">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																					<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</a>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
											</div>
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tables Widget 6-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Calendar Widget 1-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder text-dark">My Calendar</span>
										<span class="text-muted mt-1 fw-bold fs-7">Preview monthly events</span>
									</h3>
									<div class="card-toolbar">
										<a href="../../demo20/dist/apps/calendar.html" class="btn btn-primary">Manage Calendar</a>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Calendar-->
									<div id="kt_calendar_widget_1"></div>
									<!--end::Calendar-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Calendar Widget 1-->
							<!--begin::Modals-->
							<!--begin::Modal - New Product-->
							<div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Form-->
										<form class="form" action="#" id="kt_modal_add_event_form">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body py-10 px-lg-17">
												<!--begin::Input group-->
												<div class="fv-row mb-9">
													<!--begin::Label-->
													<label class="fs-6 fw-bold required mb-2">Event Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-9">
													<!--begin::Label-->
													<label class="fs-6 fw-bold mb-2">Event Description</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-9">
													<!--begin::Label-->
													<label class="fs-6 fw-bold mb-2">Event Location</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-9">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
														<span class="form-check-label fw-bold" for="kt_calendar_datepicker_allday">All Day</span>
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row row-cols-lg-2 g-10">
													<div class="col">
														<div class="fv-row mb-9">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
															<!--end::Input-->
														</div>
													</div>
													<div class="col" data-kt-calendar="datepicker">
														<div class="fv-row mb-9">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Event Start Time</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
															<!--end::Input-->
														</div>
													</div>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row row-cols-lg-2 g-10">
													<div class="col">
														<div class="fv-row mb-9">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2 required">Event End Date</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
															<!--end::Input-->
														</div>
													</div>
													<div class="col" data-kt-calendar="datepicker">
														<div class="fv-row mb-9">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Event End Time</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
															<!--end::Input-->
														</div>
													</div>
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Modal body-->
											<!--begin::Modal footer-->
											<div class="modal-footer flex-center">
												<!--begin::Button-->
												<button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
											<!--end::Modal footer-->
										</form>
										<!--end::Form-->
									</div>
								</div>
							</div>
							<!--end::Modal - New Product-->
							<!--begin::Modal - New Product-->
							<div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header border-0 justify-content-end">
											<!--begin::Edit-->
											<div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
												<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
														<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Edit-->
											<!--begin::Edit-->
											<div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
												<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
														<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
														<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Edit-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body pt-0 pb-20 px-lg-17">
											<!--begin::Row-->
											<div class="d-flex">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-muted me-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
														<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
														<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<div class="mb-9">
													<!--begin::Event name-->
													<div class="d-flex align-items-center mb-2">
														<span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
														<span class="badge badge-light-success" data-kt-calendar="all_day"></span>
													</div>
													<!--end::Event name-->
													<!--begin::Event description-->
													<div class="fs-6" data-kt-calendar="event_description"></div>
													<!--end::Event description-->
												</div>
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-2">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success me-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" cx="12" cy="12" r="8" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Event start date/time-->
												<div class="fs-6">
													<span class="fw-bolder">Starts</span>
													<span data-kt-calendar="event_start_date"></span>
												</div>
												<!--end::Event start date/time-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center mb-9">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-danger me-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" cx="12" cy="12" r="8" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Event end date/time-->
												<div class="fs-6">
													<span class="fw-bolder">Ends</span>
													<span data-kt-calendar="event_end_date"></span>
												</div>
												<!--end::Event end date/time-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="d-flex align-items-center">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-muted me-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
														<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Event location-->
												<div class="fs-6" data-kt-calendar="event_location"></div>
												<!--end::Event location-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Modal body-->
									</div>
								</div>
							</div>
							<!--end::Modal - New Product-->
							<!--end::Modals-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
@endsection