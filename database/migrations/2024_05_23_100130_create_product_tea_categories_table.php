<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_tea_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('tea_category_id'); // Категории чая
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('tea_category_id')->references('id')->on('tea_categories');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_tea_categories');
    }
};
