@extends('master')

@section('content')
    {{-- <h1 class="mb-3">Laravel 8 User Roles and Permissions Step by Step Tutorial - codeanddeploy.com</h1> --}}

    <div class="bg-light p-4 rounded">
        <h1>Employees</h1>
        <div class="lead">
            Manage your Employees here.
            <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm float-right">Add new Employees</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="15%">First Name</th>
                    <th scope="col" width="15%">Middle Name</th>
                    <th scope="col" width="15%">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="10%">Action</th>
                    <th scope="col" width="1%" colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $employee->id }}</th>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->middle_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->email }}</td>
                      

                </td>
                <td>
                    <a href="{{ route('employees.employee_profile', $employee->id) }}" class="badge bg-success">More Info</a>
                    <a href="{{ route('employees.show', $employee->id) }}" class="badge bg-warning btn-sm">Show</a>
                <a href="{{ route('employees.edit', $employee->id) }}" class="badge bg-info btn-sm">Edit</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['employees.destroy', $employee->id], 'style' => 'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $employees->links() !!}
        </div>

    </div>
@endsection
