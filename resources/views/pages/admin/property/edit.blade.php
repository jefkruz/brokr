@extends('layouts.admin')
@section('datastyles')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('portal/plugins/summernote/summernote-bs4.min.css')}}">
@endsection



@section('content')

        <div class="">

            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Property</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('properties.update', $property->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pages.admin.property.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

