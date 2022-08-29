@include('includes.main.header')
@include('includes.main.navbar')
<div role="main" class="main">


    <!-- CONTENT -->
@yield('content')

<!-- END: CONTENT -->
    @include('includes.main.main_footer')

</div>
@include('includes.main.scripts')

