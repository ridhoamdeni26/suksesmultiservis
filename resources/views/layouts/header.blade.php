<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sukses Multi Servis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Sukses Multi Service" name="keywords">
    <meta content="Sukses Multi Service" name="description">

    <link rel="canonical" href="https://www.suksesmultiservis.id/" />	
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.suksesmultiservis.id/" />
	<meta property="og:site_name" content="suksesmultiservis.id" />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	<meta name="googlebot-news" content="index, follow" />
	<meta content="https://www.suksesmultiservis.id" itemprop="url" />
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- META TITLE AND DESCRIPTION -->

    @if( $meta['page'] == "home_sms")
        <meta property="og:title" content="{{ $meta['meta_title'] }}" />
        <meta name="description" content="{{ $meta['meta_desc']}}" />
        <meta property="og:description" content="{{ $meta['meta_desc']}}" />
    @elseif( $meta['page'] == "aboutus_sms")
        <meta property="og:title" content="{{ $meta['meta_title'] }}" />
        <meta name="description" content="{{ $meta['meta_desc']}}" />
        <meta property="og:description" content="{{ $meta['meta_desc']}}" />
    @elseif( $meta['page'] == "partner_sms")
        <meta property="og:title" content="{{ $meta['meta_title'] }}" />
        <meta name="description" content="{{ $meta['meta_desc']}}" />
        <meta property="og:description" content="{{ $meta['meta_desc']}}" />
    @elseif( $meta['page'] == "contactus_sms")
        <meta property="og:title" content="{{ $meta['meta_title'] }}" />
        <meta name="description" content="{{ $meta['meta_desc']}}" />
        <meta property="og:description" content="{{ $meta['meta_desc']}}" />
    @endif

    <!-- Favicon -->
    <link href="{{ url('assets/img/header/favicon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/lib/animate/animate.min.css') }}">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Mystyle Stylesheet -->
    <link href="{{ asset('assets/css/Mystyle.css') }}" rel="stylesheet">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

@yield('content')

@extends('layouts.footer')