<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorQuestionarioController extends Controller
{
    //
    public function attach(Request $request)
    {
        $validatedData = $request->validate([
            'professor_id' => 'required|exists:professores,id',
            'questionario_id' => 'required|exists:questionarios,id',
        ]);

        $professor = Professor::findOrFail($validatedData['professor_id']);
        $professor->questionarios()->attach($validatedData['questionario_id']);

        return response()->json($professor->load('questionarios'), 200);
    }

    public function detach(Request $request)
    {
        $validatedData = $request->validate([
            'professor_id' => 'required|exists:professores,id',
            'questionario_id' => 'required|exists:questionarios,id',
        ]);

        $professor = Professor::findOrFail($validatedData['professor_id']);
        $professor->questionarios()->detach($validatedData['questionario_id']);

        return response()->json($professor->load('questionarios'), 200);
    }
}
