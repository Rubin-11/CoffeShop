<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_types_coffee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); //  Продукт
            $table->unsignedBigInteger('type_coffee_id'); // Типы кофе
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('type_coffee_id')->references('id')->on('types_coffee');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_types_coffee');
    }
};
