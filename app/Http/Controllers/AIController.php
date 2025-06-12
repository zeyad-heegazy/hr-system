<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


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

        if ($request->ajax()) {
            $skillIndices = $request->input('skill_indices', []);
            $complexity = ucfirst($request->input('complexity'));

            $response = Http::post('https://task000.onrender.com/assign-task', [
                'complexity' => $complexity,
                'skill_indices' => $skillIndices,
            ]);

            return response()->json($response->json(), $response->status());
        }

        return view('AI.assignTasks', compact('skills'));
    }

    public function assignTaskAjax(Request $request)
    {
        $response = Http::post('https://task000.onrender.com/assign-task', [
            'complexity' => ucfirst($request->complexity),
            'skill_indices' => $request->skill_indices,
        ]);

        return response()->json($response->json(), $response->status());
    }
}
