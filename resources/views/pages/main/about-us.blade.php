@extends('layouts.main')
@section('content')
    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                    <p class="lead pe-lg-5 me-lg-5">Brokr International Ltd.</p>
                    <p>We are a creative value provider for stakeholders in the Real Estate industry through superior product knowledge, simple exchange platforms, training, development, empowerment via an integrated vehicle and unique experience.</p>
                    <a href="{{route('about-us')}}" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">LEARN MORE</a>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
                    <img src="{{asset('img/slides/key.png')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                    <img src="{{asset('img/slides/smile.png')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="{{asset('img/slides/main.png')}}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-color-light border-0 m-0">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                        <div class="col-4">
                            <img class="img-fluid mb-4 mb-lg-0" src="{{asset('images/android-chrome-192x192.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="font-weight-bold text-5 line-height-5 mb-1">Our Mission</h2>
                            <p class="mb-0">We are dedicated to providing world-class service and market-leading expertise to our clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                        <div class="col-4">
                            <img class="img-fluid mb-4 mb-lg-0" src="{{asset('images/android-chrome-192x192.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="font-weight-bold text-5 line-height-5 mb-1">Our Vision</h2>
                            <p class="mb-0">To win at what we do and we do all we can to
                                help our customers and entire brokerage team to build wealth through Real Estate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="row align-items-center justify-content-center justify-content-md-start">
                        <div class="col-4">
                            <img class="img-fluid mb-4 mb-lg-0" src="{{asset('images/android-chrome-192x192.png')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="font-weight-bold text-5 line-height-5 mb-1">Our Goal</h2>
                            <p class="mb-0">We have a mission to deliver affordable, fast developing lands to our clients thereby exposing them to avenues to steps closer to achieving their dream.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                    <p class="lead pe-lg-5 me-lg-5">Brokr International Ltd.</p>
                    <p>We are a creative value provider for stakeholders in the Real Estate industry through superior product knowledge, simple exchange platforms, training, development, empowerment via an integrated vehicle and unique experience.</p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
                    <img src="{{asset('images/slides/key.png')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                    <img src="{{asset('images/slides/smile.png')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="{{asset('images/slides/main.png')}}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row py-5 my-5">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-start appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
                <div class="owl-carousel owl-theme nav-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
                    @foreach($teams as $team)
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="{{asset('storage/team/'.$team->image)}}" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">{{$team->name}}</h3>
                            <p class="text-2 mb-0">{{strtoupper($team->rank)}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                <p class="lead">Let's Create a Unique Experience with Brokr</p>
                <p class="mb-4">Experience Home Ownership & Real Estate Investment without tears.</p>
                <a href="{{route('about-us')}}" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2 p-relative bottom-3">LEARN MORE</a>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row text-center pt-4 mt-5">
            <div class="col">
                <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                    <span>We're not the only ones </span>
                    <span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
                    <span> about Brokr...</span>
                </h2>
                <h4 class="text-primary lead tall text-4">1,000 MARKETERS IN 10 COUNTRIES USE BROKR PORTAL. MEET OUR CUSTOMERS.</h4>
            </div>
        </div>

        <div class="row text-center mt-5 pb-5 mb-5">
            <div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                @foreach($clients as $client)
                    <div>
                        <img  class="img-fluid" src="{{asset('storage/'.$client->image)}}" alt="">

                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection
