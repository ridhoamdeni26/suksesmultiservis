@extends('layouts.header')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />

<style>
.contact .heading h2 {
    font-size: 30px;
    font-weight: 700;
    margin: 0;
    padding: 0;

}

.contact .heading h2 span {
    color: #ff9100;
}

.contact .heading p {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: #999999;
    margin: 20px 0 60px;
    padding: 0;
}

.contact .form-control {
    padding: 25px;
    font-size: 13px;
    margin-bottom: 10px;
    background: #f9f9f9;
    border: 0;
    border-radius: 10px;
}

.contact button.btn {
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
    background: #ff9100;
    color: #ffffff;
}

.contact .title h3 {
    font-size: 18px;
    font-weight: 600;
}

.contact .title p {
    font-size: 14px;
    font-weight: 400;
    color: #999;
    line-height: 1.6;
    margin: 0 0 40px;
}

.contact .content .info {
    margin-top: 30px;
}
.contact .content .info i {
    font-size: 30px;
    padding: 0;
    margin: 0;
    color: #02434b;
    margin-right: 20px;
    text-align: center;
    width: 20px;
}
.contact .content .info h4 {
    font-size: 13px;
    line-height: 1.4;
}

.contact .content .info h4 span {
    font-size: 13px;
    font-weight: 300;
    color: #999999;
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

    <div class="container-fluid bg-primary py-5 bg-contact-us">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- Contact Start -->
<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
            <h1 class="mb-0">Jika Anda Memiliki Pertanyaan, Jangan Ragu Untuk Menghubungi Kami</h1>
        </div>
        <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact detail</h3>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fab fa-whatsapp"></i>
                            <h4 class="d-inline-block">WHATSAPP :
                                <br>
                                <span>+62-838-71903555</span></h4>
                        </div>
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span>(021) 4228388</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>cs@suksesmultiservis.id</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ALAMAT :<br>
                                <span>Blok.J, Jl. Ruko Cemp. Mas No.35, RW.8, Sumur Batu, Kemayoran, Jakarta Pusat, Jakarta 10640, Indonesia</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="fullname" class="form-control" placeholder="Fullname">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="phone" class="form-control" placeholder="No Handphone">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" id="comment" placeholder="Pesan"></textarea>
                        </div>
                        <button class="btn btn-block" id="btn-submit" type="submit">Send Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
<!-- Contact End -->

@endsection

@section('myjs')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    var APP_URL = {!! json_encode(url('/')) !!}
    $(document).ready(function($){
        $("#btn-submit").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var formData = {
                fullname: $("input[name='fullname']").val(),
                email: $("input[name='email']").val(),
                phone: $("input[name='phone']").val(),
                subject: $("input[name='subject']").val(),
                message: $('textarea[name="message"]').val(),
            };
            var type = "POST";
            var ajaxurl = APP_URL + '/api/contactus';
            $.ajax({
                type: type,
                url: ajaxurl,
                data:  JSON.stringify(formData),
                dataType: "json",
                contentType: "application/json",
                success: function(data){
                    setTimeout(() => {
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.success(data.message, data.status)
                    },500)
                },
                error: function(data, responseText){
                    $.each(data.responseJSON.message, function(k, v) {
                        setTimeout(() => {
                            toastr.options.positionClass = 'toast-bottom-right';
                            toastr.error(v, data.status);
                        },500)
                    });
                }
            });
        });
    });
</script>

@endsection('myjs')