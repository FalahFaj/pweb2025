<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudyProgram;
use App\Models\Department;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departmentIds = Department::pluck('id');

        if ($departmentIds->isEmpty()) {
            echo "Tidak ada data Department. Jalankan DepartmentSeeder terlebih dahulu.\n";
            return;
        }

        StudyProgram::factory()->count(3)->create([
            'department_id' => $departmentIds->random()
        ]);
    }
}
