<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->truncate();
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            AddressSeeder::class,
            ProductSeeder::class,
            BasketSeeder::class,
            BasketItemSeeder::class,
            OrderSeeder::class,
            DeliverySeeder::class,
            PaymentSeeder::class,
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
