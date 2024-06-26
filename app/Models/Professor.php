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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento muitos-para-muitos com Atividade através da tabela pivô atividade_professor_turma
    public function atividades()
    {
        return $this->belongsToMany(Atividade::class, 'atividade_professor_turma', 'id_professor', 'id_atividade')
            ->withPivot('id_turma');
    }

    // Relacionamento muitos-para-muitos com Turma através da tabela pivô professor_turma
    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'professor_turma', 'id_professor', 'id_turma');
    }

    // Método para criar uma nova atividade e vincular à turma
    public function criarEAssociarAtividade($atividadeData, $turmaId)
    {
        // Cria a nova atividade
        $atividade = Atividade::create($atividadeData);

        // Vincula a atividade ao professor e à turma
        $this->atividades()->attach($atividade->id, ['id_turma' => $turmaId]);

        return $atividade;
    }
}
