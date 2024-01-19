<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Заказы
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Заказчик
            $table->string('order_number'); // Номер заказа
            $table->decimal('total', 10, 2); // Общая сумма заказа
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); // Связь с пользователем
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
