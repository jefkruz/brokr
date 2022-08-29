@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Realtors</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display min-w850">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Birthday</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img class="rounded-circle" width="35" src="{{asset( 'storage/users/'.$user->avatar)}}" alt=""></td>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->b_date}}, {{$user->b_month}}</td>

                                    <td>   <a href="mailto:{{$user->email}}" class="btn btn-primary btn-sm"><i class="fa fa-envelope-o "></i> Message </a>

                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.portal.data')
@endsection

