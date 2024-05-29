<?php

namespace Database\Seeders;

use App\Models\SpecialCoffeeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialCoffeeCategorySeeder extends Seeder
{
    public function run(): void
    {
        SpecialCoffeeCategory::factory()->createMany([
            [
                'name' => 'Популярное'
            ],
            [
                'name' => 'Новый урожай'
            ],
            [
                'name' => 'Ваш выбор'
            ],
            [
                'name' => 'Микролог'
            ],
            [
                'name' => 'Сорт недели'
            ],
            [
                'name' => 'Скидки'
            ],
            [
                'name' => 'Новинки'
            ],
        ]);
    }
}
