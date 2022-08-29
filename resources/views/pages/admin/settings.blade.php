@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-danger">
            <a href="{{route('teams.index')}}">
            <div class="card-body  p-4">
                <div class="media">
									<span class="me-3">
										 <i class="fas fa-users"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Our Team</p>
                        <h3 class="text-white">{{$teams->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-success">
            <a href="{{route('clients.index')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-birthday-cake"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">Partners</p>
                        <h3 class="text-white">{{$clients->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="widget-stat card bg-info">
            <a href="{{route('acts.index')}}">
            <div class="card-body p-4">
                <div class="media">
									<span class="me-3">
										<i class="fas fa-list-alt"></i>
									</span>
                    <div class="media-body text-white text-end">
                        <p class="mb-1">What We Do</p>
                        <h3 class="text-white">{{$acts->count()}}</h3>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>


</div>
@endsection
