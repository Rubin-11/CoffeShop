<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coffee_countries', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Страна производства кофе
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coffee_countries');
    }
};
