@extends('master')

@section('title')
    {{ __('main.Pages') }}
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0 text-dark">{{ __('main.Pages') }}</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('main.Home') }}</a> --}}
                            </li>
                            <li class="breadcrumb-item active">{{ __('main.Pages') }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('department.create') }}"
                            class="btn btn-success btn-sm">{{ __('main.Add New') }}</a>
                        <a href="{{ route('department.index') }}" class="btn btn-warning btn-sm float-right"><i
                                class="fas fa-trash-alt"></i>{{ __('main.Recycle') }}</a>
                    </div>
                    <div class="card-body">
                        <table id="table1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    {{-- <th>{{ __('main.Image') }}</th> --}}
                                    <th>{{ __('main.Title') }}</th>
                                    <th>{{ __('main.Permalink') }}</th>
                                    <th>{{ __('main.Hit') }}</th>
                                    <th>{{ __('main.Creation Date') }}</th>
                                    <th>{{ __('main.Statu') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $page)
                                    <tr>
                                        {{-- <td><img src="{{ $page->getMedia->id == 1 ? '' : $page->getMedia->getUrl('thumb') }}"
                                                alt="" style="height: 24px"></td> --}}
                                        <td>{{ $page->name }}</td>
                                        <td>{{ $page->description }}</td>
                                        <td>{{ $page->name }}</td>
                                        <td>{{ $page->created_at->diffForHumans() }}</td>
                                        <td><input class="switch" type="checkbox" name="my-checkbox"
                                                data-id="{{ $page->id }}" @if ($page->status == 1) checked @endif data-toggle="toggle"
                                                data-size="mini" data-on="{{ __('main.Published') }}"
                                                data-off="{{ __('main.Draft') }}" data-onstyle="success"
                                                data-offstyle="danger"></td>
                                        <td>
                                            <a href="{{ url('/', $page?->getSlug?->slug) }}"
                                                title="{{ __('main.Show') }}" class="btn btn-success btn-xs"><i
                                                    class="fas fa-arrow-right"></i></a>
                                            <a href="{{ route('department.edit', $page->id) }}"
                                                title="{{ __('main.Edit') }}" class="btn btn-primary btn-xs"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ route('department.destroy', $page->id) }}"
                                                onclick="validate({{ $page->id }})" title="{{ __('main.Delete') }}"
                                                class="btn btn-danger btn-xs"><i class="far fa-times-circle"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div> <!-- /.content -->
    </div>
@endsection

@section('script')
    <script>
        $('.switch').change(function() {
            id = $(this).attr('data-id');
            status = $(this).prop('checked');
            $.get("{{ route('department.index') }}", {
                id: id,
                status: status
            })
        })
    </script>
@endsection
