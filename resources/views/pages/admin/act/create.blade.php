@extends('layouts.admin')



@section('content')
    <!-- Main content -->

            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('acts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('pages.admin.act.form')

                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

    <!-- /.content -->


@endsection
