<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            
            // Adiciona a coluna user_id como chave estrangeira
            $table->unsignedBigInteger('user_id')->nullable(false); // Não pode ser nulo
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('name'); // Adicione esta linha
            // Adicione quaisquer outras colunas necessárias aqui
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
