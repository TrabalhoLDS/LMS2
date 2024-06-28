<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atividade;


class AtividadeController extends Controller
{
    public function index()
    {   

    }

    public function show($id)
    {
        $atividade = Atividade::findOrFail($id);
        return view('aluno.atvAluno', compact('atividade'));
    }

    protected function authenticated(Request $request, $user)
    {
        $atividades = Atividade::all(); // Busque todas as atividades
        return redirect()->route('home')->with(compact('atividades'));
    }



    public function create()
    {
        return view('adicAtividadeProf');
    }



    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'dataAbertura' => 'required|date',
            'dataExpiracao' => 'required|date',
            'tipoAtividade' => 'required|string',
            'arquivos' => 'nullable|array',
            'arquivos.*' => 'file|mimes:pdf,doc,docx,zip,jpg,png,jpeg',
        ]);

        // Criação da nova atividade
        $data = $request->all();

        if ($request->hasFile('arquivos')) {
            $files = [];
            foreach ($request->file('arquivos') as $file) {
                $path = $file->store('arquivos', 'public');
                $files[] = $path;
            }
            $data['caminhoArquivo'] = json_encode($files);
        } else {
            $data['caminhoArquivo'] = null;
        
        }

        Atividade::create($data);

        return redirect()->route('atividades.create')->with('success', 'Atividade adicionada com sucesso!');
    }




}



