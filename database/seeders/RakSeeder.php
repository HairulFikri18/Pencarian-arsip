<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rak = [
            ['rak' => '1', 'desc' => 'ini Rak 1'],
            ['rak' => '2', 'desc' => 'ini Rak 2'],
            ['rak' => '3', 'desc' => 'ini Rak 3'],
            ['rak' => '4', 'desc' => 'ini Rak 4'],

        ];

        foreach ($rak as $raks) {
            Rak::create($raks);
        }
    }
}
