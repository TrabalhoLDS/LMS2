<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Subject;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SubjectUserController extends Controller
{

    public function index()
    {
        $users = Usuario::all();
        $subjects = Subject::all();
        return view('admin.subjectuser', compact('users', 'subjects'));
    }


    public function store(Request $request)
    {
        try {
            $usuario = Usuario::findOrFail($request->usuario_id);
            $usuario->subjects()->sync($request->subjects);
            return response()->json(['success' => 'Matérias vinculadas com sucesso!']);            
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Usuário não encontrado.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Ocorreu um erro ao vincular matérias.'], 500);
        }
    }

    public function destroy(Request $request)
    {
        $user = Usuario::findOrFail($request->user_id);
        $user->subjects()->detach($request->subjects);

        return redirect()->back()->with('success', 'Vínculo removido com sucesso!');
    }


}

