<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCoffeeRoastLevel;

class ProductCoffeeRoastLevelSeeder extends Seeder
{
    public function run(): void
    {
        ProductCoffeeRoastLevel::factory()->createMany([
            [
                'product_id' => 1,
                'coffee_roast_level_id' => 1,
            ],
            [
                'product_id' => 2,
                'coffee_roast_level_id' => 2,
            ],
            [
                'product_id' => 3,
                'coffee_roast_level_id' => 3,
            ],
            [
                'product_id' => 4,
                'coffee_roast_level_id' => 4,
            ],
            [
                'product_id' => 5,
                'coffee_roast_level_id' => 5,
            ],
            [
                'product_id' => 6,
                'coffee_roast_level_id' => 1,
            ],
            [
                'product_id' => 7,
                'coffee_roast_level_id' => 2,
            ],
            [
                'product_id' => 8,
                'coffee_roast_level_id' => 3,
            ]
        ]);
    }
}
