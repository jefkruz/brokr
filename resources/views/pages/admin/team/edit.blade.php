@extends('layouts.admin')

@section('template_title')
    Update Team
@endsection

@section('content')

        <div class="">
            <div class="col-md-10">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Team</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('teams.update', $team->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pages.admin.team.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
