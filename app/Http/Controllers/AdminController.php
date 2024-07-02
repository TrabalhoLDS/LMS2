<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Turma;
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

                        // $atividades = aula::ordeByDesc('id')-get();


                $atividades = Atividade::all(); // Busca todas as atividades do banco de dados

         // Passa os dados para a view contAluno.blade.php
         return view('aluno.indexaluno', compact('atividades'));

         //       return view('aluno.indexaluno');
            } else if ($usertype == 'admin') {
                // return view('admin.index');

                $usuarios = Usuario::paginate(10);

                //$usuarios = Usuario::all();

                // dd($usuarios); // Verifica os dados antes de passá-los para a view
                return view('admin.index', compact('usuarios'));
            } else if ($usertype == 'prof') {

                $professor_id = Auth::id();

                // Agora você pode buscar as turmas associadas a esse professor através da relação many-to-many
                    $turmas = Turma::whereHas('professores', function ($query) use ($professor_id) {
                    $query->where('user_id', $professor_id);
                })->get();

                // Passar os posts para a view
                return view('prof.index', compact('turmas'));
            } else {
                return redirect()->back();
            }
        }
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('search');
            if ($query != '') {
                $usuarios = Usuario::where('name', 'like', '%' . $query . '%')
                    ->orWhere('email', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $usuarios = Usuario::all();
            }

            $output = '';
            if ($usuarios->count() > 0) {
                foreach ($usuarios as $user) {
                    $output .= '
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="mr-3 same-size-img">
                            <p class="p">' . $user->name . '</p>
                        </div>
                        <div>
                            <form id="formAtualizarUsuario" action="' . route('users.update', ['user' => $user->id]) . '" method="POST">
                                ' . csrf_field() . '
                                <input type="hidden" name="_method" value="PUT">
                                <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                                    <option value="" selected disabled hidden>Selecione</option>
                                    <option value="admin">Administrador</option>
                                    <option value="prof">Professor</option>
                                    <option value="user">Aluno</option>
                                </select>
                                <button type="submit"min>Salvar</button>
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

        if (Auth::id()) {

            $usertype = Auth()->user()->usertype;

            if ($usertype == 'admin') {
                return view('admin.addMateriaADM');
            }
        }
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            // Adicione mais regras de validação conforme necessário para outros campos
        ]);

        // Crie uma nova instância do modelo Subject e atribua os valores dos campos
        $turma = new Turma();
        $turma->nome = $validatedData['nome'];
        // Atribua outros campos conforme necessário

        // Salve a nova matéria no banco de dados
        $turma->save();

        // Recuperar a instância da matéria criada

        // Redirecione para alguma página após a criação da matéria
        return response()->json(['success' => 'Turma criada com sucesso!' . $turma]);
        // Crie uma nova instância do modelo Subject e atribua os valores dos campos
    }


    public function addTurma()
    {
        return view('admin.addTurma');
    }

    public function TurmaAprofundado()
    {
        return view('admin.TurmaAprofundado');
    }

    public function viewTurma()
    {
        $turmas = Turma::all(); // Recupera todas as turmas
        $professores = Usuario::where('usertype', 'prof')->get();

        return view('admin.viewTurma', [
            'turmas' => $turmas,
            'professores' => $professores,
        ]);
    }


    // mostrar atividade ao aluno ao clicar no link
    public function show($id)
    {
        $atividade = Atividade::findOrFail($id);
        return view('aluno.atvAluno', compact('atividade'));
    }












}


/*
PARA ATUALIZAR
event(new AtualizaTipoUsuario($user, $newRole));

        // Dispara o evento para atualizar o perfil
        AtualizaTipoUsuario::dispatch($user, $newRole);

        return response()->json(['message' => 'User role updated successfully.']);

 */
