<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;


    protected $table = 'turmas';


    protected $fillable = [
        'nome',
    ];

    // Define a relação com usuários como professores
    public function professores()
    {
        return $this->belongsToMany(User::class, 'professor_turma', 'turma_id', 'user_id');
    }

    // Define a relação com usuários como alunos
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'aluno_turma', 'turma_id', 'user_id');
    }

    // Relacionamento muitos-para-muitos com Professor através da tabela pivô atividade_professor_turma
    public function atividades()
    {
        return $this->belongsToMany(Turma::class, 'atividade_turma', 'atividade_id', 'turma_id');
    }

    public function aulas()
    {
        return $this->belongsToMany(Turma::class, 'aula_turma', 'aula_id', 'turma_id');
    }

    public function questionarios()
    {
        return $this->belongsToMany(Questionario::class, 'turma_questionario');
    }
}
