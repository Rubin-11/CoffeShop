<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Товары
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Название
            $table->text('description'); // Описание
            $table->decimal('price', 10, 2); // Цена
            $table->integer('stock'); // Количество на складе
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::drop('products');
    }
};
