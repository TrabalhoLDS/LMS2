<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AulaController extends Controller
{
    public function adicionarAula(Request $request)
    {
        try {
            // Validação dos dados de entrada
            $validatedData = $request->validate([
                'nome' => 'required|string|max:255',
                'descricao' => 'required|string|max:255',
                'data' => 'required|date',
                'caminhoArquivo' => 'string|max:255',
                // Adicione mais regras de validação conforme necessário para outros campos
            ]);

            // Criação e atribuição dos valores ao novo modelo Aula
            $aula = new Aula();
            $aula->nome = $validatedData['nome'];
            $aula->descricao = $validatedData['descricao'];

            // Formatação da data
            $aula->data = Carbon::parse($validatedData['data'])->format('Y-m-d'); // ou 'Y-m-d H:i:s' conforme necessário

            $aula->caminhoArquivo = $validatedData['caminhoArquivo'];

            // Salvamento da nova instância no banco de dados
            $aula->save();

            // Retorno de resposta de sucesso
            return response()->json(['message' => 'Aula criada com sucesso!', 'aula' => $aula], 201);

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
