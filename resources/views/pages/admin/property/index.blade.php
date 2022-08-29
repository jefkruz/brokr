@extends('layouts.admin')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('properties.create') }}" class="btn btn-primary btn-sm "  data-placement="left">
                                {{ __('Create New') }}
                            </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                              <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>SN</th>

                                    <th>Name</th>
                                    <th>Banner</th>
                                    <th>Location</th>
                                    <th>Actual Price</th>

                                    <th width="30%">Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($properties as $property)
                                    <tr>
                                        <td>{{ $i++ }}</td>

                                        <td>{{ $property->name }}</td>
                                        <td>
                                            <img src="{{asset('storage/properties/'.$property->banner)}}" width="100px" class="img-thumbnail" >
                                        </td>

                                        <td>{{ $property->location }}</td>
                                        <td>{{ $property->actual_price }}</td>


                                        <td>
                                            <form action="{{ route('properties.destroy',$property->id) }}" method="POST">
                                                <a class="btn btn-sm btn-info " href="{{ route('properties.show',$property->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('properties.edit',$property->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>

                            </table>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    @include('includes.portal.data')
@endsection
