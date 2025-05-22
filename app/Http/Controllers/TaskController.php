<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inProgressTasks = Task::where('status', 'in-progress')->get();
        $needsReviewTasks = Task::where('status', 'needs-review')->get();
        $completedTasks = Task::where('status', 'completed')->get();

        return view('admin.project.tasks', compact(
            'inProgressTasks',
            'needsReviewTasks',
            'completedTasks'
        ));
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
        $storedFiles = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $storedFiles[] = $file->store('tasks/files', 'public');
            }
        }

        Task::create([
            'project_id' => $request['project_id'],
            'category' => $request['category'],
            'description' => $request['description'] ?? null,
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'employee_id' => $request['employee_id'],
            'priority' => $request['priority'],
            'files' => json_encode($storedFiles),
        ]);

        return redirect()->back()->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
