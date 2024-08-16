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
        // Valida o formulário
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'questoes' => 'required|array',
            'questoes.*.texto' => 'required|string',
            'questoes.*.opcoes' => 'required|array|min:2', // Mínimo de 2 opções
            'questoes.*.opcoes.*' => 'required|string',
            'questoes.*.correta' => 'required|integer|min:0',
            'questoes.*.imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação da imagem
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
    
        // Adiciona as questões
        if ($request->has('questoes')) {
            foreach ($request->questoes as $questaoData) {
                // Armazena a imagem, se houver
                $imagemPath = null;
                if (isset($questaoData['imagem'])) {
                    $imagemPath = $questaoData['imagem']->store('imagens_questoes', 'public');
                }
    
                // Cria a questão e associa ao questionário
                $questionario->questoes()->create([
                    'texto' => $questaoData['texto'],
                    'imagem' => $imagemPath,
                    'opcoes' => json_encode($questaoData['opcoes']),
                    'correta' => $questaoData['correta'],
                ]);
            }
        }
    
        // Retorna com sucesso
        return redirect('/home')->with('status', 'Questionário criado com sucesso!');
    }
    



    // Outros métodos, como update, delete, etc., podem ser adicionados conforme necessário
}
