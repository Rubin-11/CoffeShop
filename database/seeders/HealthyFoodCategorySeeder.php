<?php

namespace Database\Seeders;

use App\Models\HealthyFoodCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HealthyFoodCategorySeeder extends Seeder
{
    public function run(): void
    {
        HealthyFoodCategory::factory()->createMany([
            [
                'name' => 'Толокняные каши'
            ],
            [
                'name' => 'Протеиновые смеси'
            ]
        ]);
    }
}
