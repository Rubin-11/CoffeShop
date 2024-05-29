<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Livewire\Pages\TeaCatalog;
use App\Livewire\Pages\VendingCatalog;
use App\Models\CoffeeAcidity;
use App\Models\CoffeeProcessingsMethod;
use App\Models\MethodCoffeePreparation;
use App\Models\ProductCoffeeAcidity;
use App\Models\ProductMethodCoffeePreparation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->truncate();
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            CoffeeCountrySeeder::class,
            ProductCoffeeCountrySeeder::class,
            CoffeeRoastLevelSeeder::class,
            ProductCoffeeRoastLevelSeeder::class,
            CoffeeAciditySeeder::class,
            ProductCoffeeAciditySeeder::class,
            CoffeeProcessingMethodSeeder::class,
            ProductCoffeeProcessingMethodSeeder::class,
            SpecialCoffeeCategorySeeder::class,
            ProductSpecialCoffeeCategorySeeder::class,
            TypeCoffeeSeeder::class,
            ProductTypeCoffeeSeeder::class,
            MethodCoffeePreparationSeeder::class,
            ProductMethodCoffeePreparationSeeder::class,
            TeaCategorySeeder::class,
            ProductTeaCategorySeeder::class,
            VendingCategorySeeder::class,
            ProductVendingCategorySeeder::class,
            HealthyFoodCategorySeeder::class,
            ProductHealthyFoodCategorySeeder::class,
        ]);
    }
}
