<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use App\Models\Usuario;

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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
