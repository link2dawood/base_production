<!DOCTYPE html>
@php($theme_path = 'layouts.m8.themes.demo20.components')
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <title>Mash-Empire</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('m8/demo20/assets/media/logo.jpg') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="https://releases.jquery.com/git/ui/jquery-ui-git.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('m8/demo20/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('m8/demo20/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('m8/demo20/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('m8/demo20/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @include($theme_path.'.header')

                @yield('content')


            </div>
        </div>
    </div>
    @include($theme_path.'.footer')





    <!--begin::Javascript-->

    
    <script>var hostUrl = "{{ asset('m8/demo20/assets/') }}";</script>

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('m8/demo20/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('m8/demo20/assets/js/scripts.bundle.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('m8/demo20/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    {{-- <script src="{{ asset('m8/demo20/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script> --}}
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    {{-- <script src="{{ asset('m8/demo20/assets/js/widgets.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('m8/demo20/assets/js/custom/widgets.js') }}"></script> --}}
    {{-- <script src="{{ asset('m8/demo20/assets/js/custom/apps/chat/chat.js') }}"></script> --}}
    {{-- <script src="{{ asset('m8/demo20/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script> --}}
    {{-- <script src="{{ asset('m8/demo20/assets/js/custom/utilities/modals/create-campaign.js') }}"></script> --}}
    {{-- <script src="{{ asset('m8/demo20/assets/js/custom/utilities/modals/create-app.js') }}"></script> --}}
    {{-- <script src="{{ asset('m8/demo20/assets/js/custom/utilities/modals/users-search.js') }}"></script> --}}
    <script src="{{ asset('m8/demo20/assets/js/custom/red_notice.js') }}"></script>
    <script src="{{ asset('m8/demo20/assets/js/custom/property.js') }}"></script>



    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <script type="text/javascript" src="https://dixeam.com/cdn/basejs/3.0/base.js"></script>
    <script type="text/javascript">
        baseJS.init(
        {
            "site_url": "{{url('/')}}",
            "current_url":"{{URL::current()}}",
            "lang": "en",
            "imasking":true,
            "select2": true,

            "notif": {"type":"toastr", "options":[]},
        }
        );
    </script>

    @yield('scripts')
</body>
<!--end::Body-->
</html>
