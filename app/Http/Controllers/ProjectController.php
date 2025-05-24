<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.project', compact('projects'));
    }

    public function indexTimesheet()
    {
        // Todo add timesheet to each project
        return view('admin.project.timesheet');
    }

    public function indexLeaders()
    {
        $projects = Project::with(['lead'])->withCount('tasks')->get();
        return view('admin.project.leaders', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storedFiles = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $storedFiles[] = $file->store('projects/files', 'public');
            }
        }


        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconPath = $icon->store('projects/icons', 'public');
        }

        Project::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description ?? null,
            'files' => json_encode($storedFiles),
            'icon' => $request->hasFile('icon') ? $icon->store('projects/icons', 'public'): null,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'lead_employee_id' => $request->lead_employee_id,
            'budget' => $request->budget,
            'status' => $request->input('status', 'Pending'),
            'priority' => $request->priority,
        ]);

        return redirect()->back()->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $project = Project::findOrFail($id);
        $filesArray = json_decode($project->files ?? '[]');
        foreach ($filesArray as $file) {
            if (!empty($file)) {
                Storage::delete($file);
            }
        }
        if($project->icon !== null){
            Storage::delete($project->icon);
        }
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully.');
    }
}
