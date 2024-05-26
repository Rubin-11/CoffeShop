<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            UserSeeder::class,
            AddressSeeder::class,
            ProductSeeder::class,
            BasketSeeder::class,
            BasketItemSeeder::class,
            OrderSeeder::class,
            DeliverySeeder::class,
            PaymentSeeder::class,
            BrandSeeder::class,
        ]);

    }
}
