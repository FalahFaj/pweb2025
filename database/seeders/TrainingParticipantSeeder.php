<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Training;
use App\Models\TrainingParticipant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentIds = Student::pluck('id');
        $trainingIds = Training::pluck('id');

        if ($studentIds->isEmpty() || $trainingIds->isEmpty()) {
            echo "Data Student atau Training kosong. Pastikan Seeder lain sudah berjalan.\n";
            return;
        }

        $participants = [];

        foreach ($studentIds as $studentId) {
            // Setiap student akan ikut 1 s/d 3 pelatihan acak
            $randomTrainings = $trainingIds->random(rand(1, 3))->all();

            foreach ($randomTrainings as $trainingId) {
                // Gunakan factory untuk data palsu lainnya
                $participantData = TrainingParticipant::factory()->make([
                    'student_id' => $studentId,
                    'training_id' => $trainingId,
                ])->toArray();

                $participants[] = $participantData;
            }
        }
        TrainingParticipant::upsert($participants, uniqueBy: ['student_id', 'training_id']);
    }
}
