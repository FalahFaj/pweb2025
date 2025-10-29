<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomType = fake()->randomElement(['Ruang Kelas', 'Laboratorium', 'Auditorium', 'Kantor']);
        return [
            'room_code' => $roomType[0] . '-' . fake()->unique()->numberBetween(101, 599),
            'capacity' => fake()->numberBetween(20, 150),
            'room_type' => $roomType,
        ];
    }
}
