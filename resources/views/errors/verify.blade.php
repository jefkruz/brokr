<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- FavIcon -->
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('img/logo/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('img/logo/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('img/logo/favicon-16x16.png') }}">

    <link rel="mask-icon" href="{{ asset('img/logo/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" type="image/x-icon" href=" {{ asset('img/logo/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="{{ asset('img/logo/site.webmanifest') }}">


    <!-- Document title -->

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('main/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/theme-shop.css')}}">




    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('main/css/skins/skin-landing.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('main/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>


</head>
<body data-plugin-page-transition>


<div class="body">


<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark"> Sorry! Account Not Verified</h1>
                </div>

            </div>
        </div>
    </section>

    <div class="container">

        <section class="http-error">
            <div class="row justify-content-center py-3">
                <div class="col-md-7 text-center">
                    <div class="http-error-main">
                        <h2>Sorry!</h2>
                        <p>Please Check  Your Email For the Verification Link .</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <h4 class="text-primary">Here are some useful links</h4>
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about-us')}}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </section>

    </div>
    <section class="section section-default border-0 m-0">
        <div class="container py-4">

            <div class="row pb-4">
                <div class="col">
                    <form action="{{route('search')}}" method="get">
                        <div class="input-group input-group-lg">
                            <input class="form-control h-auto" placeholder="Search anything..." name="query" id="s" type="text">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

</div>
@include('includes.main.scripts')
