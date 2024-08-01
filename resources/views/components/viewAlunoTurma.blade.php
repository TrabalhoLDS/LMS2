<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-5">Vincular Alunos a Turma</h1>
        </div>
    </div>
</div>
<style>
        .btn-salvar {
            background-color: #4CAF50; /* Verde */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-salvar:hover {
            background-color: #45a049; /* Verde mais escuro ao passar o mouse */
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
    </style>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <hr class="full-width-line">
                    <div class="centered-names" id="user-list">
                        @foreach($alunos as $aluno)
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="mr-3 same-size-img">
                                <p class="p">{{ $aluno->name }}</p>
                            </div>
                            <div>
                                <form id="TurmaAluno{{ $aluno->id }}" action="{{ route('vincularTurmaAluno') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $aluno->id }}">
                                    <label for="turma_id"></label>
                                    <select class="form-control" id="turma_id" name="turma_id">
                                        <option value="" selected disabled hidden>Selecione a Turma</option>
                                        @foreach ($turmas as $turma)
                                            <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit"class="btn-salvar">Salvar</button>
                                </form>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        @endforeach
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
