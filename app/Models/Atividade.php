<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $table = 'atividades'; //indica node da tabela no BD


    // Campos que podem ser preenchidos no formulário
    protected $fillable = [
        'nome',
        'descricao',
        'dataAbertura',
        'dataExpiracao',
        'tipoAtividade',
        'caminhoArquivo',
    ];


    protected $dates = ['dataAbertura', 'dataVencimento'];



    // Relacionamento muitos-para-muitos com Professor através da tabela pivô atividade_professor_turma
/*
    APAGAR
    public function professores()
    {
        return $this->belongsToMany(Professor::class, 'atividade_professor_turma', 'id_atividade', 'id_professor')
            ->withPivot('id_turma');
    } */

    // Relacionamento muitos-para-muitos com Professor através da tabela pivô atividade_professor_turma
    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'atividade_turma', 'atividade_id','turma_id');
    }

    // Relacionamento muitos-para-muitos com Turma através da tabela pivô professor_turma
    public function professors()
    {
        return $this->belongsToMany(Turma::class, 'professor_atividade', 'professor_id', 'atividade_id');
    }




}
