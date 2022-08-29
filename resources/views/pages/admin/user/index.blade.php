

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
                                <th width="5%">S/N</th>
                                <th width="15%">Photo</th>
                                <th width="15%">Name</th>
                                <th width="20%">Email</th>
                                <th width="15%">Phone Number</th>

                                <th width="15%">Reg. Date</th>
                                <th width="10%">Referrals</th>
                                <th width="30%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @php $id=$user->id;
$referrals = \App\Models\User::where('referal_id',$id)->get();
                                @endphp
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img class="rounded-circle" width="35" src="{{asset( 'storage/users/'.$user->avatar)}}" alt=""></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>

                                    <td>{{  date('j \\ F Y', strtotime($user->created_at)) }}</td>
                                    <td>
                                        @if($referrals->count()>0)
                                            <span  class="badge light badge-danger ">


                                                    {{ $referrals->count() }} Referrals
                                                </span>
                                        @else None
                                        @endif
                                    </td>
                                    <td >
                                        <div class="d-flex">
                                        <form action="{{ route('users.destroy',$user->id) }}" method="POST" onsubmit="return confirm('Are You sure you want to delete')">
                                            <a href="{{route('users.show',$user->username)}}" class="btn btn-info shadow btn-xs sharp me-1" ><i class="fa fa-fw fa-eye"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-fw fa-trash"></i> </button>
                                        </form>
                                        </div>
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




    <!-- /.content-wrapper -->


    @include('includes.portal.data')
@endsection

