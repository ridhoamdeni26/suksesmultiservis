@extends('layouts.header')

@section('content')

<style>
    article {
        /* limit the width of the article container */
        width: 300px;
        /* display the contents in a column */
        display: flex;
        flex-direction: column;
        align-items: center;
        background: hsl(0, 0%, 100%);
        line-height: 2;
        border-radius: 10px;
        margin: 0.5rem;
        /* transition for the transform property, updated in the script */
        transition: transform 0.2s ease-out;
        box-shadow: 0 0 5px -2px hsla(0, 0%, 0%, 0.1);
    }

    article figure {
        /* limit the width and height of the figure to show the image in a circle */
        width: 200px;
        height: 200px;
        border-radius: 50%;
        /* specify negative margin matching half the height of the element */
        margin-top: -60px;
        /* position relative for the pseudo element */
        position: relative;

    }

    article figure:before {
        /* add a border around the figure matching the color of the background, faking the clip */
        content: "";
        border-radius: inherit;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 115%;
        height: 115%;
        transform: translate(-50%, -50%);
        border: 1rem solid hsl(250, 85%, 97%);
        box-shadow: 0 1px hsla(0, 0%, 0%, 0.1);
    }

    article figure img {
        /* stretch the image to cover the size of the wrapping container */
        border-radius: inherit;
        width: 100%;
        height: 100%;
        /* object fit to maintain the aspect ratio and fit the width/height */
        object-fit: cover;
    }

    article div {
        /* center the text in the div container */
        text-align: center;
    }

    article div p {
        color: hsl(250, 5%, 45%);
        font-weight: 400;
        font-style: italic;
        font-family: "Noticia Text", serif;
        /* position relative for the pseudo element */
        position: relative;
        z-index: 5;
    }

    article div p:before {
        /* with SVG elements include two icons for the quote */
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        transform: translate(-50%, -50%);
        z-index: -5;
        opacity: 0.05;
        background-position: 20% 20%, 80% 80%;
        background-repeat: no-repeat;
    }

    article div h1 {
        /* considerably reduce the size of the heading */
        color: hsl(260, 5%, 55%);
        font-family: "Lato", sans-serif;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
    }
</style>

<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><img class="me-3 img-mobile-responsive" src="{{ url('assets/img/header/logo-main.png') }}" alt="Icon"></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link ">Beranda</a>
                <a href="{{ url('/about-us') }}" class="nav-item nav-link <?php echo request()->segment(1) == 'about-us' ? 'active' : null ?>">Perusahaan</a>
                <a href="{{ url('/partner-us') }}" class="nav-item nav-link">Mitra Kerja</a>
                <a href="{{ url('/contact-us') }}" class="nav-item nav-link">Hubungi Kami</a>
            </div>
            <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
        </div>
    </nav>
    <section id="main-about-us">
        <!-- Glass Box -->
        <div class="main-box-about-us margin-section-about-us">
            <!-- Main Content -->
            <div class="main-content-about-us mt-5">
                <!-- Main Text -->
                <div class="main-text-about-us">
                    
                    <h1>Tentang <br>Perusahaan</h1>
                    <p>PT. Sukses Multi Servis didirikan pada November 2015. ezCare adalah merek kami untuk jaringan perbaikan nasional di seluruh Indonesia. Tujuan kami adalah untuk memberikan solusi purna jual nasional satu atap yang luar biasa untuk smartphone dan gadget secara umum dengan layanan yang disesuaikan dan dibedakan.
                        Kami memahami bahwa kemampuan untuk memperbaiki bukan satu-satunya hal yang dibutuhkan bagi pelanggan kami, waktu penyelesaian yang cepat, kualitas perbaikan standar, pengalaman pelanggan yang luar biasa, juga penting untuk industri ini.
                    </p>
                    <!-- Buttons -->
                    <div class="button-center-aboutus">
                        <a href="#" class="btn1-about-us">View More</a>
                        <a href="#" class="btn2-about-us">Explore</a>
                    </div>
                </div>
                <!-- Image -->
                <div class="main-img-about-us">
                    <div style="width:350px; height:350px; " id="iphone-aboutus-sms"></div>
                    <!-- <img src="{{ url('assets/img/aboutus/header-about-us-1.png') }}" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <!-- circles -->
    <div class="circle1"></div>
    <div class="circle2"></div>
</div>
<!-- Carousel End -->

