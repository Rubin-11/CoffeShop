<?php

namespace Database\Seeders;

use App\Models\CoffeeRoastLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeeRoastLevelSeeder extends Seeder
{
    public function run(): void
    {
        CoffeeRoastLevel::factory()->createMany([
            [
                'level' => 1
            ],
            [
                'level' => 2
            ],
            [
                'level' => 3
            ],
            [
                'level' => 4
            ],
            [
                'level' => 5
            ],
        ]);
    }
}
