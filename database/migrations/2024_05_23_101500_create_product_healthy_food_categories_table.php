<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_healthy_food_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('healthy_food_category_id'); // Категории здорового питания
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('healthy_food_category_id')->references('id')->on('healthy_food_categories');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_healthy_food_categories');
    }
};
