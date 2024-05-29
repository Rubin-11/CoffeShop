<?php

namespace Database\Seeders;

use App\Models\ProductVendingCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVendingCategorySeeder extends Seeder
{
    public function run(): void
    {
        ProductVendingCategory::factory()->createMany([
            [
                'product_id' => 44,
                'vending_category_id' => 1,
            ],
            [
                'product_id' => 45,
                'vending_category_id' => 1,
            ],
            [
                'product_id' => 46,
                'vending_category_id' => 1,
            ],
            [
                'product_id' => 47,
                'vending_category_id' => 1,
            ],
            [
                'product_id' => 48,
                'vending_category_id' => 1,
            ],
            [
                'product_id' => 49,
                'vending_category_id' => 2,
            ],
            [
                'product_id' => 50,
                'vending_category_id' => 2,
            ],
            [
                'product_id' => 51,
                'vending_category_id' => 2,
            ],
            [
                'product_id' => 52,
                'vending_category_id' => 2,
            ],
            [
                'product_id' => 53,
                'vending_category_id' => 2,
            ],
            [
                'product_id' => 54,
                'vending_category_id' => 3,
            ],
            [
                'product_id' => 55,
                'vending_category_id' => 3,
            ],
            [
                'product_id' => 56,
                'vending_category_id' => 3,
            ],
            [
                'product_id' => 57,
                'vending_category_id' => 3,
            ],
            [
                'product_id' => 58,
                'vending_category_id' => 3,
            ],
            [
                'product_id' => 59,
                'vending_category_id' => 4,
            ],
            [
                'product_id' => 60,
                'vending_category_id' => 4,
            ],
            [
                'product_id' => 61,
                'vending_category_id' => 4,
            ],
            [
                'product_id' => 62,
                'vending_category_id' => 4,
            ],
            [
                'product_id' => 63,
                'vending_category_id' => 4,
            ]
        ]);
    }
}
