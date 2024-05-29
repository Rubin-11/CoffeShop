<?php

namespace Database\Seeders;

use App\Models\BasketItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasketItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BasketItem::factory()->count(50)->create();
    }
}
