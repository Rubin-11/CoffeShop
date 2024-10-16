<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_сoffee_processings_methods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('сoffee_processing_method_id'); // Обработка кофе
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('сoffee_processing_method_id')->references('id')->on('сoffee_processings_methods');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_сoffee_processings_methods');
    }
};
