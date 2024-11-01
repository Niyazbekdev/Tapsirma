<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'clothes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'shoes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Category::insert($categories);
    }
}
