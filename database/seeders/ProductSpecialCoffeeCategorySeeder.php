<?php

namespace Database\Seeders;

use App\Models\ProductSpecialCoffeeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSpecialCoffeeCategorySeeder extends Seeder
{
    public function run(): void
    {
        ProductSpecialCoffeeCategory::factory()->createMany([
            [
                'product_id' => 1,
                'special_coffee_category_id' => 1,
            ],
            [
                'product_id' => 2,
                'special_coffee_category_id' => 2,
            ],
            [
                'product_id' => 3,
                'special_coffee_category_id' => 3,
            ],
            [
                'product_id' => 4,
                'special_coffee_category_id' => 4,
            ],
            [
                'product_id' => 5,
                'special_coffee_category_id' => 5,
            ],
            [
                'product_id' => 6,
                'special_coffee_category_id' => 6,
            ],
            [
                'product_id' => 7,
                'special_coffee_category_id' => 7,
            ],
            [
                'product_id' => 8,
                'special_coffee_category_id' => 1,
            ]
        ]);
    }
}
