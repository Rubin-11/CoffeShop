<?php

namespace Database\Seeders;

use App\Models\ProductHealthyFoodCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductHealthyFoodCategorySeeder extends Seeder
{
    public function run(): void
    {
        ProductHealthyFoodCategory::factory()->createMany([
            [
                'product_id' => 64,
                'healthy_food_category_id' => 1,
            ],
            [
                'product_id' => 65,
                'healthy_food_category_id' => 1,
            ],
            [
                'product_id' => 66,
                'healthy_food_category_id' => 1,
            ],
            [
                'product_id' => 67,
                'healthy_food_category_id' => 1,
            ],
            [
                'product_id' => 68,
                'healthy_food_category_id' => 1,
            ],
            [
                'product_id' => 69,
                'healthy_food_category_id' => 2,
            ],
            [
                'product_id' => 70,
                'healthy_food_category_id' => 2,
            ],
            [
                'product_id' => 71,
                'healthy_food_category_id' => 2,
            ],
            [
                'product_id' => 72,
                'healthy_food_category_id' => 2,
            ],
            [
                'product_id' => 73,
                'healthy_food_category_id' => 2,
            ]
        ]);
    }
}
