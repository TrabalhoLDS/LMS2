<?php

namespace App\Http\Controllers;

use App\Models\Questao;
use App\Models\Questionario;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    /**
     * Exibe a lista de questões de um questionário específico.
     */
    public function index($questionarioId)
    {
        $questionario = Questionario::with('questoes')->findOrFail($questionarioId);

        return view('questoes.index', compact('questionario'));
    }

    /**
     * Exibe o formulário para criar uma nova questão.
     */
    public function create($questionarioId)
    {
        $questionario = Questionario::findOrFail($questionarioId);

        return view('questoes.create', compact('questionario'));
    }

    /**
     * Armazena uma nova questão no banco de dados.
     */
    public function store(Request $request, $questionarioId)
    {
        $request->validate([
            'pergunta' => 'required|string|max:255',
        ]);

        $questionario = Questionario::findOrFail($questionarioId);

        $questionario->questoes()->create([
            'pergunta' => $request->pergunta,
        ]);

        return redirect()->route('questoes.index', $questionarioId)
                         ->with('success', 'Questão criada com sucesso!');
    }

    /**
     * Exibe o formulário para editar uma questão existente.
     */
    public function edit($id)
    {
        $questao = Questao::findOrFail($id);

        return view('questoes.edit', compact('questao'));
    }

    /**
     * Atualiza uma questão existente no banco de dados.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pergunta' => 'required|string|max:255',
        ]);

        $questao = Questao::findOrFail($id);
        $questao->update($request->all());

        return redirect()->route('questoes.index', $questao->questionario_id)
                         ->with('success', 'Questão atualizada com sucesso!');
    }

    /**
     * Remove uma questão do banco de dados.
     */
    public function destroy($id)
    {
        $questao = Questao::findOrFail($id);
        $questao->delete();

        return redirect()->route('questoes.index', $questao->questionario_id)
                         ->with('success', 'Questão removida com sucesso!');
    }
}
