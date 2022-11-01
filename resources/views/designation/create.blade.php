@extends('master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <br>
        <div class="row">
            <div class="col-md-12">
                <form name="form" method="post" action="{{ route('designation.store') }}">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Designation Name</label>
                                <input type="text" id="inputName" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription"> Description</label>
                                <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Create new Designation</button>
                        </div>
                    </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
@endsection
