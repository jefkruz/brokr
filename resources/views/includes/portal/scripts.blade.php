
<!--**********************************
{{--        Scripts {{asset('portal/')}}--}}
    ***********************************-->
<!-- Required vendors -->
<script src="{{asset('portal/vendor/global/global.min.js')}}"></script>
<script src="{{asset('portal/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('portal/js/custom.min.js')}}"></script>
<script src="{{asset('portal/js/deznav-init.js')}}"></script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '797291491298913',
            xfbml      : true,
            version    : 'v14.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@yield('datascripts')

<!-- Init file -->
<script src="{{asset('portal/js/plugins-init/widgets-script-init.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.7/dist/sweetalert2.all.min.js"></script>
<!-- Toastr -->
<script src="{{asset('portal/vendor/toastr/js/toastr.min.js')}}"></script>

<!-- All init script -->
<script src="{{asset('portal/js/plugins-init/toastr-init.js')}}"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'success') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
