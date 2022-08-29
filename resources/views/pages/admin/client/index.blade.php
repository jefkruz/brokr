@extends('layouts.admin')



@section('content')


            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                                <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm "  data-placement="left">
                                    {{ __('Add New') }}
                                </a>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th width="30%">Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $i ++}}</td>

                                        <td>{{ $client->name }}</td>

                                        <td>
                                            <img src="{{asset('storage/clients/'.$client->image )}}" width="100px" class="img-thumbnail" ></td>


                                        <td>
                                            <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('clients.show',$client->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
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


    @include('includes.portal.data')

@endsection
