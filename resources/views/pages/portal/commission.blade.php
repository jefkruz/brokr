@extends('layouts.portal')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">My Commissions</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display min-w850">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Amount</th>
                                <th>Commission</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($commissions as $commission)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>₦{{ $commission->amount }}</td>
                                    <td>₦{{ $commission->commission }}</td>
                                    <td>{{$commission->created_at->toFormattedDateString()}}</td>
                                    <td>
                                        @if($commission->status=='PENDING')
                                            <span class="badge badge-warning">{{ $commission->status }}</span>
                                        @endif
                                        @if($commission->status=='PAID')
                                            <span class="badge badge-success">{{ $commission->status }}</span>
                                        @endif
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
