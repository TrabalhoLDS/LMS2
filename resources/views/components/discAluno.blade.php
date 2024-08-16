<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades e Questionários</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/aluno.css') }}">
    <style>
        /* Adicione seu estilo personalizado aqui */
        .display-9 {
            font-size: 1.5rem;
            font-weight: 500;
        }
        .list-group-item {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 10px;
        }
        .centered-names {
            margin: 20px 0;
        }
        .turma {
            text-decoration: none;
            color: #333;
        }
        .turma p {
            margin: 0;
        }
        .icones i {
            margin-left: 10px;
        }
        .full-width-line {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Mural de Atividades e Questionários -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <!-- Primeiro quadro: Atividades -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="display-9 mb-4">Atividades</h5>
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
                                    Não há atividades
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Segundo quadro: Questionários -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="display-9 mb-4">Questionários</h5>
                        <ul class="list-group">
                            @forelse ($questionarios as $questionario)
                                <li class="list-group-item">
                                    <a href="{{ route('questionarios.show', $questionario->id) }}">
                                        <strong>{{ $questionario->titulo }}</strong>
                                    </a>
                                    <p>{{ $questionario->descricao }}</p>
                                </li>
                            @empty
                                <li class="list-group-item">
                                    Não há questionários
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção de Disciplinas -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="display-9 text-center mb-4">Disciplinas</h5>
                        <hr class="full-width-line">
                        <div class="centered-names">
                            @forelse ($turmas as $turma)
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <a href="#" class="turma">
                                        <p>{{ $turma->nome }}</p>
                                        <span class="icones">
                                            <i class="fas fa-chart-bar" title="Estatísticas"></i>
                                            <i class="fas fa-edit" title="Editar"></i>
                                            <i class="fas fa-eye" title="Visualizar"></i>
                                        </span>
                                    </a>
                                </div>
                            @empty
                                <p>Não está matriculado em nenhuma turma.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <!-- Aqui você pode adicionar mais conteúdo conforme necessário -->
    </div>
</body>
</html>
