@include('includes.main.header')
<body data-plugin-page-transition>


<div class="body">


<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">404 - Page Not Found</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="{{route('home')}}">Home</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <section class="http-error">
            <div class="row justify-content-center py-3">
                <div class="col-md-7 text-center">
                    <div class="http-error-main">
                        <h2>404!</h2>
                        <p>We're sorry, but the page you were looking for doesn't exist.</p>
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
                    <form action="" method="get">
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
