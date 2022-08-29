@extends('layouts.admin')

@section('datastyles')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('portal/plugins/summernote/summernote-bs4.min.css')}}">
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Property</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('properties.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pages.admin.property.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

