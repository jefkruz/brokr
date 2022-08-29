@extends('layouts.main')
@section('content')
    <hr class="m-0">

    <div class="container py-5 mt-3">

        <div class="row">
            <div class="col-lg-8">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-normal text-7 mb-2 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                        {{ucwords($property->name)}} <strong class="font-weight-extra-bold">Property</strong></h2>
                </div>
                <div class="overflow-hidden mb-4">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"><b>Title: </b>{{$property->title}}</p>
                </div>
                <p class="text-color-light-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">{!! html_entity_decode($property->description) !!}</p>
            </div>
            <div class="col-lg-4">
                <div class="testimonial testimonial-primary appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                    <img src="{{asset('storage/properties/'.$property->banner)}}" class="img-thumbnail hover-effect-2 mb-3" alt="" />

                </div>
            </div>
        </div>

    </div>

    <section class="section section-default border-0 m-0">
        <div class="container py-4">

            <div class="row pb-4">
                <div class="col-md-7">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <h4 class="mt-2 mb-2">More<strong> Details</strong></h4>
                        <hr class="bg-color-grey-scale-2 mt-2 mb-4">
                        <div class="pt-2 ">
                          <div class="price-menu-item">
                            <div class="price-menu-item-details">
                                <div class="price-menu-item-title">
                                    <h5 class="custom-secondary-font text-transform-none font-weight-semibold  text-4 mb-0">Actual Price</h5>
                                </div>
                                <div class="price-menu-item-line opacity-4"></div>
                                <div class="price-menu-item-price">
                                    <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                        <span class="text-2-5 text-color-primary">{{$property->actual_price}}</span>
                                    </strong>
                                </div>
                            </div>

                        </div>
                            @if(!empty($property->promo_price))
                            <div class="price-menu-item">
                                <div class="price-menu-item-details">
                                    <div class="price-menu-item-title">
                                        <h5 class="custom-secondary-font text-transform-none font-weight-semibold  text-4 mb-0">Promo Price</h5>
                                    </div>
                                    <div class="price-menu-item-line opacity-4"></div>

                                    <div class="price-menu-item-price">
                                        <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                            <span class="text-2-5 text-color-primary">{{$property->promo_price}}</span>
                                        </strong>
                                    </div>

                                </div>

                            </div>
                            @endif
                        </div>

                        <div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4" id="accordion11">
                            @if(!empty($property->video1))
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11One">
                                           Video 1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11One" class="collapse show">
                                    <div class="card-body mt-3">

                                        <div class="ratio ratio-16x9">
                                            <iframe  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="{{$property->video1}}"></iframe>
                                        </div>






                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(!empty($property->video2))
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Two">
                                            Video 2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Two" class="collapse">
                                    <div class="card-body mt-3">
                                        <div class="ratio ratio-16x9">
                                            <iframe  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="{{$property->video2}}"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(!empty($property->video3))
                                <div class="card card-default mb-2">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Two">
                                                Video 3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse11Two" class="collapse">
                                        <div class="card-body mt-3">
                                            <div class="ratio ratio-16x9">
                                                <iframe  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="{{$property->video3}}"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif


                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="owl-carousel owl-theme dots-inside mb-0 pb-0" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateOut': 'fadeOut', 'dots': false}">

                            @foreach (json_decode($property->images, true) as $picture)
                            <div class="pb-5">
                                <img alt="" class="img-fluid rounded" src="{{ asset('storage/properties/' . $picture)}}">
                            </div>
                            @endforeach
                        </div>

                        <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
                            <section class="toggle active">
                                <a class="toggle-title">Property Features</a>
                                <div class="toggle-content">
                                    {!! html_entity_decode($property->features) !!}

                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">Property Size</a>
                                <div class="toggle-content">
                                    <p>{{$property->size}}</p>
                                     </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
