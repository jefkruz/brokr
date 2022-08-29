@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <div class="form-head page-titles d-flex  align-items-center">
        <div class="me-auto  d-lg-block">
            <h2 class="text-black font-w600">Property Details</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('properties.index')}}">Property</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ucwords($property->name)}}</a></li>
            </ol>
        </div>
        <a href="{{ route('properties.edit',$property->id) }}" class="btn btn-danger rounded me-3">Update Info</a>
{{--        <a href="javascript:void(0);" class="btn btn-primary rounded light me-3">Refresh</a>--}}
{{--        <a href="javascript:void(0);" class="btn btn-primary rounded"><i class="fas fa-cog me-0"></i></a>--}}
    </div>
    <div class="row">
        <div class="col-xl-3 col-xxl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card bg-red text-center">
                        <div class="card-body">
                            <h2 class="fs-30 text-white">SALE</h2>
                            <span class="text-white font-w300">{{$property->promo_price}} - {{ $property->actual_price }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="position-relative mb-3 d-inline-block">
                                <img src="{{asset( 'storage/users/'.Auth::user()->avatar)??'storage/users/default.png'}}" alt="" class="rounded" width="140">
                                <a href="{{route('profile')}}" class="profile-icon"><i class="las la-cog"></i></a>
                            </div>
                            <h4 class="text-black fs-20 font-w600">{{ucwords(Auth::user()->name)}}</h4>
                            <span class="mb-3 text-black d-block">Realtor</span>
                            <p>{{Auth::user()->address}}<br>{{Auth::user()->city}}, {{Auth::user()->state}}</p>
                            <ul class="property-social">
                                <li><a href="javascript:void(0);"><i class="lab la-instagram"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lab la-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <a href="tel:{{Auth::user()->phone}}" class="btn btn-outline-primary d-block rounded">
                                <i class="las la-phone scale5 me-2"></i>
                                {{Auth::user()->phone}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header mb-0 border-0">
                            <h3 class="fs-20 text-black">Property Videos</h3>
                        </div>
                        @if(!empty($property->video1))
                        <div class="card-body pt-0 text-center">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $property->video1 }}" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif
                        @if(!empty($property->video2))
                            <div class="card-body pt-0 text-center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ $property->video2 }}" allowfullscreen></iframe>
                                </div>
                            </div>
                        @endif
                        @if(!empty($property->video3))
                            <div class="card-body pt-0 text-center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ $property->video3 }}" allowfullscreen></iframe>
                                </div>
                            </div>
                        @endif
{{--                        <div class="card-footer border-0 p-0">--}}
{{--                            <a href="javascript:void(0);" class="btn btn-primary d-block rounded">View in Full Screen</a>--}}
{{--                        </div>--}}
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-9 col-xxl-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="front-view-slider mb-sm-5 mb-3 owl-carousel">
                                <div class="items">
                                    <div class="front-view">
                                        <img src="{{asset('storage/properties/'.$property->banner)}}" alt="">
                                        <div class="info">
                                            <h3 class="fs-30 mb-2 text-white font-w600">Front View</h3>
                                            <p class="mb-0"> {{ $property->title }}</p>
                                        </div>
{{--                                        <div class="buttons">--}}
{{--                                            <a href="javascript:void(0);" class="me-4">--}}
{{--                                                <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <path d="M19.7501 17.125C18.9899 17.1268 18.2409 17.3083 17.5643 17.6548C16.8877 18.0013 16.3026 18.503 15.8569 19.1188L9.79706 15.0793C10.1789 14.0611 10.1789 12.939 9.79706 11.9207L15.8569 7.88126C16.537 8.80338 17.5237 9.45273 18.6397 9.71264C19.7556 9.97256 20.9277 9.826 21.9453 9.29931C22.9629 8.77261 23.7594 7.9003 24.1915 6.8391C24.6237 5.77789 24.6633 4.59736 24.3032 3.50959C23.943 2.42182 23.2068 1.49812 22.2268 0.904453C21.2467 0.310781 20.0871 0.0860493 18.9562 0.270634C17.8254 0.455218 16.7974 1.03702 16.057 1.91151C15.3166 2.786 14.9123 3.89586 14.9168 5.04168C14.9246 5.21774 14.9424 5.39323 14.9699 5.5673L8.45581 9.91005C7.76161 9.28424 6.90085 8.87314 5.97778 8.72652C5.0547 8.5799 4.10892 8.70406 3.25497 9.08396C2.40102 9.46386 1.67554 10.0832 1.16638 10.867C0.657219 11.6508 0.38623 12.5654 0.38623 13.5C0.38623 14.4347 0.657219 15.3492 1.16638 16.133C1.67554 16.9168 2.40102 17.5362 3.25497 17.9161C4.10892 18.296 5.0547 18.4201 5.97778 18.2735C6.90085 18.1269 7.76161 17.7158 8.45581 17.09L14.9699 21.4327C14.9424 21.6068 14.9246 21.7823 14.9168 21.9583C14.9168 22.9143 15.2002 23.8488 15.7313 24.6436C16.2624 25.4384 17.0173 26.0579 17.9005 26.4238C18.7836 26.7896 19.7555 26.8853 20.693 26.6988C21.6306 26.5123 22.4918 26.052 23.1678 25.376C23.8437 24.7001 24.3041 23.8389 24.4906 22.9013C24.6771 21.9637 24.5813 20.9919 24.2155 20.1087C23.8497 19.2255 23.2302 18.4707 22.4354 17.9396C21.6405 17.4085 20.706 17.125 19.7501 17.125Z" fill="white"/>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                    <g clip-path="url(#clip1)">--}}
{{--                                                        <path d="M21.75 0H7.25C5.32718 0 3.48311 0.763837 2.12348 2.12348C0.763837 3.48311 0 5.32718 0 7.25L0 21.75C0 23.6728 0.763837 25.5169 2.12348 26.8765C3.48311 28.2362 5.32718 29 7.25 29H21.75C23.6728 29 25.5169 28.2362 26.8765 26.8765C28.2362 25.5169 29 23.6728 29 21.75V7.25C29 5.32718 28.2362 3.48311 26.8765 2.12348C25.5169 0.763837 23.6728 0 21.75 0V0ZM21.9766 12.4156H20.6172V9.34616L15.4611 14.5L20.6172 19.6557V16.5844H21.9766V21.9766H16.5844V20.6172H19.6543L14.5 15.4611L9.34434 20.6172H12.4156V21.9766H7.02344V16.5844H8.38281V19.6547L13.5389 14.5L8.38508 9.34434V12.4156H7.0257V7.02344H12.4156V8.38281H9.34616L14.5 13.5389L19.6557 8.38508H16.5844V7.0257H21.9766V12.4156Z" fill="white"/>--}}
{{--                                                    </g>--}}
{{--                                                    <defs>--}}
{{--                                                        <clipPath id="clip1">--}}
{{--                                                            <rect width="29" height="29" fill="white"/>--}}
{{--                                                        </clipPath>--}}
{{--                                                    </defs>--}}
{{--                                                </svg>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                @foreach (json_decode($property->images, true) as $picture)
                                <div class="items">
                                    <div class="front-view">
                                        <img src="{{ asset('storage/properties/' . $picture) }}" alt="">
                                        <div class="info">
                                            <h3 class="fs-30 mb-2 text-white font-w600">Front View</h3>
                                            <p class="mb-0">{{ $property->title }}</p>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div>
                                <a href="javascript:void(0);" class="btn btn-primary rounded mb-4">{{$property->title}}</a>
                                <div class="d-md-flex d-block mb-sm-5 mb-3">
                                    <div class="me-auto mb-md-0 mb-4">
                                        <h2 class="font-w600 text-black">{{ucwords($property->name)}}</h2>
                                        <span class="fs-18">
														<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10.9475 4.78947C8.94136 4.78947 7.02346 5.55047 5.61418 6.89569C4.20599 8.23987 3.42116 10.056 3.42116 11.9426C3.42116 14.7033 5.29958 17.3631 7.32784 19.4068C8.3259 20.4124 9.32653 21.2351 10.0786 21.8068C10.434 22.077 10.7326 22.29 10.9475 22.4389C11.1623 22.29 11.4609 22.077 11.8163 21.8068C12.5684 21.2351 13.569 20.4124 14.5671 19.4068C16.5954 17.3631 18.4738 14.7033 18.4738 11.9426C18.4738 10.056 17.689 8.23987 16.2808 6.89569C14.8715 5.55047 12.9536 4.78947 10.9475 4.78947ZM10.9475 23.2632C10.5801 23.8404 10.58 23.8403 10.5797 23.8401L10.5792 23.8398L10.5774 23.8387L10.5718 23.835L10.5517 23.8221C10.5345 23.8109 10.5097 23.7948 10.4779 23.7737C10.4143 23.7317 10.3224 23.6701 10.2063 23.5901C9.97419 23.43 9.64481 23.1959 9.25054 22.8962C8.46315 22.2977 7.41114 21.4333 6.35658 20.3707C4.27957 18.278 2.05273 15.2776 2.05273 11.9426C2.05273 9.67199 2.99797 7.50121 4.66932 5.90583C6.33959 4.31148 8.59845 3.42105 10.9475 3.42105C13.2965 3.42105 15.5554 4.31148 17.2256 5.90583C18.897 7.50121 19.8422 9.67199 19.8422 11.9426C19.8422 15.2776 17.6154 18.278 15.5384 20.3707C14.4838 21.4333 13.4318 22.2977 12.6444 22.8962C12.2501 23.1959 11.9207 23.43 11.6886 23.5901C11.5725 23.6701 11.4806 23.7317 11.417 23.7737C11.3979 23.7864 11.3814 23.7972 11.3675 23.8063C11.3582 23.8124 11.3501 23.8176 11.3432 23.8221L11.3232 23.835L11.3175 23.8387L11.3158 23.8398L11.3152 23.8401C11.315 23.8403 11.3148 23.8404 10.9475 23.2632ZM10.9475 23.2632L11.3148 23.8404C11.0907 23.983 10.8043 23.983 10.5801 23.8404L10.9475 23.2632Z" fill="#666666"/>
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10.9474 10.2632C9.81378 10.2632 8.89479 11.1822 8.89479 12.3158C8.89479 13.4494 9.81378 14.3684 10.9474 14.3684C12.0811 14.3684 13.0001 13.4494 13.0001 12.3158C13.0001 11.1822 12.0811 10.2632 10.9474 10.2632ZM7.52637 12.3158C7.52637 10.4264 9.05802 8.89474 10.9474 8.89474C12.8368 8.89474 14.3685 10.4264 14.3685 12.3158C14.3685 14.2052 12.8368 15.7368 10.9474 15.7368C9.05802 15.7368 7.52637 14.2052 7.52637 12.3158Z" fill="#666666"/>
														</svg>
													{{$property->location}}</span>
                                    </div>
                                    <div class="ms-md-4 text-md-right">
                                        <p class="fs-14 text-black mb-1 me-1">Price range</p>
                                        <h4 class="fs-24 text-primary">{{ $property->promo_price}} - {{ $property->actual_price  }}</h4>
                                    </div>
                                </div>
                                <div class="mb-sm-5 mb-2">
                                    <a href="javascript:void(0);" class="btn btn-primary light rounded me-2 mb-sm-0 mb-2">
                                       <i class="fas fa-tags"></i>
                                        {{$property->size}}
                                    </a>
{{--                                    <a href="javascript:void(0);" class="btn btn-primary light rounded me-2 mb-sm-0 mb-2">--}}
{{--                                        <svg class="me-2" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M19 10.4211L18.6388 12.249C18.0616 15.1706 15.4406 17.3684 12.5829 17.3684H11.6923L13.4082 22H2.28779V10.4211H19ZM5.14753 0C6.68536 0 8.00727 1.29706 8.00727 2.89474V7.52632H18.8743V8.68421H8.00727V9.26316H1.1439L1.14378 11.0001C0.481336 10.4964 0 9.64309 0 8.68421V2.89474C0 1.33809 1.25234 0 2.85974 0H5.14753Z" fill="#3B4CB8"/>--}}
{{--                                        </svg>--}}
{{--                                        2 Bathroom--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:void(0);" class="btn btn-primary light rounded mb-sm-0 mb-2">--}}
{{--                                        <svg class="me-2" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M22.8559 4.49675C21.3906 3.03139 19.6817 1.89671 17.7768 1.12424C15.9372 0.378271 13.9935 0 11.9998 0C10.0061 0 8.06245 0.378271 6.22283 1.12424C4.31792 1.89671 2.60904 3.03139 1.14367 4.49675C0.890918 4.74947 0.890918 5.15923 1.14363 5.41203L3.03417 7.30265C3.15554 7.42403 3.32019 7.49224 3.49178 7.49224H3.49183C3.66347 7.49224 3.82807 7.42407 3.94945 7.30265C6.09977 5.15242 8.95879 3.9682 11.9998 3.9682C15.0407 3.9682 17.8997 5.15242 20.05 7.30265C20.1714 7.42403 20.336 7.49224 20.5076 7.49224C20.6792 7.49224 20.8439 7.42407 20.9652 7.30265L22.8557 5.41203C23.1087 5.15928 23.1087 4.74951 22.8559 4.49675Z" fill="#3B4CB8"/>--}}
{{--                                            <path d="M11.9998 5.34747C9.32727 5.34747 6.81468 6.38818 4.92492 8.27794C4.67217 8.53065 4.67217 8.94042 4.92488 9.19321L6.81542 11.0838C7.06817 11.3366 7.47794 11.3365 7.7307 11.0839C8.87103 9.94367 10.3871 9.31575 11.9997 9.31575C13.6123 9.31575 15.1284 9.94371 16.2687 11.0839C16.3901 11.2053 16.5547 11.2735 16.7264 11.2735C16.898 11.2735 17.0626 11.2053 17.184 11.0839L19.0744 9.19317C19.3271 8.94046 19.3271 8.53069 19.0744 8.27794C17.1848 6.38818 14.6723 5.34747 11.9998 5.34747Z" fill="#3B4CB8"/>--}}
{{--                                            <path d="M11.9998 10.6951C10.7557 10.6951 9.58601 11.1796 8.70619 12.0592C8.58482 12.1806 8.5166 12.3453 8.5166 12.5169C8.5166 12.6885 8.58477 12.8532 8.70619 12.9745L11.5421 15.8105C11.6685 15.9369 11.8341 16 11.9997 16C12.1653 16 12.331 15.9368 12.4574 15.8105L15.2934 12.9745C15.4148 12.8531 15.483 12.6885 15.483 12.5169C15.483 12.3453 15.4148 12.1806 15.2934 12.0593C14.4136 11.1796 13.2439 10.6951 11.9998 10.6951Z" fill="#3B4CB8"/>--}}
{{--                                        </svg>--}}
{{--                                        Wifi Available--}}
{{--                                    </a>--}}
                                </div>
                                <h4 class="text-black fs-20 font-w600">Description</h4>
                                {!! html_entity_decode($property->description) !!}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="image-gallery owl-carousel">
                                @foreach (json_decode($property->images, true) as $picture)
                                <div class="items">
                                    <img src="{{ asset('storage/properties/' . $picture) }}" alt="">
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card property-features">
                        <div class="card-header border-0 pb-0">
                            <h3 class="fs-20 text-black mb-0">Property Features</h3>
                        </div>
                        <div class="card-body">

                            {!! html_entity_decode($property->features) !!}
{{--                            <ul>--}}
{{--                                <li><i class="las la-check-circle"></i>Swimming pool</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Terrace</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Radio</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Grill</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Cable TV</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Air conditioning</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Cofee pot</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Balcony</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Computer</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Parquet</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Internet</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Towelwes</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Roof terrace</li>--}}
{{--                                <li><i class="las la-check-circle"></i>Oven</li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <script src="{{asset('portal/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('portal/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('portal/js/custom.min.js')}}"></script>
    <script src="{{asset('portal/js/deznav-init.js')}}"></script>
@include('includes.portal.data')


    <script src="{{asset('portal/vendor/owl-carousel/owl.carousel.js')}}"></script>

    <script>
        function assignedDoctor()
        {

            /*  testimonial one function by = owl.carousel.js */
            jQuery('.front-view-slider').owlCarousel({
                loop:false,
                margin:30,
                nav:true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                dots:true,
                navText: ['', ''],
                responsive:{
                    0:{
                        items:1
                    },

                    480:{
                        items:1
                    },

                    767:{
                        items:1
                    },
                    1750:{
                        items:1
                    }
                }
            })
            jQuery('.image-gallery').owlCarousel({
                loop:false,
                margin:30,
                nav:true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                navText: ['<i class="fas fa-caret-left"></i>', '<i class="fas fa-caret-right"></i>'],
                responsive:{
                    0:{
                        items:1
                    },

                    480:{
                        items:1
                    },

                    767:{
                        items:2
                    },
                    1750:{
                        items:3
                    }
                }
            })
        }

        jQuery(window).on('load',function(){
            setTimeout(function(){
                assignedDoctor();
            }, 1000);
        });

    </script>
@endsection

