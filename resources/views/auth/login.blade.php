@include('includes.portal.head')

<body class="h-100 mt-5">
<div class="authincation h-100">
    <div class="container h-100 ">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="{{route('index')}}"><img src="{{asset('logo.png')}}" alt=""></a>
                                </div>
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                @include('includes.portal.alerts')
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
{{--                                        <div class="form-group">--}}
{{--                                            <div class="form-check custom-checkbox ms-1">--}}
{{--                                                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                                <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        @if (Route::has('password.request'))

                                            <div class="form-group">
                                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                    </div>


                                </form>
                                <hr>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <div class="flex items-center justify-end mt-4 align-middle ">
                                            <a href="{{ route('auth.google') }}">
                                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"  width="100%" >
                                            </a>
                                        </div>




                                    </div>

                                    <div class="col-md-6">


                                        <div class="flex items-center justify-end mt-4">
                                            <a class="btn" href="{{ url('auth/facebook') }}"
                                               style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                                                Login with Facebook
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-danger" href="{{route('register')}}">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.portal.scripts')


