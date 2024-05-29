<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_coffee_acidity', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('coffee_acidity_id'); // Кислотность кофе
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('coffee_acidity_id')->references('id')->on('coffee_acidity');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_coffee_acidity');
    }
};
