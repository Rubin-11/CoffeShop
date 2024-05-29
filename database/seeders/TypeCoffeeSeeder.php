<?php

namespace Database\Seeders;

use App\Models\TypeCoffee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeCoffeeSeeder extends Seeder
{
    public function run(): void
    {
        TypeCoffee::factory()->createMany([
            [
                'name' =>'Арабика'
            ],
            [
                'name' =>'Робуста'
            ],
            [
                'name' =>'Смесь арабик',
            ],
            [
                'name' =>'Смесь арабика/робуста',
            ]
        ]);
    }
}
