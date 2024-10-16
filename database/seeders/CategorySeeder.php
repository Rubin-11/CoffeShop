<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->createMany([
            [
                'name' => 'Свежеобжаренный кофе'
            ],
            [
                'name' => 'Чай и кофейные напитки'
            ],
            [
                'name' => 'Продукция для вендинга'
            ],
            [
                'name' => 'Здоровое питание'
            ],
        ]);
    }
}
