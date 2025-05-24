<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holidays = Holiday::all();
        return view('admin.our-employee.holidays', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Holiday::create([
            'name' => $request->name,
            'date' => $request->date,
        ]);
        return redirect()->back()->with('success', 'Holiday created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Holiday $holiday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Holiday $holiday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $holiday = Holiday::findOrFail($id);
        $holiday->update([
            'name' => $request->name,
            'date' => $request->date
        ]);
        return redirect()->back()->with('success', 'Holiday updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $holiday = Holiday::findOrFail($id);
        $holiday->delete();
        return redirect()->back()->with('success', 'Holiday deleted successfully.');
    }
}
