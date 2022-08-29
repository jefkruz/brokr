
<!--**********************************
        Scripts {{asset('portal/')}}
    ***********************************-->
<!-- Required vendors -->
<script src="{{asset('portal/vendor/global/global.min.js')}}"></script>
<script src="{{asset('portal/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('portal/js/custom.min.js')}}"></script>
<script src="{{asset('portal/js/deznav-init.js')}}"></script>


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
