<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Заказы товаров
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Заказ
            $table->unsignedSmallInteger('product_id'); // Товар
            $table->integer('quantity'); // Количество
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders'); // Связь с заказом
            $table->foreign('product_if')->references('id')->on('products'); // Связь с продуктом
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
