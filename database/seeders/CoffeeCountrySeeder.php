<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CoffeeCountry;

class CoffeeCountrySeeder extends Seeder
{
    public function run(): void
    {
        CoffeeCountry::factory()->createMany([
            [
                'name' => 'Эквадор'
            ],
            [
                'name' => 'Ямайка'
            ],
            [
                'name' => 'Вьетнам'
            ],
            [
                'name' => 'Кения'
            ],
            [
                'name' => 'Индия'
            ],
            [
                'name' => 'Бразилия'
            ],
            [
                'name' => 'Эфиопия'
            ],
            [
                'name' => 'Колумбия'
            ],
        ]);
    }
}
