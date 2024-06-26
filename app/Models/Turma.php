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
    public function alunos()
    {
        return $this->belongsToMany(User::class, 'aluno_turma', 'turma_id', 'user_id');
    }
}
