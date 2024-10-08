<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

use App\Models\Professor;
use App\Models\Turma;
use App\Models\User;
use App\Models\Usuario;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AtividadeController extends Controller
{
    public function store(Request $request, $turma_id)
    {
        // Validação dos dados da requisição
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:255',
            'dataAbertura' => 'nullable|date',
            'dataExpiracao' => 'nullable|date',
            'tipoAtividade' => 'nullable|string|max:255',
            'caminhoArquivo.*' => 'nullable|file|mimes:jpg,png,pdf|max:2048', // Atualizado para um único arquivo
        ]);

        // Verificar se o turma_id passado é válido
        $turma = Turma::find($turma_id);
        if (!$turma) {
            return response()->json(['message' => 'Turma não encontrada com ID ' . $turma_id], 404);
        }

        // Encontrar o professor diretamente
        $professor = Professor::where('user_id', Auth::id())->first();

        if (!$professor) {
            return response()->json(['message' => 'Professor não encontrado para o usuário autenticado.'], 404);
        }

        // Salvar o arquivo se presente

        $path = null;
        if ($request->hasFile('caminhoArquivo')) {
            $file = $request->file('caminhoArquivo')[0];
             // Assume que é um único arquivo
            if ($file->isValid()) {
                // Define o nome do arquivo para evitar conflitos
                $filename = time() . '_' . $file->getClientOriginalName();
                // Armazena o arquivo na pasta 'uploads/atividades' no disco 'public'
                $path = $file->storeAs('uploads/atividades', $filename, 'public');
            } else {
                Log::error('Falha no upload do arquivo: ' . $file->getClientOriginalName());
                return response()->json(['message' => 'Falha no upload do arquivo.'], 500);
            }
        }


        // Criar a atividade e atribuir o caminho do arquivo se disponível
        $atividadeData = $validatedData;
        $atividadeData['caminhoArquivo'] = $path; // Certifique-se de que isso é uma string e não um array

        $atividade = Atividade::create($atividadeData);

        // Associar a atividade à turma
        $atividade->turmas()->attach($turma_id);

        // Associar a atividade ao professor
        $professor->atividades()->attach($atividade->id);

        //return response()->json(['message' => 'Atividade criada e associada com sucesso.', 'atividade' => $atividade], 201);
        return redirect('/home')->with('status', 'Atividade criada e associada com sucesso.');
    }


    public function show($id)
{
    $atividade = Atividade::findOrFail($id);
    $atividade->dataAbertura = Carbon::parse($atividade->dataAbertura);
    $atividade->dataExpiracao = Carbon::parse($atividade->dataExpiracao);
   return view('aluno.atvAluno', compact('atividade'));
}


public function submit(Request $request, $id)
{
    $atividade = Atividade::findOrFail($id);

    // Validação
    $request->validate([
        'arquivos.*' => 'file|max:2048', // Validação para arquivos
        'fotos.*' => 'image|max:2048', // Validação para imagens
        'comentarios' => 'nullable|string|max:1000', // Validação para comentários
    ]);

    // Salvar arquivos e fotos
    if ($request->hasFile('arquivos')) {
        foreach ($request->file('arquivos') as $file) {
            // Lógica para salvar arquivos
        }
    }

    if ($request->hasFile('fotos')) {
        foreach ($request->file('fotos') as $photo) {
            // Lógica para salvar fotos
        }
    }

    // Salvar comentários
    $atividade->comentarios = $request->input('comentarios');
    $atividade->save();

    return redirect()->route('atividade.show', $id)->with('success', 'Atividade enviada com sucesso!');
}


}
