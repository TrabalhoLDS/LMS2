<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Página inicial
     */
    public function index()
    {
        return view('prof.materiasProf');
    }
    //Adicionar matéria
    public function add()
    {
        return view('prof.addMateria');
    }
    //Adicionar aula
    public function add1()
    {
        return view('prof.addAula');
    }

    public function materia()
    {
        return view('prof.materia');
    }

    public function addCont()
    {
        return view('prof.addConteudo');
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
    public function store(StoreProfessorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $profesessor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $profesessor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   // public function update(UpdateProfessorRequest $request, Professor $profesessor)
    //{
        //
    //}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        //
    }
}
