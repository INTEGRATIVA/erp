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
        Schema::create('pessoa_fisica', function (Blueprint $table) {
            $table->id();
            $table->date('data_nascimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('rg_orgao_emissor');
            $table->unsignedBigInteger('pessoa_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_fisica');
    }
};
