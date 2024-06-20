<?php

namespace Database\Seeders;

use App\Models\Lemari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LemariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lemari = [
            ['lemari' => 'A', 'desc' => 'ini ruang A'],
            ['lemari' => 'B', 'desc' => 'ini ruang B'],
            ['lemari' => 'C', 'desc' => 'ini ruang C'],
            ['lemari' => 'D', 'desc' => 'ini ruang D'],
            ['lemari' => 'E', 'desc' => 'ini ruang E'],
            ['lemari' => 'F', 'desc' => 'ini ruang F'],
            ['lemari' => 'G', 'desc' => 'ini ruang G'],
            ['lemari' => 'H', 'desc' => 'ini ruang H'],
            ['lemari' => 'I', 'desc' => 'ini ruang I'],
            ['lemari' => 'J', 'desc' => 'ini ruang J'],
        ];

        foreach ($lemari as $roomData) {
            Lemari::create($roomData);
        }
    }
}
