<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @laravelPWA
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brokr Real Estate management Portal" />
    <meta property="og:title" content="BROKR" />
    <meta property="og:description" content="Brokr Real Estate management Portal" />
    <meta name="format-detection" content="telephone=no">
    <title>{{$page_title??'BROKR'}}</title>
    <meta name="keywords" content="Brokr, Brokr.ng, Brokr Company" />
    <meta name="description" content="Brokr Real Estate management Portal">
    <meta name="author" content="Jefkruz Solutions">
    <!-- Web Application Manifest -->
    <link rel="manifest" href="/manifest.json">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#000000">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PWA">
    <link rel="icon" sizes="512x512" href="/images/icons/icon-512x512.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PWA">
    <link rel="apple-touch-icon" href="/images/icons/icon-512x512.png">

    <link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">

{!! NoCaptcha::renderJs() !!}
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon.ico')}}">


    @yield('datastyles')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('portal/vendor/toastr/css/toastr.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.7/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="{{asset('portal/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('portal/css/style.css')}}" rel="stylesheet">

    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function (registration) {
                // Registration was successful
                console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
    </script>
</head>
