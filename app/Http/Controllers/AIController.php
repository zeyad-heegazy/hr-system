<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class AIController extends Controller
{
    public function indexSalaryPrediction(Request $request)
    {
        $employeesByJob = [
            'Software Engineer' => [
                ['id' => 'E1',  'name' => 'Dylan Hunter'],
                ['id' => 'E2',  'name' => 'Sarah Blake'],
                ['id' => 'E3',  'name' => 'John Doe'],
                ['id' => 'E4',  'name' => 'Emily Carter'],
            ],
            'Data Analyst' => [
                ['id' => 'E5',  'name' => 'Michael Brown'],
                ['id' => 'E6',  'name' => 'Sophia Lee'],
                ['id' => 'E7',  'name' => 'Liam Wilson'],
                ['id' => 'E8',  'name' => 'Olivia Davis'],
            ],
            'HR Specialist' => [
                ['id' => 'E9',  'name' => 'James Smith'],
                ['id' => 'E10', 'name' => 'Ava Martinez'],
                ['id' => 'E11', 'name' => 'Noah Johnson'],
                ['id' => 'E12', 'name' => 'Isabella Taylor'],
            ],
            'Project Manager' => [
                ['id' => 'E13', 'name' => 'Mason Moore'],
                ['id' => 'E14', 'name' => 'Mia Thomas'],
                ['id' => 'E15', 'name' => 'Elijah Anderson'],
                ['id' => 'E16', 'name' => 'Charlotte White'],
            ],
            'Finance Officer' => [
                ['id' => 'E17', 'name' => 'Logan Martin'],
                ['id' => 'E18', 'name' => 'Amelia Garcia'],
                ['id' => 'E19', 'name' => 'Benjamin Clark'],
                ['id' => 'E20', 'name' => 'Harper Lewis'],
            ],
        ];

        $prediction = null;

        if ($request->employee_id) {
            $response = Http::post('https://task000.onrender.com/predict', [
                'employee_id' => $request->employee_id,
            ]);

            if ($response->successful()) {
                $prediction = $response->json();
            }
        }

        return view('AI.salaryPrediction', compact('employeesByJob', 'prediction'))
            ->with('selectedJob', $request->job)
            ->with('selectedEmployeeId', $request->employee_id);
    }
    public function indexAssignTasks(Request $request)
    {
        $skills = [
            "Communication",
            "Data Analysis",
            "Financial Modeling",
            "Leadership",
            "Marketing Strategy",
            "Project Management",
            "Python",
            "SQL"
        ];

        $tasks = DB::table('ai_tasks')->select('id', 'name', 'complexity', 'skill_indices')->get();

        return view('AI.assignTasks', compact('skills', 'tasks'));
    }

    public function assignTaskAjax(Request $request)
    {
        $validated = $request->validate([
            'complexity' => 'required|string',
            'skill_indices' => 'required|array',
            'skill_indices.*' => 'integer',
        ]);

        $complexity = ucfirst($validated['complexity']);
        $skillIndices = array_map('intval', $validated['skill_indices']);

        Log::info('Assigning Task Request:', [
            'complexity' => $complexity,
            'skill_indices' => $skillIndices,
        ]);

        $response = Http::post('https://task001.onrender.com/assign-task', [
            'complexity' => $complexity,
            'skill_indices' => $skillIndices,
        ]);

        Log::info('AI Response:', [
            'status' => $response->status(),
            'body' => $response->json(),
        ]);

        return response()->json($response->json(), $response->status());
    }
}
