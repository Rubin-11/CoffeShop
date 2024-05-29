<?php

namespace Database\Seeders;

use App\Models\ProductMethodCoffeePreparation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductMethodCoffeePreparationSeeder extends Seeder
{
    public function run(): void
    {
        ProductMethodCoffeePreparation::factory()->createMany([
            [
                'product_id' => 1,
                'method_coffee_preparation_id' => 1,
            ],
            [
                'product_id' => 2,
                'method_coffee_preparation_id' => 2,
            ],
            [
                'product_id' => 3,
                'method_coffee_preparation_id' => 3,
            ],
            [
                'product_id' => 4,
                'method_coffee_preparation_id' => 4,
            ],
            [
                'product_id' => 5,
                'method_coffee_preparation_id' => 5,
            ],
            [
                'product_id' => 6,
                'method_coffee_preparation_id' => 6,
            ],
            [
                'product_id' => 7,
                'method_coffee_preparation_id' => 7,
            ],
            [
                'product_id' => 8,
                'method_coffee_preparation_id' => 8,
            ]
        ]);
    }
}
