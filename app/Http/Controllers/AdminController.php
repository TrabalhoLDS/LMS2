<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//apagar para nao sobrepor codigo realizado por Ananda
use App\Models\Usuario;



class AdminController extends Controller
{
    public function index()
    {

        if (Auth::id()) {

            //procura a coluna usertype dentro da tabela user e usa a função de autorização (do livewire) para liberar a pagina correta
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('aluno.indexaluno');
            } else if ($usertype == 'admin') {
                // return view('admin.index');

                $usuarios = Usuario::paginate(10);

                //$usuarios = Usuario::all();

                // dd($usuarios); // Verifica os dados antes de passá-los para a view
                return view('admin.index', compact('usuarios'));
            } else if ($usertype == 'prof') {
                return view('prof.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function search(Request $request)
    {
        if($request->ajax()) {
            $query = $request->get('search');
            if($query != '') {
                $usuarios = Usuario::where('name', 'like', '%'.$query.'%')
                            ->orWhere('email', 'like', '%'.$query.'%')
                            ->get();
            } else {
                $usuarios = Usuario::all();
            }

            $output = '';
            if($usuarios->count() > 0) {
                foreach($usuarios as $user) {
                    $output .= '
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="mr-3 same-size-img">
                            <p class="p">'.$user->name.'</p>
                        </div>
                        <div>
                            <form id="formAtualizarUsuario" action="'.route('users.update', ['user'=>$user->id]).'" method="POST">
                                '.csrf_field().'
                                <input type="hidden" name="_method" value="PUT">
                                <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                                    <option value="" selected disabled hidden>Selecione</option>
                                    <option value="admin">Administrador</option>
                                    <option value="prof">Professor</option>
                                    <option value="user">Aluno</option>
                                </select>
                                <button type="submit">Salvar</button>
                            </form>
                        </div>
                    </div>
                    <hr class="full-width-line">';
                }
            } else {
                $output .= '
                <tr>
                    <td align="center" colspan="3">No results found</td>
                </tr>';
            }
            return response()->json(['html' => $output]);
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

    public function subject()
    {
        $subjects = Subject::all(); // Obtém todos os usuários do banco de dados
        //dd($usuarios);
        return view('admin.subjects', ['subjects' => $subjects]);
    }
}
