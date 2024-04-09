<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Продукты категории
        Schema::create('products_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products'); // Связь с продуктами
            $table->foreign('category_id')->references('id')->on('categories'); // Связь с категориями
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products_categories');
    }
};
