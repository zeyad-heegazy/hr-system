<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return  view('admin.our-employee.department', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Department::create([
            'name' => $validated['name'],
        ]);
        return redirect()->back()->with('success', 'Department created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:departments,id',
            'name' => 'required|string|max:255',
        ]);

        $department = Department::findOrFail($request->id);
        $department->name = $request->name;
        $department->save();

        return redirect()->back()->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect()->back()->with('success', 'Department deleted successfully.');    }
}
