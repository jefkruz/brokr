@extends('layouts.portal')



@section('content')

        <div class="row">

            <div class="col-xl-6 col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Transaction</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('receipts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <p>{{ $receipt->description }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Client Name:</strong>
                                <span class="mb-0"> {{ucwords($receipt->client_name)  }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Client Phone:</strong>
                                <span class="mb-0"> {{ $receipt->client_phone }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Client Email:</strong>
                                <span class="mb-0"> {{ $receipt->client_email }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Estate Name:</strong>
                                <span class="mb-0"> {{ucwords($receipt->estate_name)  }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Payment Type:</strong>
                                <span class="mb-0"> {{ $receipt->payment_type }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Number of Properties:</strong>
                                <span class="mb-0"> {{ $receipt->number }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Payment Plan:</strong>
                                <span class="mb-0"> {{ $receipt->payment_plan }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Bank:</strong>
                                <span class="mb-0"> {{ $receipt->bank }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Account Name:</strong>
                                <span class="mb-0"> {{ $receipt->account_name }}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Amount:</strong>
                                <span class="mb-0"> {{ $receipt->amount }}</span>
                            </li>

                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Status:</strong>
                                @if($receipt->status=='PENDING')
                                    <span class="badge badge-warning">{{ $receipt->status }}</span>
                                @endif
                                @if($receipt->status=='APPROVED')
                                    <span class="badge badge-success">{{ $receipt->status }}</span>
                                @endif
                            </li>

                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>File:</strong>
                                <a class="btn btn-rounded btn-warning" href="{{route('download', [$receipt->id])}}"><span class="btn-icon-start text-warning"><i class="fa fa-download color-warning"></i></span>Download</a>

                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>

@endsection
