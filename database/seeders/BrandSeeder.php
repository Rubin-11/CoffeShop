<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()->createMany([
            [
                'name' => 'Far East Forest Tea',
            ],
            [
                'name' => 'Baikal Tea Collection',
            ],
            [
                'name' => 'Kuril Island Tea',
            ],
            [
                'name' => 'Daur Steppe Tea',
            ],
        ]);
    }
}
