<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudyProgram>
 */
class StudyProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'department_id' => Department::inRandomOrder()->first()->id,
            'name' => 'Prodi ' . fake()->words(2, true),
            'degree_level' => fake()->randomElement(['D3', 'D4', 'S1']),
            'accreditation' => fake()->randomElement(['A', 'B', 'C', 'Unggul']),
        ];
    }
}
