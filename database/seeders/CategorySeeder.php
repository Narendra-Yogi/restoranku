<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['cat_name' => 'makanan', 'description' => 'Kategori makanan'],
            ['cat_name' => 'minuman', 'description' => 'Kategori minuman']
        ];

        DB::table('categories')->insert($categories);
    }
}
