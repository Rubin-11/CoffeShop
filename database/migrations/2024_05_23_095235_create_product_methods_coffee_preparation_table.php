<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_methods_coffee_preparation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('method_coffee_preparation_id'); // Способы приготовления кофе
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('method_coffee_preparation_id')->references('id')->on('methods_coffee_preparation');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_methods_coffee_preparation');
    }
};
