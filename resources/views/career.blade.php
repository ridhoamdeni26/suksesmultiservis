@extends('layouts.header')

@section('content')

<style>
    .navbar-dark {
        background:aliceblue !important;
    }
    .navbar-dark .navbar-nav .nav-link {
        color:#091E3E;
    }
</style>

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><img class="me-3 img-mobile-responsive" src="{{ url('assets/img/header/logo-main.png') }}" alt="Icon"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link">Beranda</a>
                <a href="{{ url('/about-us') }}" class="nav-item nav-link">Perusahaan</a>
                <a href="{{ url('/partner-us') }}" class="nav-item nav-link">Mitra Kerja</a>
                <a href="{{ url('/contact-us') }}" class="nav-item nav-link <?php echo request()->segment(1) == 'contact-us' ? 'active' : null ?>">Hubungi Kami</a>
            </div>
            <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
        </div>
    </nav>

    <div class="container-fluid py-3">
        <div class="row py-3">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-career animated zoomIn">Find Your Dream Job Here</h1>
                <div class="position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                    <div class="mb-0 text-career-2">Open Positions</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Contact Start -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <section class="section-job">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <ul class="job-list">
                            <li class="job-preview">
                                <div class="content float-left">
                                    <a href="{{ url('/career-details') }}">
                                        <h4 class="job-title">
                                        Admin Produksi
                                        </h4>
                                        <h5 class="company">
                                            Jakarta Pusat, DKI Jakarta
                                        </h5>
                                    </a>
                                </div>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=agum@ezcare.id&su=ADMINPRODUKSI" class="btn btn-apply float-sm-right float-xs-left">
                                    Apply
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Contact End -->

@endsection