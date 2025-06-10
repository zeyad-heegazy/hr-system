<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::with('employee')->get()->groupBy('employee_id');
        return view('admin.our-employee.attendance', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employeeId = auth()->user()->id;
        Attendance::create([
            'employee_id' => $employeeId,
            'date' => now()->format('Y-m-d'),
            'time' => now()->format('H:i'),
        ]);
        return redirect()->back()->with('success', 'Attendance created successfully.');
    }

    public function punchIn(Request $request)
    {
        $exists = Attendance::where('employee_id', $request->employee_id)
            ->whereDate('date', today())
            ->exists();
        if ($exists) {
            return redirect()->back()->with('error', 'Already punched in for today.');
        }
        Attendance::create([
            'employee_id' => $request->employee_id,
            'date' => today(),
            'punch_in' => now()->format('H:i'),
            'status' => 'full-day',
        ]);
        return redirect()->back()->with('success', 'Punched in successfully.');
    }

    public function punchOut(Request $request)
    {
        $attendance = Attendance::where('employee_id', $request->employee_id)
            ->whereDate('date', today())
            ->whereNull('punch_out')
            ->first();
        if (!$attendance) {
            return redirect()->back()->with('error', 'No punch-in record found for today.');
        }
        $punchIn = Carbon::createFromFormat('H:i:s', $attendance->punch_in ?? $attendance->punch_in . ':00');
        $punchOut = now();
        $workedHours = $punchIn->diffInHours($punchOut);
        $status = $workedHours < 8 ? 'half-day' : 'full-day';
        $attendance->update([
            'punch_out' => $punchOut->format('H:i'),
            'status' => $status,
        ]);
        return redirect()->back()->with('success', 'Punched out successfully. Status: ' . $status);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $employeeId)
    {
        $employee = Employee::findOrFail($employeeId);
        return view('admin.our-employee.employee-attendance', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendence)
    {
        //
    }
}
