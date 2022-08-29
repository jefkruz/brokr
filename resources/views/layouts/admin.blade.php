@include('includes.portal.head')
<body>
<!--*******************
      Preloader start
  ********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
       Main wrapper start
   ***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{route('admin')}}" class="brand-logo">
            <img class="logo-abbr" src="{{asset('50x50.png')}}" alt="">
            <img class="logo-compact" src="{{asset('text.png')}}" alt="">
            <img class="brand-title" src="{{asset('text.png')}}" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

@include('includes.portal.admin.navbar')
@include('includes.portal.admin.sidebar')

</body>
<!--**********************************
        Content body start
    ***********************************-->
<div class="content-body">
    <div class="container-fluid">
@include('includes.portal.admin.breadcrumbs')
@yield('content')

<!--**********************************
            Footer start
 ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://jefkruz.com/" target="_blank">Jefkruz inc.</a> <script>document.write(new Date().getFullYear());</script></p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

@include('includes.portal.scripts')
</body>
    </html>
