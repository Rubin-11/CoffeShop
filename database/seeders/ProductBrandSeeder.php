<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductBrand;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductBrand::factory()->createMany([
            [
                'product_id' => 9,
                'brand_id' => 1,
            ],
            [
                'product_id' => 10,
                'brand_id' => 1,
            ],
            [
                'product_id' => 11,
                'brand_id' => 2,
            ],
            [
                'prodoct_id' => 12,
                'brand_id' => 2,
            ],
            [
                'product_id' => 13,
                'brand_id' => 3,
            ],
            [
                'product_id' => 14,
                'brand_id' => 3,
            ],
            [
                'product_id' => 15,
                'brand_id' => 3,
            ],
            [
                'product_id' => 16,
                'brand_id' => 4,
            ],
            [
                'product_id' => 17,
                'brand_id' => 4,
            ],
            [
                'product_id' => 18,
                'brand_id' => 4,
            ],
        ]);
    }
}
