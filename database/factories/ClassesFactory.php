<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    protected $model = \App\Models\Classes::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::factory(),
            'class_name' => fake()->randomElement(['A', 'B', 'C', 'Pagi', 'Malam']),
            'semester' => fake()->randomElement(['Ganjil', 'Genap']),
            'academic_year' => fake()->randomElement(['2023/2024', '2024/2025', '2025/2026']),
        ];
    }
}
