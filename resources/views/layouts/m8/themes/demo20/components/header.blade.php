<div id="kt_header" class="header " style="height: unset;">
    <!--begin::Header top-->
    <div class="header-top d-flex align-items-stretch flex-grow-1">
        <!--begin::Container-->
        <div class="d-flex container-xxl w-100">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack align-items-stretch w-100">
                <!--begin::Brand-->
                <div class="d-flex align-items-center align-items-lg-stretch me-5">
                    <!--begin::Heaeder navs toggle-->
                    <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n2 me-2" id="kt_header_navs_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Heaeder navs toggle-->
                    <!--begin::Logo-->
                    <a href="/base/basejs_prod" class="d-flex align-items-center py-3">
                        <img alt="Logo" src="{{ asset('m-logo.png') }}" class="w-100 rounded-circle" style="height: 65px; " />
                    </a>
                    <!--end::Logo-->
                    <div class="align-self-end" id="kt_brand_tabs">
                        <!--begin::Header tabs-->
                        <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                            {{-- <ul class="nav flex-nowrap">
                                @foreach(config('sidemenu.sidemenu') as $menu)
                                <li class="nav-item">
                                    <a class="nav-link @if(@$module['type'] == $menu['slug']) active @endif" href="{{ $menu['url'] }}">{{ $menu['title'] }}</a>
                                </li>
                                @endforeach
                            </ul> --}}
                        </div>
                        <!--end::Header tabs-->
                    </div>
                </div>
                <!--end::Brand-->
                <!--begin::Topbar-->
                <div class="d-flex align-items-center flex-shrink-0 py-3">
                    <!--begin::Quick links-->
                    <!--begin::User-->
                    <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                        <!--begin::User info-->
                        <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <!--begin::Name-->
                            <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                {{-- <span class="text-white opacity-75 fs-8 fw-bold lh-1 mb-1">Max</span> --}}
                                <span class="text-white fs-8 fw-bolder lh-1">{{-- {{ auth()->name }} --}}</span>
                            </div>
                            <!--end::Name-->
                            <!--begin::Symbol-->
                            <div class="symbol symbol-30px symbol-md-40px">
                                <img src="{{ asset('m8/demo20/assets/media/avatars/150-1.jpg') }}" alt="image" />
                            </div>
                            <!--end::Symbol-->
                        </div>
                        <!--end::User info-->
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{ asset('m8/demo20/assets/media/avatars/150-1.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{-- {{ auth()->user()->name }} --}}
                                        </div>
                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{-- {{ auth()->user()->phone }} --}}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a class="menu-link px-5 align-middle mt-5 p-2" href="{{  url('users')}}" data-action="data_modal">Profile</a>
                            </div>
                            {{-- <div class="menu-item px-5">
                                 <input type="file" name="user_profile">
                            </div> --}}
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a class=" menu-link px-5" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                    </div>
                    <!--end::User -->
                    <!--begin::Heaeder menu toggle-->
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Topbar-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header top-->
</div>

<!--end::Drawers-->
<!--end::Main-->
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
