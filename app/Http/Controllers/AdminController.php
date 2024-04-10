<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
   public function index(){

    if(Auth::id()){

        //procura a coluna usertype dentro da tabela user e usa a função de autorização (do livewire) para liberar a pagina correta
        $usertype = Auth()->user()->usertype;

        if($usertype == 'user'){
            return view('dashboard');

        }
        else if($usertype == 'admin'){
            return view('admin.index');

        }
        else if($usertype == 'prof'){
            return view('prof.index');

        }
    else{
        return redirect()->back();
    }

    }

   }
}
