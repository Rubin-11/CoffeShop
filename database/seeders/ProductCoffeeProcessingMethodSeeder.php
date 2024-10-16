<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCoffeeProcessingMethod;

class ProductCoffeeProcessingMethodSeeder extends Seeder
{
    public function run(): void
    {
        ProductCoffeeProcessingMethod::factory()->createMany([
            [
                'product_id' => 1,
                'сoffee_processing_method_id' => 1
            ],
            [
                'product_id' => 2,
                'сoffee_processing_method_id' => 2
            ],
            [
                'product_id' => 3,
                'сoffee_processing_method_id' => 3
            ],
            [
                'product_id' => 4,
                'сoffee_processing_method_id' => 1
            ],
            [
                'product_id' => 5,
                'сoffee_processing_method_id' => 2
            ],
            [
                'product_id' => 6,
                'сoffee_processing_method_id' => 3
            ],
            [
                'product_id' => 7,
                'сoffee_processing_method_id' => 1
            ],
            [
                'product_id' => 8,
                'сoffee_processing_method_id' => 2
            ],
        ]);
    }
}
