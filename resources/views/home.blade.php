@extends('layouts.header')

@section('content')


<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><img class="me-3 img-mobile-responsive" src="{{ url('assets/img/header/logo-main.png') }}" alt="Icon"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Beranda</a>
                <a href="{{ url('/about-us') }}" class="nav-item nav-link">Perusahaan</a>
                <a href="{{ url('/partner-us') }}" class="nav-item nav-link">Mitra Kerja</a>
                <a href="{{ url('/contact-us') }}" class="nav-item nav-link">Hubungi Kami</a>
            </div>
            <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
        </div>
    </nav>
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='{{ url('assets/img/header/header-1.svg') }}'>">
            <img class="img-fluid" src="{{ url('assets/img/header/header-1.svg') }}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-xl-10 col-lg-8 col-xs-12">
                            <h1 class="display-1 text-white animated header-responsive slideInDown text-uppercase">Solusi</h1>
                            <h1 class="display-1 text-white animated header-responsive slideInDown text-uppercase">Terbaik</h1>
                            <h1 class="display-1 text-white animated header-responsive slideInDown text-uppercase">Gadget Anda</h1>
                            
                            <p class="fs-5 fw-normal header-responsive text-white mb-4 pb-3">Kita hadir sebagai solusi dalam permasalahan Gadget yang kamu alami</p>
                            <a href="#" class="btn btn-primary header-button-center rounded-pill py-3 px-5 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='{{ url('assets/img/header/header-3.jpg') }}'>">
            <img class="img-fluid" src="{{ url('assets/img/header/header-3.jpg') }}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-xl-10 col-lg-8 col-xs-12">
                            <h1 class="display-1 text-white animated header-responsive slideInDown text-uppercase">Solusi</h1>
                            <h1 class="display-1 text-white animated header-responsive slideInDown text-uppercase">Terbaik</h1>
                            <h1 class="display-1 text-white animated header-responsive slideInDown text-uppercase">Gadget Anda</h1>
                            <p class="fs-5 fw-medium header-responsive text-white mb-4 pb-3">Kita hadir sebagai solusi dalam permasalahan Gadget yang kamu alami</p>
                            <a href="#" class="btn btn-primary header-button-center rounded-pill py-3 px-5 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- service Start -->
<div class="container-xxl mb-5">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 margin-memberikan-solusi mx-auto" style="max-width: 600px;">
            <div class="mb-0 text-memberikan-solusi text-uppercase">kami hadir</div>
            <div class="mb-0 text-memberikan-solusi text-uppercase">memberikan solusi</div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="slide-container-jasa-service">
                    <div class="wrapper-jasa-service">
                        <div class="clash-card-jasa-service">
                            <div class="clash-card__image-jasa-service clash-card__image--jasa-service">
                                <img src="{{ url('assets/img/service/service-1.svg') }}" alt="jasa-service" />
                            </div>
                            <div class="clash-card__unit-name-jasa-service">JASA SERVIS DAN PERBAIKAN</div>
                            <div class="clash-card__unit-description-jasa-service"> Sukses Multi Servis hadir sebagai solusi handal dalam permasalahan yang berhubungan dengan Gadget dan Elektronik, khususnya Smartphone. Didukung dengan teknisi yang tersertifikasi dan berpengalaman serta didukung dengan peralatan terkini. </div>
                        </div>
                        <!-- end clash-card jasa-service-->
                    </div>
                    <!-- end wrapper -->
                </div>
                <!-- end container -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="slide-container-antar-jemput">
                    <div class="wrapper-antar-jemput">
                        <div class="clash-card-antar-jemput">
                            <div class="clash-card__image-antar-jemput clash-card__image--antar-jemput">
                                <img src="{{ url('assets/img/service/service-2.png') }}" alt="antar-jemput" />
                            </div>
                            <div class="clash-card__unit-name-antar-jemput">LAYANAN ANTAR JEMPUT BARANG</div>
                            <div class="clash-card__unit-description-antar-jemput"> Dukungan kurir dalam kota untuk melakukan penjemputan dan pengantaran barang pelanggan yang menggunakan jasa Servis Multi Sukses. </div>
                        </div>
                        <!-- end clash-card antar-jemput-->
                    </div>
                    <!-- end wrapper -->
                </div>
                <!-- end container -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="slide-container-layanan-pelanggan">
                    <div class="wrapper-layanan-pelanggan">
                        <div class="clash-card-layanan-pelanggan">
                            <div class="clash-card__image-layanan-pelanggan clash-card__image--layanan-pelanggan">
                                <img src="{{ url('assets/img/service/service-3.1.svg') }}" alt="layanan-pelanggan" />
                            </div>
                            <div class="clash-card__unit-name-layanan-pelanggan">LAYANAN PELANGGAN</div>
                            <div class="clash-card__unit-description-layanan-pelanggan"> Hadir untuk memenuhi kebutuhan pelanggan atau calon pelanggan mengenai informasi seputar jasa servis dan estimasi biaya perbaikan di Sukses Multi Servis. </div>
                        </div>
                        <!-- end clash-card layanan-pelanggan-->
                    </div>
                    <!-- end wrapper -->
                </div>
                <!-- end container -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="slide-container-ruang-penyimpanan">
                    <div class="wrapper-ruang-penyimpanan">
                        <div class="clash-card-ruang-penyimpanan">
                            <div class="clash-card__image-ruang-penyimpanan clash-card__image--ruang-penyimpanan">
                                <img src="{{ url('assets/img/service/service-4.svg') }}" alt="ruang-penyimpanan" />
                            </div>
                            <div class="clash-card__unit-name-ruang-penyimpanan">RUANG PENYIMPANAN</div>
                            <div class="clash-card__unit-description-ruang-penyimpanan"> Memiliki ruang penyimpanan yang lengkap untuk suku cadang dan beragam peralatan kerja yang dikelola secara profesional. </div>
                        </div>
                        <!-- end clash-card ruang-penyimpanan-->
                    </div>
                    <!-- end wrapper -->
                </div>
                <!-- end container -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="slide-container-pengalaman-pelanggan">
                    <div class="wrapper-pengalaman-pelanggan">
                        <div class="clash-card-pengalaman-pelanggan">
                            <div class="clash-card__image-pengalaman-pelanggan clash-card__image--pengalaman-pelanggan">
                                <img src="{{ url('assets/img/service/service-5.svg') }}" alt="pengalaman-pelanggan" />
                            </div>
                            <div class="clash-card__unit-name-pengalaman-pelanggan">PENGALAMAN PELANGGAN</div>
                            <div class="clash-card__unit-description-pengalaman-pelanggan"> Memastikan kualitas hasil jasa dan kepuasan pelanggan serta membangun hubungan emosional agar tetap menggunakan jasa kita. </div>
                        </div>
                        <!-- end clash-card pengalaman-pelanggan-->
                    </div>
                    <!-- end wrapper -->
                </div>
                <!-- end container -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="slide-container-laporan-langsung">
                    <div class="wrapper-laporan-langsung">
                        <div class="clash-card-laporan-langsung">
                            <div class="clash-card__image-laporan-langsung clash-card__image--laporan-langsung">
                                <img src="{{ url('assets/img/service/service-6.svg') }}" alt="laporan-langsung" />
                            </div>
                            <div class="clash-card__unit-name-laporan-langsung">LAPORAN LANGSUNG</div>
                            <div class="clash-card__unit-description-laporan-langsung"> Selalu memberikan laporan perkembangan terbaru kepada customer tentang status pengerjaan yang sedang berlangsung. </div>
                        </div>
                        <!-- end clash-card laporan-langsung-->
                    </div>
                    <!-- end wrapper -->
                </div>
                <!-- end container -->
            </div>
        </div>
    </div>
