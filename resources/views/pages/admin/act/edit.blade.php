@extends('layouts.admin')



@section('content')

        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Act</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('acts.update', $act->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pages.admin.act.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
