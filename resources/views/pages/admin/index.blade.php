@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger">
            <a href="{{route('users.index')}}">
            <div class="card-body  p-4">
                <div class="media">
									<span class="me-3">
										 <i class="fas fa-users"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">All Realtors</p>
                        <h3 class="text-white">{{$users->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-success">
            <a href="{{route('birthdays')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-birthday-cake"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Birthdays</p>
                        <h3 class="text-white">{{$birthdays->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-info">
            <a href="{{route('receipts.admin')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-list-alt"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">All Transactions</p>
                        <h3 class="text-white">{{$receipts->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-primary">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-shopping-cart"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">All Orders</p>
                        <h3 class="text-white">0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-red">
            <a href="{{route('commissions.index')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-money-bill"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">All Commissions</p>
                        <h3 class="text-white">{{$commissions->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-gray-dark">
            <a href="{{route('posts.index')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-newspaper "></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Posts</p>
                        <h3 class="text-white">{{$posts->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-dark">
            <a href="{{route('properties.index')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-building"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Properties</p>
                        <h3 class="text-white">{{$properties->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-black">
            <a href="{{route('settings')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-tools"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Homepage Settings</p>
                        <h3 class="text-white">4</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
@endsection
