<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'professors';

    protected $fillable = [
        'user_id',
        'name',
        // Adicione outros campos conforme necessário
    ];

    /** Para acessar professor
     * php
     * $professor = Professor::find(1);
     *echo $professor->user->name; // Isso irá imprimir o nome do usuário associado ao professor
     *
     */

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    // Relacionamento muitos-para-muitos com Turma através da tabela pivô professor_turma
    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'professor_turma', 'id_professor', 'id_turma');
    }

    // Relacionamento muitos-para-muitos com Turma através da tabela pivô professor_turma
    public function aulas()
    {
        return $this->belongsToMany(Turma::class, 'professor_aula', 'professor_id', 'aula_id');
    }

    // Relacionamento muitos-para-muitos com Turma através da tabela pivô professor_turma
    public function atividades()
    {
        return $this->belongsToMany(Atividade::class, 'professor_atividade', 'professor_id', 'atividade_id');
    }

    public function questionarios()
    {
        return $this->belongsToMany(Questionario::class, 'professor_questionario');
    }
}
