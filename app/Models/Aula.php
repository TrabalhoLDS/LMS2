<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $table = 'aulas';


    protected $fillable = [
        'nome',
        'descricao',
        'caminho_arquivo'
    ];

    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'aula_turma', 'aula_id','turma_id');
    }

    // Relacionamento muitos-para-muitos com Turma através da tabela pivô professor_turma
    public function professors()
    {
        return $this->belongsToMany(Turma::class, 'professor_aula', 'professor_id', 'aula_id');
    }
}
