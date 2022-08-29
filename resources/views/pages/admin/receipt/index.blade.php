@extends('layouts.admin')



@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-12 col-sm-12">

            <div class="col-xl-12 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
									<i class="fas fa-file-alt"></i>
									</span>
                            <div class="media-body">
                                <p class="mb-1">Total</p>
                                <h4 class="mb-0">{{$receipts->count()}}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
									<span class="me-3 bgl-success text-success">
                                      <i class="fas fa-file-alt"></i>
                                    </span>
                            <div class="media-body">
                                <p class="mb-1">Confirmed</p>
                                <h4 class="mb-0">{{$confirmed->count()}}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
									<span class="me-3 bgl-warning text-warning">
                                        <i class="fas fa-file-alt"></i>
									</span>
                            <div class="media-body">
                                <p class="mb-1">Pending</p>
                                <h4 class="mb-0">{{$pending->count()}}</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body  p-4">
                        <div class="media ai-icon">
									<span class="me-3 bgl-danger text-danger">
                                       <i class="fas fa-file-alt"></i>
                                    </span>
                            <div class="media-body">
                                <p class="mb-1">Canceled</p>
                                <h4 class="mb-0">0</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-9 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link show active">All</a>
                                </li>
                                <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">Pending</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Confirmed</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="my-posts" class="tab-pane fade active show">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">All Transactions</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example3" class="display min-w850">
                                                        <thead>
                                                        <tr>
                                                            <th>Trans ID</th>
                                                            <th>Client Name</th>
                                                            <th>Estate Name</th>
                                                            <th>Status</th>

                                                            <th>Actions</th>



                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($receipts as $receipt)
                                                            <tr>
                                                                <td style="color: red;"><b>TRNS0{{ $receipt->id }}{{ $i++ }}</b></td>
                                                                <td>{{ ucwords($receipt->client_name) }}</td>
                                                                <td>{{ ucwords($receipt->estate_name) }}</td>
                                                                <td>
                                                                    @if($receipt->status=='PENDING')
                                                                        <a class="badge badge-success " href="{{ route('confirm',$receipt->id) }}"><i class="fa fa-fw fa-check"></i>Confirm</a>

                                                                    @endif
                                                                    @if($receipt->status=='APPROVED')
                                                                        <span class="badge badge-success">{{ $receipt->status }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>



                                                                    <div class="d-flex">
                                                                        <form action="{{ route('receipts.destroy',$receipt->id) }}" method="POST" onsubmit="return confirm('Are You sure you want to delete')">
                                                                            <a href="{{route('download', [$receipt->id])}}" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-download"></i></a>
                                                                            <a href="{{ route('receipts.show',$receipt->id) }}" class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>


                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-fw fa-trash"></i></button>
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
                                <div id="about-me" class="tab-pane fade">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Pending Transactions</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example3" class="display min-w850">
                                                        <thead>
                                                        <tr>
                                                            <th>Trans ID</th>
                                                            <th>Client Name</th>
                                                            <th>Estate Name</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>



                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($pending as $receipt)
                                                            <tr>
                                                                <td style="color: red;"><b>TRNS0{{ $receipt->id }}{{ $i++ }}</b></td>
                                                                <td>{{ ucwords($receipt->client_name) }}</td>
                                                                <td>{{ ucwords($receipt->estate_name) }}</td>
                                                                <td>
                                                                    @if($receipt->status=='PENDING')
                                                                        <a class="badge badge-success " href="{{ route('confirm',$receipt->id) }}"><i class="fa fa-fw fa-check"></i>Confirm</a>
                                                                    @endif
                                                                    @if($receipt->status=='APPROVED')
                                                                        <span class="badge badge-success">{{ $receipt->status }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>



                                                                    <div class="d-flex">
                                                                        <form action="{{ route('receipts.destroy',$receipt->id) }}" method="POST" onsubmit="return confirm('Are You sure you want to delete')">
                                                                            <a href="{{route('download', [$receipt->id])}}" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-download"></i></a>
                                                                            <a href="{{ route('receipts.show',$receipt->id) }}" class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                                                            <a href="{{ route('receipts.edit',$receipt->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-fw fa-trash"></i></button>
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
                                <div id="profile-settings" class="tab-pane fade">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Completed Transactions</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example3" class="display min-w850">
                                                        <thead>
                                                        <tr>
                                                            <th>Trans ID</th>
                                                            <th>Client Name</th>
                                                            <th>Estate Name</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>



                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($confirmed as $receipt)
                                                            <tr>
                                                                <td style="color: red;"><b>TRNS0{{ $receipt->id }}{{ $i++ }}</b></td>
                                                                <td>{{ ucwords($receipt->client_name) }}</td>
                                                                <td>{{ ucwords($receipt->estate_name) }}</td>
                                                                <td>
                                                                    @if($receipt->status=='PENDING')
                                                                        <span class="badge badge-warning ">{{ $receipt->status }}</span>
                                                                    @endif
                                                                    @if($receipt->status=='APPROVED')
                                                                        <span class="badge badge-success">{{ $receipt->status }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>



                                                                    <div class="d-flex">
                                                                        <form action="{{ route('receipts.destroy',$receipt->id) }}" method="POST" onsubmit="return confirm('Are You sure you want to delete')">
                                                                            <a href="{{route('download', [$receipt->id])}}" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-download"></i></a>
                                                                            <a href="{{ route('receipts.show',$receipt->id) }}" class="btn btn-info shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-fw fa-trash"></i></button>
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
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="replyModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Post Reply</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <textarea class="form-control" rows="4">Message</textarea>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
                                        <button type="button" class="btn btn-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes.portal.data')
@endsection
