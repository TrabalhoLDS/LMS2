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
        Schema::create('professor_aula', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professor_id'); // Referência à tabela 'professors'
            $table->unsignedBigInteger('aula_id'); // Referência à tabela 'atividades'
            $table->timestamps();

            // Definindo chaves estrangeiras
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professor_aula');
    }
};
