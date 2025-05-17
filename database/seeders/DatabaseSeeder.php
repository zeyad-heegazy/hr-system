<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('roles')->insert([
            ['name' => 'admin', 'label' => 'Administrator'],
            ['name' => 'hr', 'label' => 'HR Manager'],
            ['name' => 'employee', 'label' => 'Employee'],
        ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'role_id' => 1
        ]);

        DB::table('departments')->insert([
            ['name' => 'Web Development'],
            ['name' => 'App Development'],
            ['name' => 'marketing'],
            ['name' => 'Support'],
        ]);
    }
}
