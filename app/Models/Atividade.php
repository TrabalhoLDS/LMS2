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
        'id',
        'nome', 
        'descricao',
        'dataAbertura',
        'dataExpiracao',
        'tipoAtividade',
        'caminhoArquivo',
    ];

    // Relacionamento muitos-para-muitos com Professor através da tabela pivô atividade_professor_turma
    public function professores()
    {
        return $this->belongsToMany(Professor::class, 'atividade_professor_turma', 'id_atividade', 'id_professor')
            ->withPivot('id_turma');
    }

}
