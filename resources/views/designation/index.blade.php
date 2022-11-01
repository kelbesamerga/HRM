@extends('master')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Designation</h3>

                <div class="card-tools">
                    <a href="{{route('designation.create')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus" ></i> Add Designation</a>
                </div>
               
                <div class="card-tools" style="padding:0 10px; margin:2.5px;">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                   
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped Designation">
                    <thead>
                        <tr>
                            <th >
                                #
                            </th>
                            <th >
                                Department Name
                            </th>
                            <th >
                                Description
                            </th>
                            <th>
                                Created At
                            </th>

                            <th > Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($designations as $designation)
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    {{ $designation->name }}
                                </td>
                                <td>
                                    {{ $designation->description }}
                                </td>
                                <td >
                                    {{ $designation->created_at }}
                                </td>

                                <td >
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="{{ route('designation.destroy', [$designation->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to Delete This Designation?');">
                                            <i class="text-light fas fa-trash"></i> Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="d-flex justify-content-center">
                    {!! $designations->links() !!}
                </div> --}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
@section('additional_javascript')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection