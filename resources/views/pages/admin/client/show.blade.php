@extends('layouts.admin')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">

                            <strong>Name:</strong>
                            {{ $client->name }}
                        </div>

                        <div class="form-group">

                            <img src="{{asset('storage/team/'.$client->image)}}" width="400px" class="img-thumbnail" >

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
