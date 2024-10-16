<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CoffeeAcidity;

class CoffeeAciditySeeder extends Seeder
{
    public function run(): void
    {
        CoffeeAcidity::factory()->createMany([
            [
                'name' => 'Низкая'
            ],
            [
                'name' => 'Средняя'
            ],
            [
                'name' => 'Высокая'
            ],
        ]);
    }
}
