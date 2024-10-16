<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tea_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Категории чая
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tea_categories');
    }
};
