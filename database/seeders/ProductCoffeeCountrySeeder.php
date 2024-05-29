<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCoffeeCountry;

class ProductCoffeeCountrySeeder extends Seeder
{
    public function run(): void
    {
        ProductCoffeeCountry::factory()->createMany([
            [
                'product_id' => 1,
                'coffee_country_id' => 8,
            ],
            [
                'product_id' => 2,
                'coffee_country_id' => 7,
            ],
            [
                'product_id' => 3,
                'coffee_country_id' => 6,
            ],
            [
                'product_id' => 4,
                'coffee_country_id' => 5,
            ],
            [
                'product_id' => 5,
                'coffee_country_id' => 4,
            ],
            [
                'product_id' => 6,
                'coffee_country_id' => 3,
            ],
            [
                'product_id' => 7,
                'coffee_country_id' => 2,
            ],
            [
                'product_id' => 8,
                'coffee_country_id' => 1,
            ]
        ]);
    }
}
