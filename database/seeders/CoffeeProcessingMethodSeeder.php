<?php

namespace Database\Seeders;

use App\Models\CoffeeProcessingMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeeProcessingMethodSeeder extends Seeder
{
    public function run(): void
    {
        CoffeeProcessingMethod::factory()->createMany([
            [
                'name' => 'Сухая'
            ],
            [
                'name' => 'Мытая'
            ],
            [
                'name' => 'Прочие'
            ],
        ]);
    }
}
