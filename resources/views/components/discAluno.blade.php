<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades e Aulas da Turma</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/aluno.css') }}">
    <style>
        .display-9 {
            font-size: 1.5rem;
            font-weight: 500;
        }
        .list-group-item {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 10px;
        }
        .section-title {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Seção de Atividades -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="display-9 section-title">Atividades da Turma</h5>
                        <ul class="list-group">
                            @forelse ($atividades as $atividade)
                                <li class="list-group-item">
                                    <a href="{{ route('atividades.show', $atividade->id) }}">
                                        <strong>{{ $atividade->nome }}</strong>
                                    </a>
                                    <p>{{ $atividade->descricao }}</p>
                                </li>
                            @empty
                                <li class="list-group-item">
                                    Não há atividades para esta turma.
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <!-- Seção de Aulas -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="display-9 section-title">Aulas da Turma</h5>
                        <ul class="list-group">
                            @forelse ($aulas as $aula)
                                <li class="list-group-item">
                                    <a href="#">
                                        <strong>{{ $aula->titulo }}</strong>
                                    </a>
                                    <p>{{ $aula->descricao }}</p>
                                </li>
                            @empty
                                <li class="list-group-item">
                                    Não há aulas para esta turma.
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
