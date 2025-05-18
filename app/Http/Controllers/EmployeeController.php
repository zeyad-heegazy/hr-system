<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
       return view('admin.our-employee.employee', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::where('name', 'employee')->firstOrFail();
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role_id' => $role->id,
        ]);
        $imagePath = $request->file('image')->store('images/employees', 'public');

        Employee::create([
            'name' => $request['name'],
            'image' => $imagePath,
            'employeeId' => $request['employeeId'],
            'user_name' => $request['user_name'],
            'phone' => $request['phone'],
            'department_id' => $request['department_id'],
            'designation' => $request['designation'],
            'description' => $request['description'],
            'user_id' => $user->id,
            'joining_date'=> $request['joining_date'],
        ]);

        return redirect()->back()->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
