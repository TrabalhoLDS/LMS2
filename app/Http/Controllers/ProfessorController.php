<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Página inicial
     */
    /**
     *  public function index()
    *{
    *    return view('prof.materiasProf');
    *}
    *  //Adicionar matéria
    *public function add()
    *{
    *    return view('prof.addMateria');
    *}
    *  //Adicionar aula
    *public function add1()
    *{
    *    return view('prof.addAula');
    *}
    *
    *public function materia()
    *{
     *   return view('prof.materia');
    *}

    *public function addCont()
    *{
    *   return view('prof.addConteudo');
    *}


     * 
     * 
     */


    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
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
