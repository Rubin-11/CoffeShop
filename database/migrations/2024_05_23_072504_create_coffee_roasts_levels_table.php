<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('сoffee_roasts_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('level'); // Степень обжарки кофе
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('сoffee_roasts_levels');
    }
};
