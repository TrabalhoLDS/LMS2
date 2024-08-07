<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users'; // Assume que a tabela no banco de dados se chama 'users'

    public function professor()
{
    return $this->hasOne(Professor::class, 'user_id');
}

public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'aluno_turma', 'user_id', 'turma_id');
    }

}
