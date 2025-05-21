<?php

namespace App\Http\Controllers;

use App\Models\BankInfo;
use App\Models\Employee;
use App\Models\PersonalInfo;
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

        $experiences = [];
        if ($request->filled('experience_name')) {
            foreach ($request->experience_name as $index => $name) {
                $experiences[] = [
                    'name' => $name,
                    'from' => $request->experience_from[$index] ?? null,
                    'to' => $request->experience_to[$index] ?? null,
                ];
            }
        }

        $employee = Employee::create([
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
            'experience' => json_encode($experiences),
        ]);

        $personalInfo = PersonalInfo::create([
            'employee_id' => $employee->id,
            'passport_number' => $request['passport_number'],
            'date_of_birth' => $request['date_of_birth'],
            'marital_status' => $request['marital_status'],
            'religion' => $request['religion'],
            'nationality' => $request['nationality'],
            'emergency_contact' => $request['emergency_contact'],
        ]);

        $bankInfo = BankInfo::create([
            'employee_id' => $employee->id,
            'bank_name' => $request['bank_name'],
            'account_number' => $request['account_number'],
            'ifsc_code' => $request['ifsc_code'],
            'pan_number' => $request['pan_number'],
            'upi_id' => $request['upi_id'],
        ]);

        $employee->update([
            'personal_info_id' => $personalInfo->id,
            'bank_info_id' => $bankInfo->id,
        ]);

        return redirect()->back()->with('success', 'Employee created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin.our-employee.employee-view', compact('employee'));
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
