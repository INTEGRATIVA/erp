<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marcador', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('minimo');
            $table->string('maximo');
            $table->string('masculino');
            $table->string('Feminino');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcador');
    }
};
