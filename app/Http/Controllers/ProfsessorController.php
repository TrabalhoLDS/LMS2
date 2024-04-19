<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfsessorRequest;
use App\Http\Requests\UpdateProfsessorRequest;
use App\Models\Profsessor;

class ProfsessorController extends Controller
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
    public function store(StoreProfsessorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profsessor $profsessor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profsessor $profsessor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfsessorRequest $request, Profsessor $profsessor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profsessor $profsessor)
    {
        //
    }
}
