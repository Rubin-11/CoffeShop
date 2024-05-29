<?php

namespace Database\Seeders;

use App\Models\ProductTeaCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTeaCategorySeeder extends Seeder
{
    public function run(): void
    {
        ProductTeaCategory::factory()->createMany([
            [
                'product_id' => 9,
                'tea_category_id' => 1,
            ],
            [
                'product_id' => 10,
                'tea_category_id' => 1,
            ],
            [
                'product_id' => 11,
                'tea_category_id' => 1,
            ],
            [
                'product_id' => 12,
                'tea_category_id' => 1,
            ],
            [
                'product_id' => 13,
                'tea_category_id' => 1,
            ],
            [
                'product_id' => 14,
                'tea_category_id' => 2,
            ],
            [
                'product_id' => 15,
                'tea_category_id' => 2,
            ],
            [
                'product_id' => 16,
                'tea_category_id' => 2,
            ],
            [
                'product_id' => 17,
                'tea_category_id' => 2,
            ],
            [
                'product_id' => 18,
                'tea_category_id' => 2,
            ],
            [
                'product_id' => 19,
                'tea_category_id' => 3,
            ],
            [
                'product_id' => 20,
                'tea_category_id' => 3,
            ],
            [
                'product_id' => 21,
                'tea_category_id' => 3,
            ],
            [
                'product_id' => 22,
                'tea_category_id' => 3,
            ],
            [
                'product_id' => 23,
                'tea_category_id' => 3,
            ],
            [
                'product_id' => 24,
                'tea_category_id' => 4,
            ],
            [
                'product_id' => 25,
                'tea_category_id' => 4,
            ],
            [
                'product_id' => 26,
                'tea_category_id' => 4,
            ],
            [
                'product_id' => 27,
                'tea_category_id' => 4,
            ],
            [
                'product_id' => 28,
                'tea_category_id' => 4,
            ],
            [
                'product_id' => 29,
                'tea_category_id' => 5,
            ],
            [
                'product_id' => 30,
                'tea_category_id' => 5,
            ],
            [
                'product_id' => 31,
                'tea_category_id' => 5,
            ],
            [
                'product_id' => 32,
                'tea_category_id' => 5,
            ],
            [
                'product_id' => 33,
                'tea_category_id' => 5,
            ],
            [
                'product_id' => 34,
                'tea_category_id' => 6,
            ],
            [
                'product_id' => 35,
                'tea_category_id' => 6,
            ],
            [
                'product_id' => 36,
                'tea_category_id' => 6,
            ],
            [
                'product_id' => 37,
                'tea_category_id' => 6,
            ],
            [
                'product_id' => 38,
                'tea_category_id' => 6,
            ],
            [
                'product_id' => 39,
                'tea_category_id' => 7,
            ],
            [
                'product_id' => 40,
                'tea_category_id' => 7,
            ],
            [
                'product_id' => 41,
                'tea_category_id' => 7,
            ],
            [
                'product_id' => 42,
                'tea_category_id' => 7,
            ],
            [
                'product_id' => 43,
                'tea_category_id' => 7,
            ],
            [
                'product_id' => 44,
                'tea_category_id' => 7,
            ]
        ]);
    }
}
