@extends('layouts.admin')



@section('content')

            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('teams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
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
                                    <th>Rank</th>
                                    <th>Image</th>
                                    <th width="30%">Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($teams as $team)
                                    <tr>
                                        <td>{{ $i ++}}</td>

                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->rank }}</td>


                                        <td>
                                            <img src="{{asset('storage/team/'.$team->image )}}" width="100px" class="img-thumbnail" ></td>
                                        <td>
                                            <form action="{{ route('teams.destroy',$team->id) }}" method="POST">
                                                <a class="btn btn-sm btn-info " href="{{ route('teams.show',$team->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('teams.edit',$team->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
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


    @include('includes.portal.data')
@endsection
