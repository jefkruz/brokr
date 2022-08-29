<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brokr Real Estate management Portal" />
    <meta property="og:title" content="BROKR" />
    <meta property="og:description" content="Brokr Real Estate management Portal" />
    <meta name="format-detection" content="telephone=no">
    <title>{{$page_title??'BROKR'}}</title>
    <meta name="keywords" content="Brokr, Brokr.ng, Brokr Company" />
    <meta name="description" content="Brokr Real Estate management Portal">
    <meta name="author" content="Jefkruz Solutions">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/site.webmanifest')}}">


    <!-- Document title -->

@include('includes.main.translate')
    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('main/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('main/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('main/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('main/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/theme-shop.css')}}">




    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('main/css/skins/skin-corporate-3.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('main/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('main/vendor/modernizr/modernizr.min.js')}}"></script>

    {!! NoCaptcha::renderJs() !!}
</head>
<body data-plugin-page-transition>


<div class="body">
