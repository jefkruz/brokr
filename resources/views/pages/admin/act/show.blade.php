@extends('layouts.admin')



@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Act</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('acts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $act->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $act->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
