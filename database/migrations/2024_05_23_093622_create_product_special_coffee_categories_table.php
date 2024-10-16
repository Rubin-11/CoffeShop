<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_special_coffee_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('special_coffee_category_id'); // Особые категории кофе
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('special_coffee_category_id')->references('id')->on('special_coffee_categories');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prduct_special_coffee_categories');
    }
};
