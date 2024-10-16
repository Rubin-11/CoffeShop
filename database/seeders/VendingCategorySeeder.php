<?php

namespace Database\Seeders;

use App\Livewire\Pages\VendingCatalog;
use App\Models\VendingCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendingCategorySeeder extends Seeder
{
    public function run(): void
    {
        VendingCategory::factory()->createMany([
            [
                'name' =>'Молотый кофе',
            ],
            [
                'name' =>'Чай в пакетиках',
            ],
            [
                'name' =>'Кофейные капсулы',
            ],
            [
                'name' =>'Сиропы',
            ]
        ]);
    }
}
