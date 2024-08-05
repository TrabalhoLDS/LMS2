<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Professor;
use App\Models\Turma;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AulaController extends Controller
{
    public function adicionarAula(Request $request, $turma_id)
{
    try {
        // Validação dos dados de entrada
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'caminho_arquivo.*' => 'nullable|file|mimes:jpg,png,pdf|max:2048', // Validação para múltiplos arquivos
        ]);

        $turma = Turma::find($turma_id);
        if (!$turma) {
            return response()->json(['message' => 'Turma não encontrada com ID ' . $turma_id], 404);
        }

        $professor = Professor::where('user_id', Auth::id())->first();

        if (!$professor) {
            return response()->json(['message' => 'Professor não encontrado para o usuário autenticado.'], 404);
        }

        // Criação e atribuição dos valores ao novo modelo Aula
        $aula = new Aula();
        $aula->nome = $validatedData['nome'];
        $aula->descricao = $validatedData['descricao'];

        // Processamento dos arquivos
        if ($request->hasFile('caminho_arquivo')) {
            $file = $request->file('caminho_arquivo')[0]; // Apenas o primeiro arquivo
            if ($file->isValid()) {
                // Define o nome do arquivo para evitar conflitos
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('uploads/aulas', $filename, 'public');
                $aula->caminho_arquivo = $path; // Apenas o primeiro arquivo
            } else {
                Log::error('File upload failed for: ' . $file->getClientOriginalName());
            }
        }

        // Salvamento da nova instância no banco de dados
        $aula->save();

        $aula->turmas()->attach($turma_id);

        // Associar a atividade ao professor
        $professor->aulas()->attach($aula->id);


        // Retorno de resposta de sucesso
        return response()->json(['success' => 'Aula salva com sucesso.'], 200);

    } catch (QueryException $e) {
        // Captura de erros específicos relacionados ao banco de dados
        Log::error('Erro ao salvar a aula no banco de dados: ' . $e->getMessage());
        return response()->json(['error' => 'Erro ao salvar a aula no banco de dados.'], 500);

    } catch (Exception $e) {
        // Captura de erros gerais
        Log::error('Erro inesperado: ' . $e->getMessage());
        return response()->json(['error' => 'Ocorreu um erro inesperado.'], 500);
    }

}
}
