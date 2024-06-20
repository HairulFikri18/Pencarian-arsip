<?php

namespace Database\Seeders;

use App\Models\Kategori_Arsip;
use Illuminate\Database\Seeder;

class KatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define categories to seed
        $categories = [
            ['nama' => 'Biasa', 'status' => '-'],
            ['nama' => 'Terbatas', 'status' => '-'],
            ['nama' => 'Rahasia', 'status' => '-'],
            ['nama' => 'Sangat Rahasia', 'status' => '-'],
        ];

        // Insert each category into database
        foreach ($categories as $categoryData) {
            Kategori_Arsip::create($categoryData);
        }
    }
}
