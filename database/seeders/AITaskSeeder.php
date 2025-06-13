<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AITaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['Prepare Financial Report', 'High', [2, 1]],
            ['Develop Marketing Plan', 'Medium', [4, 0]],
            ['Project Risk Assessment', 'Medium', [5, 3]],
            ['Data Cleaning Script', 'Low', [6, 1]],
            ['Stakeholder Communication', 'Low', [0, 3]],
            ['SQL Reporting Dashboard', 'High', [7, 1]],
            ['Python Model for Prediction', 'High', [6, 1, 2]],
            ['Internal Newsletter', 'Low', [0]],
            ['Campaign ROI Analysis', 'Medium', [4, 2]],
            ['Executive Presentation', 'Medium', [3, 0]],
            ['Data Migration Audit', 'High', [1, 7]],
            ['Social Media Report', 'Low', [0, 4]],
            ['Budget Forecasting', 'High', [2, 5]],
            ['Meeting Minutes Summary', 'Low', [0]],
            ['Machine Learning Pipeline', 'High', [6, 1, 7]],
            ['Departmental KPI Dashboard', 'Medium', [1, 5, 7]],
            ['Leadership Retreat Plan', 'Medium', [3, 5]],
            ['Sales Funnel Report', 'Medium', [1, 4]],
            ['Python Automation Script', 'Low', [6]],
            ['Market Segmentation Study', 'Medium', [4, 1]],
            ['Client Communication Strategy', 'Medium', [0, 4]],
            ['SQL Query Optimization', 'High', [7]],
            ['Financial Health Check', 'High', [2, 1, 5]],
            ['Employee Onboarding Guide', 'Low', [0, 3]],
            ['Weekly Project Summary', 'Medium', [0, 5]],
            ['Risk & Compliance Tracker', 'High', [2, 5, 3]],
        ];

        foreach ($tasks as [$name, $complexity, $skillIndices]) {
            DB::table('ai_tasks')->insert([
                'name' => $name,
                'complexity' => $complexity,
                'skill_indices' => json_encode($skillIndices),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
