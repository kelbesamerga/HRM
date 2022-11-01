@extends('master')

@section('content')
    <div class="bg-light p-4 rounded">
        <div class="fa fa-user-o">
            <h1>Add new Employee</h1>

        </div>

        <div class="card-body">
            <form name="form" method="post" action="{{ route('employees.store') }}">
                @csrf
                <div class="row">


                    <div class="form-group col-md-3 m-t-20">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control form-control-line"
                            placeholder="Employee's FirstName" minlength="2" required>
                    </div>
                    <div class="form-group col-md-3 m-t-20">
                        <label>Middle Name </label>
                        <input type="text" id="" name="middle_name" class="form-control form-control-line"
                            value="" placeholder="Employee's MiddleName" minlength="2" required>
                    </div>
                    <div class="form-group col-md-3 m-t-20">
                        <label>Last Name </label>
                        <input type="text" id="" name="last_name" class="form-control form-control-line"
                            value="" placeholder="Employee's LastName" minlength="2" required>
                    </div>

                    <div class="form-group col-md-3 m-t-20">
                        <label>Role </label>
                        <select name="role" class="form-control custom-select" required>
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">                                    
                                    {{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3 m-t-20">
                        <label>Gender </label>
                        <select name="gender" class="form-control custom-select" required>
                            <option>Select Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 m-t-20">
                        <label>Blood Group </label>
                        <select name="blood_group" class="form-control custom-select">
                            <option>Select Blood Group</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3 m-t-20">
                        <label>Phone Number </label>
                        <input type="text" name="phone" class="form-control" value="" placeholder="1234567890"
                            minlength="10" maxlength="15" required>
                    </div>
                    <div class="form-group col-md-3 m-t-20">
                        <label>Date Of Birth </label>
                        <input type="date" name="date_of_birth" id="example-email2" name="example-email" class="form-control"
                            placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3 m-t-20">
                        <label>Designation </label>
                        <select name="designation" class="form-control custom-select" required>
                            <option value="">Select role</option>
                            @foreach ($designations as $designation)
                                <option value="{{ $designation->id }}">

                                    {{ $designation->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3 m-t-20">
                        <label>Department </label>
                        <select name="department" class="form-control custom-select" required>
                            <option value="">Select role</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">
                                    {{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3 m-t-20">
                        <label>Email </label>
                        <input type="email" id="example-email2" name="email" class="form-control"
                            placeholder="email@mail.com" minlength="7" required>
                    </div>
                    <div class="form-group col-md-3 m-t-20">
                        <label>Image </label>
                        <input type="file" name="image" class="form-control" value="">
                    </div>
                </div>
                <div class="form-actions col-md-12">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>

            </form>
        </div>

    </div>
@endsection
