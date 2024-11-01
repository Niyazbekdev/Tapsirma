<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Winter men\'s sweatshirts, hoodies, for sports and leisure',
                'description' => 'If you are looking for versatile clothing that will keep you warm on cold autumn and winter days, then our fleece hoodies are exactly what you need. We offer stylish, comfortable and warm hoodies that are suitable for everyday wear, active recreation, sports and walks. Our hoodies are a combination of quality, modern design and functionality, which makes them an ideal choice for anyone who values ​​comfort in the cold season.',
                'price' => 255000,
                'quantity' => 3,
                'number_sold' => 0,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Product::insert($products);
    }
}
