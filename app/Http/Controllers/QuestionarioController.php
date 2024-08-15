<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Questao;
use App\Models\Questionario;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $turma_id = $request->input('turma_id');

        // Valida o formulário
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string'
        ]);


        // Cria o questionário
        $questionario = Questionario::create([
            'titulo' => $validatedData['titulo'],
            'descricao' => $validatedData['descricao'],
        ]);

        // Encontra o professor
        $professor = Professor::where('user_id', Auth::id())->first();

        if ($professor) {
            // Associa o questionário ao professor
            $professor->questionarios()->attach($questionario->id);
        } else {
            // Trata o caso em que o professor não foi encontrado
            return back()->withErrors('Professor não encontrado.');
        }

        $turma = Turma::find($turma_id);
        if (!$turma) {
            return response()->json(['message' => 'Turma não encontrada com ID ' . $turma_id], 404);
        }

        // Adiciona as questões (se necessário)
        if ($request->has('questoes')) {
            foreach ($request->questoes as $questaoData) {
                $questionario->questoes()->create([
                    'pergunta' => $questaoData['texto'],
                    // Adicione os outros campos conforme necessário
                ]);
            }
        }

        $questionario->turmas()->attach($turma_id);

        return response()->json(['success' => 'Aula salva com sucesso.'], 200);
    }



    // Outros métodos, como update, delete, etc., podem ser adicionados conforme necessário
}
