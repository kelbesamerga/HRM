@extends('master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('assets/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{$employee->first_name.' '.$employee->middle_name}}</h3>

                            <p class="text-muted text-center">{{$employee->role}}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Gender</b> <a class="float-right">{{$employee->gender}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{$employee->email}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone</b> <a class="float-right">{{' +251 '.$employee->phone}}</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#address"
                                        data-toggle="tab">Address</a></li>
                                <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Education</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#experiance" data-toggle="tab">Experiance</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#account" data-toggle="tab">Bank Account</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#document" data-toggle="tab">Document</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#salary" data-toggle="tab">Salary</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="address">
                                    <form class="form-horizontal" name="form" method="post"
                                        action="{{ route('address.store') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$employee->id}}">
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Country</label>
                                            <div class="col-sm-10">
                                                <select name="country" class="form-control custom-select" required>
                                                    <option>Select Country</option>
                                                    <option value="Ethioipa">Ethioipa</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Region</label>
                                            <div class="col-sm-10">
                                                <select name="region" class="form-control custom-select" required>
                                                    <option>Select Region</option>
                                                    <option value="Oromia">Oromia</option>
                                                    <option value="Tigray">Tigray</option>
                                                    <option value="Sidama">Sidama</option>
                                                    <option value="Amhara">Amhara</option>
                                                    <option value="Harar">Harar</option>
                                                    <option value="Somali">Somali</option>
                                                    <option value="Afar">Afar</option>
                                                    <option value="Benishangul Gumuz">Benishangul Gumuz</option>
                                                    <option value="Gambela">Gambela</option>
                                                    <option value="South Nation Nationality">South Nation Nationality
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">City</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="city" class="form-control" id="inputName"
                                                    placeholder="City">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="education">
                                    <form class="form-horizontal" name="form" method="post"
                                    action="{{ route('education.store') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$employee->id}}">
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Degree Tittle</label>
                                            <div class="col-sm-10">
                                                <select name="degree_type" class="form-control custom-select" required>
                                                    <option>Select Degree Tittle</option>
                                                    <option value="Bachelors">Bachelors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="PHD">PHD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Institution</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="institution" class="form-control"
                                                    id="inputName" placeholder="Institution">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Field Of Study</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="field" class="form-control" id="inputName"
                                                    placeholder="Field Of Study">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Graduation Year</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="year" class="form-control" id="inputName"
                                                    placeholder="Year">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Result</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="result" class="form-control" id="inputName"
                                                    placeholder="Example 3.99 or 4.00" step="any">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="experiance">
                                    <form class="form-horizontal" name="form" method="post"
                                    action="{{ route('experiance.store') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$employee->id}}">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Company Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="company_name" class="form-control"
                                                    id="inputName" placeholder="Company Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Position</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="position" class="form-control"
                                                    id="inputName" placeholder="Position">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="year" name="address" class="form-control" id="inputName"
                                                    placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Start Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="from" class="form-control"
                                                    id="inputName" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">End Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="to" class="form-control"
                                                    id="inputName" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="account">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Bank Holder
                                                Name</label>
                                            <div class="col-sm-10">
                                                <input type="disable" name="company_name" class="form-control"
                                                    id="inputName" placeholder="Bank Holder Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Bank Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="bank" class="form-control" id="inputName"
                                                    placeholder="Bank Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Branch Name</label>
                                            <div class="col-sm-10">
                                                <input type="year" name="branch" class="form-control" id="inputName"
                                                    placeholder="Branch Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Bank Account
                                                Type</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="account_type" class="form-control"
                                                    id="inputName" placeholder="Bank Account Type">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Bank Account
                                                Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="account_number" class="form-control"
                                                    id="inputName" placeholder="Bank Account Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="salary">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Salary Type</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="salary_type" class="form-control"
                                                    id="inputName" placeholder="Salary Type">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Growth Salary</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="growth" class="form-control" id="inputName"
                                                    placeholder="Growth Salary">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Deduction</label>
                                            <div class="col-sm-10">
                                                <select name="title" class="form-control custom-select" required>
                                                    <option>Select Deduction</option>
                                                    <option value="Bachelors">Bachelors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="PHD">PHD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Additional</label>
                                            <div class="col-sm-10">
                                                <select name="title" class="form-control custom-select" required>
                                                    <option>Select Additional</option>
                                                    <option value="Bachelors">Bachelors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="PHD">PHD</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="document">
                                    <form class="form-horizontal"name="form" method="post"
                                    action="{{ route('document.store') }}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Document Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="inputName"
                                                    placeholder="Document Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Desription</label>
                                            <div class="col-sm-10">
                                                <textarea  name="description" class="form-control" id="inputName"
                                                    placeholder="Decription"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="file" class="form-control"
                                                    id="inputName">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- /.tab-content -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                <p class="text-muted">
                                    @foreach ($educations as $education)
                                    <p class="text-muted">{{$education->degree_type.' degree in '. $education->field.' from '.$education->institution.' since '.$education->year.' scored  '.$education->result.' CGPA'}}</p>
                                @endforeach
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
                                @foreach ($addresses as $address)
                                    <p class="text-muted">{{$address->city.', '. $address->region.', '.$address->country}}</p>
                                @endforeach

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Experiance</strong>

                                <p class="text-muted">
                                    @foreach ($experiances as $experiance)
                                    <p class="text-muted">{{$experiance->company_name.' on the position of '. $experiance->position.' started from '.$experiance->from.' to '.$experiance->to}}</p>
                                @endforeach
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Salary</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    fermentum
                                    enim neque.</p>

                                <hr>
                                <strong><i class="far fa-file-alt mr-1"></i> Bank Account</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    fermentum
                                    enim neque.</p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Documents</strong>

                                @foreach ($documents as $document)
                                <div class="column">
                                <p class="text-muted">{{$document->name}}</p>
                                <a href="../folder/file/{{$document->file}}" download="{{$document->file}}">{{$document->file}}</a>
                                {{-- <p class="text-muted">{{$document->file}}</p> --}}
                            </div>
                            @endforeach
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.col -->

                <!-- /.row -->
                <!-- /.container-fluid -->


            </div>
    </section>
    <!-- /.content -->
@endsection
