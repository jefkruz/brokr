@extends('layouts.portal')

@section('content')


            <!-- row -->
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="text-center p-3 overlay-box " style="background-image: url(storage/img1.jpg);">
                            <div class="profile-photo">
                                <img src="{{asset( 'storage/users/'.Auth::user()->avatar)??'storage/users/default.png'}}" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white">{{ucwords(Auth::user()->name)}}</h3>
                            <p class="text-white mb-0">Realtor</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">My Team</span> <span class="badge badge-rounded badge-primary "><strong >{{$referrals->count()}}	</strong></span></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Total Commissions:</span> 		<strong ><a class="text-danger" href="{{route('commissions.index')}}">₦ {{$commission->sum('commission')}}</a>	</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Pending Transactions</span> <span class="badge badge-rounded badge-warning "><strong >{{$pending->count()}}	</strong></span></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Completed Transactions</span> <span class="badge badge-rounded badge-success "><strong >{{$confirmed->count()}}	</strong></span></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Uplines Name:</span> 		<strong class="text-danger" >{{$upline->name?? 'Self'}}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Uplines Phone :</span> 		<strong ><a  class="text-danger" href="tel:{{$upline->phone?? 'Self'}}">{{$upline->phone?? 'Self'}}</a> 	</strong></li>

                        </ul>
                        <div class="card-footer border-0 mt-0">
                            <p hidden id="toCopy">{{url('register'.'/'.$username)}}</p>
                            <button class="btn btn-primary btn-lg btn-block" onclick="copyToClipboard('Thanks','Link has been copied','success','#toCopy')">
                                <i class="fas fa-copy"></i> Copy Unique Link
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-sm-6">
                            <a href="{{route('referrals')}}">
                               <div class="widget-stat card bg-danger">
                                <div class="card-body  p-4">
                                    <div class="media">
									<span class="me-3">
										<i class="fas fa-users"></i>
									</span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">My Team</p>
                                            <h3 class="text-white">{{$referrals->count()}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-sm-6">
                            <a href="{{route('receipts.index')}}">
                            <div class="widget-stat card bg-success">
                                <div class="card-body p-4">
                                    <div class="media">
									<span class="me-3">
										<i class="fas fa-list-alt"></i>
									</span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">My Transactions</p>
                                            <h3 class="text-white">{{$receipts->count()}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-sm-12">
                            <a href="{{route('viewcommission')}}">
                            <div class="widget-stat card bg-info">
                                <div class="card-body p-4">
                                    <div class="media">
									<span class="me-3">
										<i class="fas fa-money-bill"></i>
									</span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Commission</p>
                                            <h3 class="text-white">₦ {{$commission->sum('commission')}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-sm-12">
                            <div class="widget-stat card bg-primary">
                                <div class="card-body p-4">
                                    <div class="media">
									<span class="me-3">
										<i class="fas fa-shopping-cart"></i>
									</span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">My Orders</p>
                                            <h3 class="text-white">0</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Recent  Transactions</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive recentOrderTable">
                                        <table class="table verticle-middle table-responsive-md">
                                            <thead>
                                            <tr>
                                                <th scope="col">Trans ID</th>
                                                <th scope="col">Client Name</th>
                                                <th scope="col">Estate Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($receipts as $receipt)
                                            <tr>
                                                <td>TRNS0{{ $receipt->id }}{{ $i++ }}</td>
                                                <td>{{ ucwords($receipt->client_name) }}</td>
                                                <td>{{ ucwords($receipt->estate_name) }}</td>
                                                <td>
                                                    @if($receipt->status=='PENDING')
                                                        <span class="badge badge-rounded badge-warning">{{ $receipt->status }}</span>
                                                    @endif
                                                    @if($receipt->status=='APPROVED')
                                                        <span class="badge badge-rounded badge-success">{{ $receipt->status }}</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="{{route('receipts.show',$receipt->id) }}" class="btn btn-sm btn-info">View</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer clearfix " align="right">

                                    <a href="{{route('receipts.index')}}" class="btn btn-sm btn-dark float-right">View All</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h3 class="fs-20 text-black">Recent Properties</h3>

                            </div>
                            <div class="card-body">
                                <div class="testimonial-one owl-carousel">
                                    @foreach($properties as $property)
                                    <div class="items">
                                        <a href="{{route('viewproperty',$property->slug) }}"><img src="{{asset('storage/properties/'.$property->banner)}}" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
                                        <h5 class="fs-16 font-w600 mb-0"><a href="{{route('viewproperty',$property->slug) }}" class="text-black">{{ucwords($property->name)}}</a></h5>
                                        <span class="fs-14 d-block mb-4">{{ucwords($property->title)}}</span>
                                        <a href="{{route('viewproperty',$property->slug) }}" class=" text-red p-1 ps-2 pe-2 me-3 font-w600 rounded">
                                            <i class="fas fa-map-marker"></i>
                                            {{$property->location}}</a>
                                        <a href="{{route('viewproperty',$property->slug) }}" class=" text-red p-1 ps-3 pe-3 font-w600 rounded ">
                                           <i class="fas fa-money-bill-alt"></i>
                                            {{$property->actual_price}}
                                        </a>
                                        {!! html_entity_decode(Str::limit($property->description, 150)) !!}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h3 class="fs-20 text-black">Recent Posts</h3>

                            </div>
                            <div class="card-body">
                                <div class="testimonial-one owl-carousel">
                                    @foreach($posts as $post)
                                    <div class="items">
                                        <a href="{{route('viewpost',[$post->slug])}}"><img src="{{asset('storage/posts/'.$post->image??'storage/posts/post.png')}}" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
                                        <h5 class="fs-16 font-w600 mb-0"><a href="{{route('viewpost',[$post->slug])}}" class="text-black">{{ucwords($post->title)}}</a></h5>

                                        {!! html_entity_decode($post->body) !!}
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card border-0 pb-0">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Top Marketers</h4>
                            </div>
                            <div class="card-body">
                                <div id="DZ_W_Todo2" class="widget-media dz-scroll height370">
                                    <ul class="timeline">
                                        @foreach($sum as $top)
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media me-2">
                                                    <img alt="image" width="50" src="{{asset('storage/users/'.$top->users->avatar )}}">
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-1">{{ucwords($top->users->name)}}
                                                        @php
                                                            $sumtotal =$top->totalsum($top->users->id);
                                                        @endphp
                                                        <span  class="badge light badge-danger ">₦{{$sumtotal->sum('amount')}}</span></h5>
                                                    <small class="d-block">{{$top->users->email}}</small>
                                                </div>

                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->



@endsection
@section('datastyles')
    <link href="{{asset('portal/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('portal/vendor/chartist/css/chartist.min.css')}}">
@endsection
@section('datascripts')
    <script src="{{asset('portal/vendor/owl-carousel/owl.carousel.js')}}"></script>

    <!-- Chartist -->
    <script src="{{asset('portal/vendor/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('portal/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>

    <!-- Flot -->
    <script src=" {{asset('portal/vendor/flot/jquery.flot.js')}}"></script>
    <script src=" {{asset('portal/vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src=" {{asset('portal/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src=" {{asset('portal/vendor/flot-spline/jquery.flot.spline.min.js')}}"></script>

    <!-- Chart sparkline plugin files -->
    <script src="{{asset('portal/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('portal/js/plugins-init/sparkline-init.js')}}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{asset('portal/vendor/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('portal/js/plugins-init/piety-init.js')}}"></script>
    <script src="{{asset('portal/vendor/chart.js/Chart.bundle.min.js')}}"></script>


    <script>
        function carouselReview(){
            /*  testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                loop:true,
                autoplay:true,
                margin:0,
                nav:true,
                dots: false,
                navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
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
                    1000:{
                        items:1
                    }
                }
            })
            /*Custom Navigation work*/
            jQuery('#next-slide').on('click', function(){
                $('.testimonial-one').trigger('next.owl.carousel');
            });

            jQuery('#prev-slide').on('click', function(){
                $('.testimonial-one').trigger('prev.owl.carousel');
            });
            /*Custom Navigation work*/
        }

        jQuery(window).on('load',function(){
            setTimeout(function(){
                carouselReview();
            }, 1000);
        });
    </script>
    <script>
        function copyToClipboard(h1,h5,animicon,element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            /*sweet allert*/
            Swal.fire(
                h1,
                h5,
                animicon
            )
        }
    </script>
    @endsection
