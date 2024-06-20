<?php

namespace Database\Seeders;

use App\Models\Box;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $box = [
            ['name' => '001', 'desc' => '-'],
            ['name' => '002', 'desc' => '-'],
            ['name' => '003', 'desc' => '-'],
            ['name' => '004', 'desc' => '-'],
        ];

        // Insert each category into database
        foreach ($box as $boxs) {
            Box::create($boxs);
        }
    }
}
