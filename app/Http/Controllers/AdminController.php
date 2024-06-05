<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//apagar para nao sobrepor codigo realizado por Ananda
use App\Models\Usuario;



class AdminController extends Controller
{
   public function index(){

    if(Auth::id()){

        //procura a coluna usertype dentro da tabela user e usa a função de autorização (do livewire) para liberar a pagina correta
        $usertype = Auth()->user()->usertype;

        if($usertype == 'user'){
            return view('aluno.indexaluno');

        }
        else if($usertype == 'admin'){
           // return view('admin.index');

            $usuarios = Usuario::all();
           // dd($usuarios); // Verifica os dados antes de passá-los para a view
            return view('admin.index', compact('usuarios'));


        }
        else if($usertype == 'prof'){
            return view('prof.index');

        }
    else{
        return redirect()->back();
    }

    }

   }

   public function addM()
    {
        return view('admin.addMateriaADM');
    }


    public function attachUserToSubject($userId, $subjectId)
    {
        $user = Usuario::find($userId);
        $subject = Subject::find($subjectId);

        $user->subjects()->attach($subjectId);

        return redirect()->back()->with('success', 'Usuário vinculado à matéria com sucesso!');
    }

    public function store(Request $request)
    {


    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        // Adicione mais regras de validação conforme necessário para outros campos
    ]);

    // Crie uma nova instância do modelo Subject e atribua os valores dos campos
    $subject = new Subject();
    $subject->name = $validatedData['name'];
    // Atribua outros campos conforme necessário

    // Salve a nova matéria no banco de dados
    $subject->save();

    // Redirecione para alguma página após a criação da matéria
    return response()->json(['success' => 'Matéria criada com sucesso!' . $subject]);
    // Crie uma nova instância do modelo Subject e atribua os valores dos campos
    }

    public function subject(){
        $subjects = Subject::all(); // Obtém todos os usuários do banco de dados
     //dd($usuarios);
        return view('admin.subjects', ['subjects' => $subjects]);

    }




}
