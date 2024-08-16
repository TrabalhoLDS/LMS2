<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Aula;
use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Usuario::all(); // Obtém todos os usuários do banco de dados
        //dd($usuarios);
        return view('admin.index', ['usuarios' => $users]);
    }

    public function atividade()
    {
        return view('aluno.atvAluno');
    }


    //Aluno
    public function QuizAti()
    {
        return view('aluno.Quiz');
    }

    public function quiz()
    {
        return view('aluno.quizAluno');
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        var_dump($id);
    }

    /**
     * Update the specified resource in storage.
     */

    //usando validaçãop por request
    public function update(Request $request, string $id)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nivelUsuario' => 'required|in:admin,prof,user'
        ]);

        // Encontre o usuário pelo ID
        $user = Usuario::find($id);

        // Verifique se o usuário existe
        if (!$user) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        }

        // Armazena o tipo anterior do usuário para comparação
        $previousUserType = $user->usertype;
        $user->usertype = $request->nivelUsuario;
        $user->save();

        // Se o usuário foi promovido a professor, crie um registro na tabela professors
        if ($request->nivelUsuario == 'prof') {
            // Verifica se já existe um professor associado a esse usuário
            if (!$user->professor) {
                // Cria um novo registro na tabela professors
                Professor::create([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    // Adicione outros campos necessários para o professor aqui
                ]);
            }
        } elseif ($previousUserType == 'prof' && $request->nivelUsuario != 'prof') {
            // Se o usuário estava no tipo 'prof' e agora mudou para outro tipo,
            // Remove o registro da tabela professors
            $user->professor()->delete();
        }

        // Redireciona para a home com uma mensagem de sucesso
        return redirect('/home')->with('status', 'Tipo de usuário atualizado com sucesso.');
    }

    public function discAluno($turma_id)
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            return redirect()->route('login'); // Redireciona para a página de login se não estiver autenticado
        }

        // Obtém o tipo de usuário
        $usertype = Auth()->user()->usertype;

        if ($usertype == 'prof') {
            // Se o usuário for professor, encontra a turma pelo ID fornecido
            $turma = Turma::findOrFail($turma_id);
        } elseif ($usertype == 'user') {
            // Se o usuário for aluno, busca todas as turmas associadas a ele
            $aluno_id = Auth::id();
            $turmas = Turma::whereHas('usuarios', function ($query) use ($aluno_id) {
                $query->where('user_id', $aluno_id);
            })->get();

            // Verifica se a turma solicitada está nas turmas do aluno
            if (!$turmas->contains('id', $turma_id)) {
                return redirect()->route('home')->with('error', 'Você não tem acesso a essa turma.');
            }
        } else {
            return redirect()->route('home')->with('error', 'Tipo de usuário não autorizado.');
        }

        // Obtém todas as atividades associadas à turma
        $atividades = Atividade::whereHas('turmas', function ($query) use ($turma_id) {
            $query->where('turma_id', $turma_id);
        })->get();

        // Obtém todas as aulas associadas à turma através da tabela intermediária aula_turma
        $aulas = Aula::whereHas('turmas', function ($query) use ($turma_id) {
            $query->where('turma_id', $turma_id);
        })->get();

        // Passa os dados para a view
        return view('aluno.disciplinaaluno', compact('turma_id', 'atividades', 'aulas'));
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
