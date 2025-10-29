<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Gedung ' . fake()->randomElement(['A', 'B', 'C', 'FTE', 'TI']),
            'location' => fake()->streetAddress(),
            'floors' => fake()->numberBetween(2, 8),
            'building_code' => strtoupper(fake()->unique()->bothify('G-??##')),
        ];
    }
}
