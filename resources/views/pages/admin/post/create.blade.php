@extends('layouts.admin')



@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">



                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Post</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pages.admin.post.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
