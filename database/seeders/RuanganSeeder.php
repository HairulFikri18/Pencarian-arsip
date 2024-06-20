<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            ['ruang' => 'UK2', 'desc' => 'Unit Kearsipan 2'],
        ];
        foreach ($rooms as $roomData) {
            Ruangan::create($roomData);
        }
    }
}
