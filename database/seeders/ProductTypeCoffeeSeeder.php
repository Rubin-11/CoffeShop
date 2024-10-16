<?php

namespace Database\Seeders;

use App\Models\ProductTypeCoffee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeCoffeeSeeder extends Seeder
{
    public function run(): void
    {
        ProductTypeCoffee::factory()->createMany([
            [
                'product_id' => 1,
                'type_coffee_id' => 1,
            ],
            [
                'product_id' => 2,
                'type_coffee_id' => 2,
            ],
            [
                'product_id' => 3,
                'type_coffee_id' => 3,
            ],
            [
                'product_id' => 4,
                'type_coffee_id' => 4,
            ],
            [
                'product_id' => 5,
                'type_coffee_id' => 1,
            ],
            [
                'product_id' => 6,
                'type_coffee_id' => 2,
            ],
            [
                'product_id' => 7,
                'type_coffee_id' => 3,
            ],
            [
                'product_id' => 8,
                'type_coffee_id' => 4,
            ]
        ]);
    }
}
