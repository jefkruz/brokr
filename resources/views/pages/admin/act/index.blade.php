@extends('layouts.admin')



@section('content')


                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('acts.create') }}" class="btn btn-primary btn-sm"  data-placement="left">
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th width="30%">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($acts as $act)
                                        <tr>
                                            <td>{{ $i ++}}</td>

                                            <td>{{ $act->title }}</td>
                                            <td>{{ $act->description }}</td>

                                            <td>
                                                <form action="{{ route('acts.destroy',$act->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('acts.show',$act->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('acts.edit',$act->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>Description</th>
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
