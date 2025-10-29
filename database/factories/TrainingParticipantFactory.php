<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingParticipant>
 */
class TrainingParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['Registered', 'Attended', 'Completed']);

        return [
            // student_id dan training_id akan kita isi dari Seeder
            'attendance_status' => $status,
            'certificate' => ($status == 'Completed'), // Hanya dapat sertifikat jika 'Completed'
        ];
    }
}
