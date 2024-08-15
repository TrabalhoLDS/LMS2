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
        Schema::create('turma_questionario', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('questionario_id');
            $table->unsignedBigInteger('turma_id');
            $table->timestamps();


            // Definindo chaves estrangeiras
            $table->foreign('questionario_id')->references('id')->on('questionarios')->onDelete('cascade');
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_questionario');
    }
};
