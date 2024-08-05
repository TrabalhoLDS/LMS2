<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadeTurmaTable extends Migration
{
    public function up()
    {
        Schema::create('atividade_turma', function (Blueprint $table) {
            $table->unsignedBigInteger('atividade_id');
            $table->unsignedBigInteger('turma_id');
            $table->primary(['atividade_id', 'turma_id']);
            $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade');
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('atividade_turma');
    }
}
