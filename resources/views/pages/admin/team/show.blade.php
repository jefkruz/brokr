@extends('layouts.admin')


@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Team</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teams.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">

                            <img src="{{asset('storage/team/'.$team->image)}}" width="400px" class="img-thumbnail" >

                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $team->name }}
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <strong>Rank:</strong>
                                {{ $team->rank }}
                            </div>
                            <strong>Description:</strong>
                            {!! html_entity_decode($team->description) !!}

                        </div>





                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
