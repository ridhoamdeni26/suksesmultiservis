<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Sukses Multi Servis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sukses Multi Servis" name="description" />
    <meta content="Sukses Multi Servis" name="author" />
    <meta property="og:title" content="{{ $meta['meta_title'] }}" />
    <meta name="description" content="{{ $meta['meta_desc']}}" />
    <meta property="og:description" content="{{ $meta['meta_desc']}}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/img/header/favicon.png') }}">


    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('backend/admin/assets/css/preloader.min.css') }}" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-4 col-lg-4 col-md-4 offset-md-4">
                    <div class="d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="{{ url('/login-admin') }}" class="d-block auth-logo">
                                        <img src="{{ url('assets/img/header/logo-main.png') }}" alt="" height="80"> <span class="logo-txt"></span>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <p class="text-muted mt-2">Sign in to continue Sukses Multi Servis.</p>
                                    </div>
                                    <form class="custom-form mt-4 pt-2" id="loginValidate" action="{{ route('login.admin') }}" method="POST">
                                        @csrf

                                        @if(session()->has('success'))
                                            <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                                                <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> - {{ session()->get('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @if(session()->has('error'))
                                        <div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
                                            <i class="mdi mdi-block-helper me-3 align-middle text-danger"></i><strong>Error</strong> - {{ session()->get('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif

                                       

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">

                                            <div class="col-12" id="label_email"></div>

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <label class="form-label">Password</label>
                                                </div>
                                            </div>

                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>

                                                <div class="col-12" id="label_password"></div>

                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Sukses Multi Servis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>


    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="{{ asset('backend/admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/admin/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/admin/assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('backend/admin/assets/libs/pace-js/pace.min.js') }}"></script>
    <!-- password addon init -->
    <script src="{{ asset('backend/admin/assets/js/pages/pass-addon.init.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#loginValidate").validate({
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "email") error.insertAfter("#label_email");
                    if (element.attr("name") == "password") error.insertAfter("#label_password");
                },

                rules: {
                    email: {
                        required: true,
                        email: true,
                        minlength: 6,
                    },
                    password: {
                        required: true,
                        minlength: 6,
                    },
                },
                messages: {
                    email: {
                        required: "<div class='text-danger my-text-danger pl-1'> Please enter your Email</div>",
                        email: " <div class='text-danger my-text-danger pl-1'> Please enter your Email with true format</div>",
                        minlength: " <div class='text-danger my-text-danger pl-1'> Please enter your Email minimal 6 character</div>",
                        emailexist: " <div class='text-danger my-text-danger pl-1'> Email exist</div>",
                    },
                    password: {
                        required: " <div class='text-danger my-text-danger pl-1'> Please enter your Password</div>",
                        minlength: " <div class='text-danger my-text-danger pl-1'> Please enter your Password minimal 6 character</div>",
                    }
                }
            });
        });
    </script>

</body>

</html>