<?php

namespace Database\Seeders;

use App\Models\TeaCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeaCategorySeeder extends Seeder
{
    public function run(): void
    {
        TeaCategory::factory()->createMany([
            [
                'name' => 'Черный чай'
            ],
            [
                'name' => 'Зеленый чай'
            ],
            [
                'name' => 'Молочный улунг'
            ],
            [
                'name' => 'Травяной чай'
            ],
            [
                'name' => 'Матча'
            ],
            [
                'name' => 'Пуэр'
            ],
            [
                'name' => 'Кофейные напитки'
            ],
        ]);
    }
}
