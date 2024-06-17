<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMateriaRequest;
use App\Models\subject;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
        $subjects = Subject::all(); // Obter todas as matérias
         return view('contAluno', compact('subjects')); // Passar as matérias para a view
     }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMateriaRequest $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        //
    }

}
