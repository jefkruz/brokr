@extends('layouts.admin')



@section('content')
    <div class="row">

        <div class="col-xl-6 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">View Post</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    {!! html_entity_decode($post->body) !!}
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex px-0 justify-content-between">
                            <strong>Posted On:</strong>
                            <span class="mb-0"> {{date('jS F, Y ', strtotime($post->created_at)) }}</span>
                        </li>
                        <li class="list-group-item d-flex px-0 justify-content-between">
                            <strong>Post Title:</strong>
                            <span class="mb-0"> {{ucwords($post->title)}}</span>
                        </li>
                        <li class="list-group-item d-flex px-0 justify-content-between">
                            <strong>Status:</strong>
                            @if($post->category=='PUBLIC')
                                <span class="badge badge-success">{{ $post->category }}</span>
                            @endif
                            @if($post->category=='PRIVATE')
                                <span class="badge badge-danger">{{ $post->category }}</span>
                            @endif
                        </li>
                        <li class="list-group-item d-flex px-0 justify-content-between">
                            <strong>Image:</strong>
                            <img class="img-thumbnail" src="{{asset('storage/posts/'.$post->image??'storage/posts/post.png')}}" alt="Photo">

                        </li>




                    </ul>


                </div>
            </div>
        </div>
    </div>



@endsection