</div>
<!-- service End -->

<!-- Milestones Start -->
<div class="container-xxl">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 margin-milestones mx-auto" style="max-width: 600px;">
            <div class="mb-0 text-milestones text-uppercase">MILESTONES</div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
            <section class="ps-timeline-sec mb-3">
                <div class="container-milestones">
                    <ol class="ps-timeline">
                        <li>
                            <div class="img-handler-top">
                                <p class="font-img">AIG</p>
                                <p class="font-img">ADVAN</p>
                                <p class="font-img">LAKU6</p>
                                <p class="font-img">BLIBLI</p>
                            </div>
                            <span class="ps-sp-top">17</span>
                        </li>
                        <li>
                            <div class="img-handler-bot">
                                <div class="mobile-font-image-18">
                                    <p class="font-img">ADVAN</p>
                                    <p class="font-img">ACER</p>
                                    <p class="font-img">ASUS</p>
                                    <p class="font-img">QOALA</p>
                                    <p class="font-img">SALVUS</p>
                                </div>
                            </div>
                            <span class="ps-sp-bot">18</span>
                        </li>
                        <li>
                            <div class="img-handler-top">
                                <p class="font-img">AMTRUST</p>
                                <p class="font-img">ACER</p>
                                <p class="font-img">ASUS</p>
                                <p class="font-img">AOC PHILIPS</p>
                                <p class="font-img">BROTHER</p>
                                <p class="font-img">KANSELIR</p>
                                <p class="font-img">ALLIANZ</p>
                            </div>
                            <span class="ps-sp-top">19</span>
                        </li>
                        <li>
                            <div class="img-handler-bot">
                                <p class="font-img">CHUBB</P>
                                <p class="font-img">ACER</p>
                                <p class="font-img">ASUS</p>
                                <p class="font-img">AOC PHILIPS</p>
                                <p class="font-img">BROTHER</p>
                                <p class="font-img">KANSELIR</p>
                                <p class="font-img">ALLIANZ</p>
                                <p class="font-img">QOALA</P>
                                <p class="font-img">SALVUS</P>
                            </div>
                            <span class="ps-sp-bot">20</span>
                        </li>
                        <li>
                            <div class="img-handler-top">
                                <div class="mobile-font-image-21">
                                    <p class="font-img">KUBIK</p>
                                    <p class="font-img">INFINIX</p>
                                    <p class="font-img">ITEL</p>
                                    <p class="font-img">TECNO</p>
                                    <p class="font-img">BOLTTECH</p>
                                </div>
                            </div>
                            <span class="ps-sp-top">21</span>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- Milestones End -->

<!-- world Start -->
<div class="container-xxl">
    <div class="row">
        <div class="col-lg-12 col-md-12 wow fadeInUp">
            <div class="section-title text-center position-relative pb-3 mt-5 mb-2 mx-auto" style="max-width: 600px;">
                <div class="mb-0 text-our-client text-uppercase">Klien Kami</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 py-5 mb-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ url('assets/img/client/ourclient-1.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-2.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-3.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-4.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-5.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-6.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-7.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-8.svg') }}" alt="">
                    <img src="{{ url('assets/img/client/ourclient-9.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- world End -->


@endsection