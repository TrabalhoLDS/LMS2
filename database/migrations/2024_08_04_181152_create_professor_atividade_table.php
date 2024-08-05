<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorAtividadeTable extends Migration
{
    public function up()
    {
        Schema::create('professor_atividade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professor_id'); // Referência à tabela 'professors'
            $table->unsignedBigInteger('atividade_id'); // Referência à tabela 'atividades'
            $table->timestamps();

            // Definindo chaves estrangeiras
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
            $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('professor_atividade');
    }
}
