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
    $alunos = Usuario::where('usertype', 'user')->get();

    return view('admin.viewAlunoTurma', [
        'turmas' => $turmas,
        'alunos' => $alunos,
    ]);
}

public function vincularTurmaAluno(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'turma_id' => 'required|exists:turmas,id',
    ]);

    try {
        $user = Usuario::findOrFail($request->user_id);
        $turma = Turma::findOrFail($request->turma_id);

        // Verifica se o usuário já está vinculado a esta turma
        if ($user->turmas()->where('turma_id', $turma->id)->exists()) {
            return back()->with('warning', 'Este aluno já está vinculado a esta turma!');
        }

        // Vincula o usuário à turma
        $user->turmas()->attach($turma);

        return back()->with('success', 'Aluno vinculado à turma com sucesso!');
    } catch (\Exception $e) {
        return back()->with('error', 'Erro ao vincular aluno à turma: ' . $e->getMessage());
    }
}
}


