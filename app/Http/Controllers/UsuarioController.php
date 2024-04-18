<?php

namespace App\Http\Controllers;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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
    public function update(Request $request, string $id)
    {
                  // Validação dos dados do formulário (opcional, mas recomendado)
                  $request->validate([
                    'nivelUsuario' => 'required|in:admin,prof,user' // Certifique-se de ajustar as regras de validação conforme necessário
                ]);

                // Encontre o usuário pelo ID
                $user = Usuario::find($id);

                // Verifique se o usuário existe
                if (!$user) {
                    return response()->json(['message' => 'Usuário não encontrado.'], 404);
                }

                $user->usertype = $request->nivelUsuario;
                $user->save();

                return response()->json(['message' => 'Tipo de usuário atualizado com sucesso.']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
