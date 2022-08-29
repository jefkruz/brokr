@extends('layouts.admin')


@section('content')
    <!-- Main content -->

    <div class="row">
        <div class="col-xl-4 col-lg-12 col-sm-12">
            <div class="card overflow-hidden">
                <div class="text-center p-3 overlay-box " style="background-image: url(storage/img1.jpg);">
                    <div class="profile-photo">
                        <img src="{{asset('storage/users/'.$user->avatar?? 'storage/users/default.png')}}" width="100" class="img-fluid rounded-circle" alt="">
                    </div>
                    <h3 class="mt-3 mb-1 text-white">{{ucwords($user->name)}}</h3>
                    <p class="text-white mb-0">Realtor</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">My Team</span>
                        @if($downlines->count()>0)
                            <span class="badge badge-rounded badge-primary "><strong >{{ $downlines->count() }}	</strong></span>
                        @else
                            None
                        @endif
                    </li>
                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Email:</span> <strong ><a class="text-danger" href="mailto:{{$user->email}}">{{$user->email}}</a>	</strong></li>
                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Phone Number:</span> 	<strong ><a  class="text-danger" href="tel:{{$user->phone}}">{{$user->phone}}</a> 	</strong></li>
                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Username:</span> <span class="badge badge-rounded badge-danger "><strong >{{$user->username}}	</strong></span></li>
                    @if(!empty($user->b_date))
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">DOB:</span> 		<strong class="text-danger" >{{$user->b_date}}, {{$user->b_month}}</strong></li>
                    @endif
                    @if(!empty($user->address))
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Address: </span> 		<strong class="text-danger" >{{$user->city}}, {{$user->state}}</strong></li>
                    @endif
                    @if(!empty($user->country))
                        <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Country:</span> 		<strong class="text-danger" >{{$user->country}}</strong></li>
                    @endif
                    <li class="list-group-item "> <strong >BANK DETAILS	</strong></li>
                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Bank Name:</span> <strong >{{$user->bank}}	</strong></li>
                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Account Name:</span> <strong >{{$user->acc_name}}	</strong></li>
                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Account Number:</span> <strong >{{$user->acc_no}}	</strong></li>

                </ul>

                <div class="card-footer border-0 mt-0">
                    <p hidden id="toCopy">{{url('register'.'/'.$user->username)}}</p>
                    <button class="btn btn-primary btn-lg btn-block" onclick="copyToClipboard('Thanks','Link has been copied','success','#toCopy')">
                        <i class="fas fa-copy"></i> Copy Unique Link
                    </button>
                </div>
            </div>

        </div>
        <div class="col-xl-8 col-lg-12 col-sm-12">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ucwords($user->name)}} Downlines</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th width="15%">Photo</th>
                                    <th>Name</th>
                                    <th width="20%">Email</th>
                                    <th width="20%">Phone Number</th>

                                    <th>Referrals</th>



                                </tr>
                                </thead>
                                <tbody>
                                @foreach($downlines as $user)
                                    @php $next = \App\Models\User::where('referal_id',$user->id) @endphp
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td><img class="rounded-circle" width="35" src="{{asset( 'storage/users/'.$user->avatar)??'storage/users/default.png'}}" alt=""></td>

                                        <td>{{ucwords($user->name)}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>


                                        <td >
                                            <a class="btn btn-sm btn-rounded btn-info " href="{{route('users.show',$user->username) }}"><i class="fas fa-eye"></i> View</a>

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
    </div>

    <script>
        function copyToClipboard(h1,h5,animicon,element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            /*sweet allert*/
            Swal.fire(
                h1,
                h5,
                animicon
            )
        }
    </script>

    <!-- /.content -->
    <!-- /.content-wrapper -->

@endsection

@section('datascripts')
    <!-- Datatable -->
    <script src="{{asset('portal/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('portal/js/plugins-init/datatables.init.js')}}"></script>
@endsection

@section('datastyles')
    <!-- Datatable -->
    <link href="{{asset('portal/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection
