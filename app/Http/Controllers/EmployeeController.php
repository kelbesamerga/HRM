<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Address;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Document;
use App\Models\Education;
use App\Models\Employee;
use App\Models\Experiance;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(10);

        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Employee $employee)
    {
        // $this->authorize('users.create');
        $roles = Role::latest()->get();
        $designations = Designation::latest()->get();
        $departments = Department::latest()->get();
        return view('employee.create', compact('designations','departments','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Employee $employee, Request $request)
    {
     
        $employee->create(array_merge($request->all()));
        return redirect()->route('employees.index')
            ->withSuccess(__('Employee created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * my profile user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function employee_profile(Employee $employee) 
    {
        // dd($employee);
        $addresses=Address::where('user_id', $employee->id)->get();
        $educations=Education::where('user_id', $employee->id)->get();
        $experiances=Experiance::where('user_id', $employee->id)->get();
        $documents=Document::where('user_id', $employee->id)->get();
        // dd($experiances);
        // $documents=response()->file($document);

        return view('employee.employee_profile',compact('addresses','educations','experiances','documents','employee'));
    }
}
