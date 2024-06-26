<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use App\Models\Atividade;
use App\Models\Professor;
use App\Models\Turma;
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


    public function addAula()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                return view('prof.addAula');
            }
        }
    }

    public function addAtividade()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'prof') {
                return view('prof.addAtividade');
            }
        }
    }

    // Relacionamento muitos-para-muitos com Atividade através da tabela pivô atividade_professor_turma
    public function atividades()
    {
        return $this->belongsToMany(Atividade::class, 'atividade_professor_turma', 'id_professor', 'id_atividade')
            ->withPivot('id_turma');
    }

    // Relacionamento muitos-para-muitos com Turma através da tabela pivô professor_turma
    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'professor_turma', 'id_professor', 'id_turma');
    }


    public function materia()
    {
        return view('prof.materia');
    }

    public function boletim()
    {
        return view('prof.boletim');
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
