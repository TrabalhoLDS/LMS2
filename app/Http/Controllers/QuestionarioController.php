<?php

namespace App\Http\Controllers;

use App\Models\Questionario;
use App\Models\Turma;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
    /**
     * Exibe uma lista de todos os questionários.
     */
    public function index()
    {
        // Carrega todos os questionários, incluindo professores e questões
        $questionarios = Questionario::with('professores', 'questoes')->get();

        // Retorna a view com os questionários
        return view('questionarios.index', compact('questionarios'));
    }

    /**
     * Exibe todos os questionários associados a uma turma específica.
     */
    public function showByTurma($turmaId)
    {
        // Encontra a turma e carrega os professores e questionários associados
        $turma = Turma::with('professores.questionarios.questoes')->findOrFail($turmaId);

        // Extrai todos os questionários associados aos professores da turma
        $questionarios = $turma->professores->flatMap(function ($professor) {
            return $professor->questionarios;
        });

        // Retorna a view com os questionários filtrados pela turma
        return view('turmas.questionarios', compact('turma', 'questionarios'));
    }

    /**
     * Armazena um novo questionário no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        // Cria um novo questionário
        $questionario = Questionario::create($validatedData);

        // Redireciona para a lista de questionários
        return redirect()->route('questionarios.index')->with('success', 'Questionário criado com sucesso!');
    }

    // Outros métodos, como update, delete, etc., podem ser adicionados conforme necessário
}
