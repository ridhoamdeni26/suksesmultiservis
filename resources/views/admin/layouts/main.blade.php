<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Sukses Multi Servis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/img/header/favicon.png') }}">
    <!-- preloader css -->
    <link rel="stylesheet" href="{{ URL::asset('backend/admin/assets/css/preloader.min.css') }}" type="text/css"/>
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('backend/admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Toastr Css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Icons Css -->
    <link href="{{ URL::asset('backend/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ URL::asset('backend/admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>
</head>

@section('body')
    <body class="pace-done">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.layouts.topbar')
        @include('admin.layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('admin.layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
<script src="{{ URL::asset('backend/admin/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
<script src="{{ URL::asset('backend/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('backend/admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{ URL::asset('backend/admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('backend/admin/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{ URL::asset('backend/admin/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<!-- toastr js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- pace js -->
<script src="{{ URL::asset('backend/admin/assets/libs/pace-js/pace.min.js')}}"></script>


@yield('script')

<!-- App js -->
<script src="{{ URL::asset('backend/admin/assets/js/app.js')}}"></script>

@yield('script-bottom')

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
        @if(Session::has('messege'))
        var type = "{{Session::get('alert-type','info')}}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
        @endif

    </script>
</body>

</html>
