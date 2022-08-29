@extends('layouts.main')
@section('content')
    <section class="page-header page-header-classic page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 data-title-border>{{$page_title}}</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active">{{$page_title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container py-4">

        <div class="row py-3 justify-content-center">
            @foreach($properties as $property)
            <div class="col-sm-8 col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
                <article>
                    <div class="row">
                        <div class="col">
                            <a href="{{url('property/'.$property->slug) }}" class="text-decoration-none">
                                <img src="{{asset('storage/properties/'.$property->banner)}}" class="img-fluid hover-effect-2 mb-3" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"><a href="{{url('property/'.$property->slug) }}" class="text-3 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">{{$property->name}}</a></h4>
                            <p class="mb-2 lead text-4">{{$property->title}}</p>
                            <p class="text-2">{!! html_entity_decode(Str::limit($property->description, 150)) !!}</p>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>

    </div>
@endsection
