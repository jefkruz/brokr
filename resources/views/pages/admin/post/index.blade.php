@extends('layouts.admin')


@section('content')

            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th >SN</th>
                                    <th >Title</th>
                                    <th >Category</th>
                                    <th >Image</th>
                                    <th >Status</th>
                                    <th >Actions</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$i++ }}</td>

                                        <td>{{$post->title }}</td>
                                        <td>{{$post->category}}</td>

                                        <td>
                                            <img src="{{asset('storage/posts/'.$post->image??'storage/posts/logo.png')}}" width="100px" class="img-thumbnail" >


                                        </td>

                                        <td>{{ $post->status }}</td>
                                        <td>
                                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST" onsubmit="return confirm('Are You sure you want to delete')">
                                                <a class="btn btn-info shadow btn-xs sharp me-1 " href="{{ route('posts.show',$post->slug) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                <a class="btn btn-success shadow btn-xs sharp me-1" href="{{ route('posts.edit',$post->slug) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-fw fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                                <tfoot>
                                <tr>
                                    <th >SN</th>
                                    <th >Title</th>
                                    <th >Category</th>
                                    <th >Image</th>
                                    <th >Status</th>
                                    <th >Actions</th>

                                </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.row -->
                </div>
            </div>

    <!-- Row -->


            @include('includes.portal.data')
@endsection
