<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_сoffee_roasts_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('coffee_roast_level_id'); // Степень обжарки кофе
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('coffee_roast_level_id')->references('id')->on('сoffee_roasts_levels');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_сoffee_roasts_levels');
    }
};
