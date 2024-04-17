<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all(); // Obtém todos os usuários do banco de dados
        //dd($usuarios);
        return view('admin.index', ['usuarios' => $usuarios]);
    }
}
