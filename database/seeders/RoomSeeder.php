<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\Building;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $buildings = Building::all();

        if ($buildings->isEmpty()) {
            echo "Tidak ada gedung. Jalankan BuildingSeeder terlebih dahulu.\n";
            return;
        }

        $buildings->each(function ($building) {
            Room::factory()->count(5)->create([
                'building_id' => $building->id
            ]);
        });
    }
}
