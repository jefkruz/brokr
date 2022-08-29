@include('includes.portal.head')

<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">

                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="{{route('index')}}"><img src="{{asset('logo.png')}}" alt=""></a>
                                </div>
                                <h4 class="text-center mb-4">You are being referred by <b>{{ucwords($username->name)}}</b></h4>
                                @include('includes.portal.alerts')
                                <form method="POST" >
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Upline Username</strong></label>
                                        <input name="referral_id" readonly type="text"  value="{{$username->username}}" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" name="email" required class="form-control " value="{{ old('email') }}" placeholder="Email Address">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Unique Username</strong></label>
                                        <input type="text" class="form-control"  name="username" required value="{{ old('username') }}" placeholder="Unique Username">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Full Name</strong></label>
                                        <input type="text" class="form-control" name="name" value="{{old('name')}}" required placeholder="Full Name">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Phone Number</strong></label>
                                        <input type="text" class="form-control"  name="phone" inputmode="tel" required value="{{ old('phone') }}" placeholder="234XXXXXXXXXX">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Bank Name</strong></label>
                                        <input type="text" name="bank" required class="form-control " value="{{ old('bank') }}" placeholder="Bank Name">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Account Name</strong></label>
                                        <input type="text" name="acc_name" required class="form-control " value="{{ old('acc_name') }}" placeholder="Account Name">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Account Number</strong></label>
                                        <input type="text" name="acc_number" required class="form-control " value="{{ old('acc_number') }}" placeholder="Account Number">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password"  name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Confirm  Password</strong></label>
                                        <input type="password"  name="password_confirmation" required class="form-control form-control-lg" placeholder="Confirm Password">
                                    </div>


                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-danger" href="{{route('login')}}">Sign in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

@include('includes.portal.scripts')

