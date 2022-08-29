@extends('layouts.main')

@section('content')
    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ms-0">
                            <a href="#">
                                <img src="{{asset('storage/posts/'.$post->image??'storage/posts/post.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <div class="post-date ms-0">
                            <span class="day">{{date("d",strtotime($post->created_at))}}</span>
                            <span class="month">{{strtoupper(date("M",strtotime($post->created_at)))}}</span>
                        </div>

                        <div class="post-content ms-0">

                            <h2 class="font-weight-semi-bold"><a href="#">{{ucwords($post->title)}}</a></h2>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a href="#">Administrator</a> </span>

                            </div>

                            {!! html_entity_decode($post->body) !!}




                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>
@endsection
