<?php

namespace Database\Seeders;

use App\Models\MethodCoffeePreparation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MethodCoffeePreparationSeeder extends Seeder
{
    public function run(): void
    {
        MethodCoffeePreparation::factory()->createMany([
            [
                'name' => 'Турка'
            ],
            [
                'name' => 'Френч-пресс'
            ],
            [
                'name' => 'Мока'
            ],
            [
                'name' => 'Экспрессо'
            ],
            [
                'name' => 'Воронка'
            ],
            [
                'name' => 'Аэропресс'
            ],
            [
                'name' => 'Чашка'
            ],
            [
                'name' => 'Автомат'
            ],
        ]);
    }
}
