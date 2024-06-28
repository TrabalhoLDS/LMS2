<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;
use App\Models\Turma;

class AtividadeController extends Controller
{
    // Método para exibir o formulário de criação de atividade
    public function create()
    {
        $professores = Professor::all();
        $turmas = Turma::all();
        return view('atividades.create', compact('professores', 'turmas'));
    }

    // Método para processar a submissão do formulário de criação de atividade
    public function store(Request $request)
    {
        $request->validate([
            'professor_id' => 'required|exists:professors,id',
            'turma_id' => 'required|exists:turmas,id',
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $professor = Professor::find($request->professor_id);

        $atividadeData = [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
        ];

        $atividade = $professor->criarEAssociarAtividade($atividadeData, $request->turma_id);

        return redirect()->route('atividades.create')->with('success', "Atividade '{$atividade->nome}' criada com sucesso!");
    }
}