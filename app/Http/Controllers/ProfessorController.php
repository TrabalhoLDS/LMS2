<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use App\Models\Atividade;
use App\Models\Professor;
use App\Models\Turma;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{


    public function index()
    {
        if (Auth::id()) {

            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                $professores = Professor::all();
                return view('prof.index', compact('professores'));
                //retorna contprof.blade dentro de componentes que é a tabela turmar que deve conter id e nome
                //para juntar as informações devemos fazer uma espécie de join. Exemplo professores da turma de matemárica. A tabela professor
                //devera conter um id com a turma de cada um. assim também para aluno e etc
            } else {
                return view('auth.login');
            }
        }
    }


    public function addAula($turma_id)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                $turma = Turma::findOrFail($turma_id);
                return view('prof.addAula', compact('turma'));
            }
        }
    }

    public function addAtividade($turma_id)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                $turma = Turma::findOrFail($turma_id);

                return view('prof.addAtividade', compact('turma'));
            }
        }
    }

    public function visualizarATV($turma_id)
{
    if (Auth::check()) {
        $usertype = Auth::user()->usertype;

        if ($usertype == 'prof') {
            $prof_id = Auth::id();

            // Recupera a turma específica
            $turma = Turma::findOrFail($turma_id);

            // Verifica se o professor está associado a essa turma
            $isProfessorInTurma = $turma->professores->contains($prof_id);

            if (!$isProfessorInTurma) {
                // Caso o professor não esteja associado à turma, você pode redirecionar ou exibir uma mensagem de erro
                return redirect()->route('home')->withErrors('Você não está associado a esta turma.');
            }

            // Busca as atividades associadas à turma e ao professor
            $atividades = Atividade::whereHas('turmas', function ($query) use ($turma_id) {
                $query->where('turma_id', $turma_id);
            })->whereHas('professors', function ($query) use ($prof_id) {
                $query->where('user_id', $prof_id);
            })->get();

            // Passa a turma e as atividades para a view
            return view('prof.visualizarATV', compact('turma', 'atividades'));
        } else {
            // Redirecionar ou tratar caso o usuário não seja um professor
            return redirect()->route('home')->withErrors('Acesso negado.');
        }
    } else {
        // Redirecionar para login se o usuário não estiver autenticado
        return redirect()->route('login')->withErrors('Você precisa estar autenticado.');
    }
}


    //public function addQuestionario($turma_id)
    //{
      //  if (Auth::id()) {
        //    $usertype = Auth()->user()->usertype;

          //  if ($usertype == 'prof') {
          //      $turma = Turma::findOrFail($turma_id);

            //    return view('prof.addQuestionario', compact('turma_id'));
            //}
        //}
    //}

    public function addQuestionario($turma_id)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                $turma = Turma::findOrFail($turma_id);

                return view('prof.addQuestionario', compact('turma'));
            }
        }
    }

    public function adicionarQuestionario($turma_id)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                $turma = Turma::findOrFail($turma_id);

                return view('prof.addQuestionario', compact('turma_id'));
            }
        }
    }

    public function detalhes_ATV($turma_id)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                $turma = Turma::findOrFail($turma_id);

                return view('prof.detalhes_ATV', compact('turma_id'));
            }
        }
    }
    
    public function detalhes_AULA($turma_id)
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                $turma = Turma::findOrFail($turma_id);

                return view('prof.detalhes_AULA', compact('turma_id'));
            }
        }
    }

    public function materia($turma_id)
    {
        $turma = Turma::findOrFail($turma_id);

        return view('prof.materia', compact('turma'));
    }

    public function boletim($turma_id)
    {
        // Filtra os alunos associados à turma específica
        $alunos = Usuario::whereHas('turmas', function ($query) use ($turma_id) {
            $query->where('turma_id', $turma_id);
        })->where('usertype', 'user')->get();

        // Retorna a view com os alunos da turma para o boletim
        return view('prof.boletim', compact('alunos'));
    }

    public function notas()
    {
        return view('prof.notas');
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        $professor = new Professor;
        $professor->nome = $request->nome;
        // Adicione aqui todos os outros campos que você precisa salvar
        $professor->save();

        return redirect('/professores');
    }

    public function show($id)
    {
        $professor = Professor::find($id);
        return view('professores.show', compact('professor'));
    }

    public function edit($id)
    {
        $professor = Professor::find($id);
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::find($id);
        $professor->nome = $request->nome;
        // Adicione aqui todos os outros campos que você precisa atualizar
        $professor->save();

        return redirect('/professores');
    }

    public function destroy($id)
    {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect('/professores');
    }
}
