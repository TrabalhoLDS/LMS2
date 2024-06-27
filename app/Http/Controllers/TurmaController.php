<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Usuario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TurmaController extends Controller
{

    public function vincularTurmaProfessor(Request $request)
    {
        try {
            // Validação dos dados do formulário
            $request->validate([
                'turma_id' => 'required|exists:turmas,id',
                'professor_id' => 'required|exists:users,id',
            ]);

            // Obter a turma e o professor selecionados
            $turma = Turma::findOrFail($request->turma_id);
            $professor = Usuario::findOrFail($request->professor_id);

            // Vincular o professor à turma (exemplo usando relacionamento many-to-many)
            $turma->professores()->attach($professor);

            return redirect()->route('viewTurma')->with('success', 'Turma vinculada ao professor com sucesso!');

        } catch (QueryException $e) {
            // Caso ocorra um erro de query (exceção SQL)
            return redirect()->route('viewTurma')->with('error', 'Erro ao vincular turma e professor: ' . $e->getMessage());

        } catch (\Exception $e) {
            // Captura de exceções genéricas
            return redirect()->route('viewTurma')->with('error', 'Erro inesperado: ' . $e->getMessage());
        }
}
public function viewAlunoTurma(Request $request)
{
    $turmas = Turma::all(); // Recupera todas as turmas
    $usuarios = Usuario::where('usertype', 'user')->get();

    return view('admin.viewAlunoTurma', [
        'turmas' => $turmas,
        'usuarios' => $usuarios,
    ]);
}
}
