<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas Criadas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .btn-editar {
            background-color: #007bff; /* Azul */
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

        .btn-editar:hover {
            background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
        }

        .btn-excluir {
            background-color: #dc3545; /* Vermelho */
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

        .btn-excluir:hover {
            background-color: #c82333; /* Vermelho mais escuro ao passar o mouse */
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

        .full-width-line {
            border: 1px solid #ddd;
            margin: 10px 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 15px;
        }

        .p {
            margin: 0;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
        }

        .card-body {
            padding: 15px;
        }

        .d-flex {
            display: flex;
            align-items: center;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .justify-content-center {
            justify-content: center;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-5">Turmas</h1>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form class="input-group custom-search-form">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
                        </form>
                        <hr class="full-width-line">
                        <div id="class-list">
                            <!-- Loop para exibir as turmas -->
                            @foreach($turmas as $turma)
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <p class="p">Turma {{ $turma->id }}: {{ $turma->nome }}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="p">Professores:
                                            @if($turma->professores->isNotEmpty())
                                            @foreach($turma->professores as $professor)
                                            {{ $professor->name }}{{ !$loop->last ? ', ' : '' }}
                                        @endforeach
                                            @else
                                                Nenhum professor atribuído
                                            @endif
                                        </p>
                                    </div>
                                    <div>
                                        <a href="{{ url('editar_turma.html?id=' . $turma->id) }}" class="btn-editar">Editar</a>
                                        <a href="{{ url('excluir_turma.html?id=' . $turma->id) }}" class="btn-excluir">Excluir</a>
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

</body>
</html>