<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="benefits bg-purple-gradient py-5">
        <div class="container-md">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center position-relative pb-3 margin-memberikan-solusi mx-auto" style="max-width: 600px;">
                        <div class="mb-0 text-memberikan-solusi text-uppercase">Visi & Misi</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 mb-4">
                    <div class="card-shadow d-flex h-100">
                        <div class="benefit-card bg-white px-3 py-4 clip-bottom d-flex h-100">
                            <div class="card-wrap d-flex flex-wrap">
                                <div class="card-content">
                                    <h3 class="card-title skyblue text-uppercase mb-3 text-center">
                                        Visi
                                    </h3>
                                    <ul class="description-career mb-4">
                                        
                                        <li> Kami ingin menjadi sebuah penyedia solusi layanan purna jual terlengkap untuk seluruh pelanggan kami di Indonesia</li>
                                    </ul>
                                </div>
                                <div class="card-checkmark mx-auto align-self-end">
                                    <img class="img-fluid" src="https://assets.codepen.io/319606/circle-check.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 mb-4">
                    <div class="card-shadow d-flex h-100">
                        <div class="benefit-card bg-white px-3 py-4 clip-bottom d-flex h-100">
                            <div class="card-wrap d-flex flex-wrap">
                                <div class="card-content">
                                    <h3 class="card-title skyblue text-uppercase mb-3 text-center">
                                        Misi
                                    </h3>
                                    <ul class="description-career mb-4">
                                        <li>Memberikan solusi untuk pelanggan dalam hal layanan berkualitas dan produk inovatif</li>
                                        <li>Memberdayakan dan meningkatkan kualitas dan kompetensi dari seluruh karyawan kami</li>
                                        <li>Meningkatkan keuntungan dan profitabilitas untuk seluruh mitra, vendor dan pemegang saham kami</li>
                                    </ul>
                                </div>
                                <div class="card-checkmark mx-auto align-self-end">
                                    <img class="img-fluid" src="https://assets.codepen.io/319606/circle-check.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="benefits padding-teams" id="bg-teams-management">
        <div class="container-md">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center position-relative pb-3 margin-memberikan-solusi mx-auto" style="max-width: 600px;">
                        <div class="mb-0 text-memberikan-solusi text-uppercase">Management</div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                    <div class="bg-teams-new">
                        <article class="margin-bottom-teams">
                            <figure>
                                <img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="{{ url('assets/img/aboutus/pak-emen.png') }}" />
                            </figure>

                            <div>
                                <div class="text-center mt-3">
                                    <div class="text-md">
                                        <div style="text-align:center;font-size: 25px; font-weight: 600;font-family: Poppins, Helvetica, sans-serif;">
                                            Emen Suanli
                                        </div>
                                        <p class="text-gray-500 uppercase text-sm">Director</p>
                                    </div>
                                    <div class="my-4 flex justify-center items-center">
                                        <a href="#">
                                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g data-name="Layer 2">
                                                    <g data-name="facebook">
                                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
                                                        <path d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z" />
                                                    </g>
                                                </g>
                                            </svg></a>
                                        <a href="#">
                                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                <g id="XMLID_826_">
                                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73 c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783 c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598 C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467 c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977 c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889 c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597 c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961 c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895 c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367 c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998 C307.394,57.037,305.009,56.486,302.973,57.388z" />
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="#">
                                            <svg width="19px" height="19px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;" xml:space="preserve">
                                                <g>
                                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872 c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118 c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251 c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z" />
                                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438 c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957 c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z" />
                                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654 c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z" />
                                                    <path style="fill:#FFFFFF;" d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185 c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z" />
                                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814 C93.282,101.457,89.661,116.261,93.282,126.483z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xs-12 mb-4">
                    <div class="bg-teams-new">
                        <article class="margin-bottom-teams">
                            <figure>
                                <img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="{{ url('assets/img/aboutus/sherly.png') }}" />
                            </figure>

                            <div>
                                <div class="text-center mt-3">
                                    <div class="text-md">
                                        <div style="text-align:center;font-size: 25px; font-weight: 600;font-family: Poppins, Helvetica, sans-serif;">
                                            Sherly Farhataini
                                        </div>
                                        <p class="text-gray-500 uppercase text-sm">Ops. Manager</p>
                                    </div>
                                    <div class="my-4 flex justify-center items-center">
                                        <a href="#">
                                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g data-name="Layer 2">
                                                    <g data-name="facebook">
                                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
                                                        <path d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z" />
                                                    </g>
                                                </g>
                                            </svg></a>
                                        <a href="#">
                                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                <g id="XMLID_826_">
                                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73 c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783 c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598 C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467 c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977 c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889 c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597 c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961 c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895 c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367 c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998 C307.394,57.037,305.009,56.486,302.973,57.388z" />
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="#">
                                            <svg width="19px" height="19px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;" xml:space="preserve">
                                                <g>
                                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872 c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118 c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251 c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z" />
                                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438 c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957 c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z" />
                                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654 c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z" />
                                                    <path style="fill:#FFFFFF;" d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185 c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z" />
                                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814 C93.282,101.457,89.661,116.261,93.282,126.483z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xs-12 mb-4">
                    <div class="bg-teams-new">
                        <article class="margin-bottom-teams">
                            <figure>
                                <img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="{{ url('assets/img/aboutus/corry.png') }}" />
                            </figure>

                            <div>
                                <div class="text-center mt-3">
                                    <div class="text-md">
                                        <div style="text-align:center;font-size: 25px; font-weight: 600;font-family: Poppins, Helvetica, sans-serif;">
                                            Corry Aprianti
                                        </div>
                                        <p class="text-gray-500 uppercase text-sm">Accounting & Finance Manager</p>
                                    </div>
                                    <div class="my-4 flex justify-center items-center">
                                        <a href="#">
                                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g data-name="Layer 2">
                                                    <g data-name="facebook">
                                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
                                                        <path d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z" />
                                                    </g>
                                                </g>
                                            </svg></a>
                                        <a href="#">
                                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                <g id="XMLID_826_">
                                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73 c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783 c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598 C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467 c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977 c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889 c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597 c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961 c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895 c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367 c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998 C307.394,57.037,305.009,56.486,302.973,57.388z" />
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="#">
                                            <svg width="19px" height="19px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;" xml:space="preserve">
                                                <g>
                                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872 c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118 c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251 c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z" />
                                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438 c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957 c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z" />
                                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654 c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z" />
                                                    <path style="fill:#FFFFFF;" d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185 c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z" />
                                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814 C93.282,101.457,89.661,116.261,93.282,126.483z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xs-12" style="margin-bottom: 5rem;">
                    <div class="bg-teams-new">
                        <article class="mb-3">
                            <figure>
                                <img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="{{ url('assets/img/aboutus/agum.png') }}" />
                            </figure>

                            <div>
                                <div class="text-center mt-3">
                                    <div class="text-md">
                                        <div style="text-align:center;font-size: 25px; font-weight: 600;font-family: Poppins, Helvetica, sans-serif;">
                                            Agum Dwinanda
                                        </div>
                                        <p class="text-gray-500 uppercase text-sm">Marketing Manager</p>
                                    </div>
                                    <div class="my-4 flex justify-center items-center">
                                        <a href="#">
                                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g data-name="Layer 2">
                                                    <g data-name="facebook">
                                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
                                                        <path d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z" />
                                                    </g>
                                                </g>
                                            </svg></a>
                                        <a href="#">
                                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                <g id="XMLID_826_">
                                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73 c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783 c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598 C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467 c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977 c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889 c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597 c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961 c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895 c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367 c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998 C307.394,57.037,305.009,56.486,302.973,57.388z" />
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="#">
                                            <svg width="19px" height="19px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;" xml:space="preserve">
                                                <g>
                                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872 c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118 c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251 c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z" />
                                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438 c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957 c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z" />
                                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654 c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z" />
                                                    <path style="fill:#FFFFFF;" d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185 c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z" />
                                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814 C93.282,101.457,89.661,116.261,93.282,126.483z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xs-12 mb-4">
                    <div class="bg-teams-new">
                        <article class="mb-3">
                            <figure>
                                <img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="{{ url('assets/img/aboutus/yanto.png') }}" />
                            </figure>

                            <div>
                                <div class="text-center mt-3">
                                    <div class="text-md">
                                        <div style="text-align:center;font-size: 25px; font-weight: 600;font-family: Poppins, Helvetica, sans-serif;">
                                            Yanto
                                        </div>
                                        <p class="text-gray-500 uppercase text-sm">Head of Production</p>
                                    </div>
                                    <div class="my-4 flex justify-center items-center">
                                        <a href="#">
                                            <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <g data-name="Layer 2">
                                                    <g data-name="facebook">
                                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
                                                        <path d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z" />
                                                    </g>
                                                </g>
                                            </svg></a>
                                        <a href="#">
                                            <svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                <g id="XMLID_826_">
                                                    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73 c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783 c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598 C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467 c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977 c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889 c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597 c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961 c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895 c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367 c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998 C307.394,57.037,305.009,56.486,302.973,57.388z" />
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="#">
                                            <svg width="19px" height="19px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;" xml:space="preserve">
                                                <g>
                                                    <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872 c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118 c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251 c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z" />
                                                    <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438 c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957 c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z" />
                                                    <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654 c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z" />
                                                    <path style="fill:#FFFFFF;" d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185 c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z" />
                                                    <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814 C93.282,101.457,89.661,116.261,93.282,126.483z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('myjs')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.1/lottie.min.js"></script>
<script>
    var APP_URL = {!! json_encode(url('/')) !!}
		
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('iphone-aboutus-sms'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: APP_URL + '/assets/img/aboutus/iphone-about-us.json'
    });
</script>

@endsection('myjs')