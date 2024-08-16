<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincular Alunos a Turma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 15px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-salvar {
            background-color: #4CAF50; /* Verde */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
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

        .full-width-line {
            border: 1px solid #ddd;
            margin: 15px 0;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .align-items-center {
            align-items: center;
        }

        .p {
            margin: 5px 0;
            font-size: 14px;
        }

        .same-size-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .button-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1>Vincular Alunos a Turma</h1>
            
        </div>
    </div>

       

    <div class="card">
        <div class="card-body">
            <div class="full-width-line"></div>
            <div id="user-list">
                @foreach($alunos as $aluno)
                <div class="card">
                    <div class="d-flex align-items-center">
                        <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="same-size-img mr-3">
                        <div class="flex-grow-1">
                            <p class="p">{{ $aluno->name }}</p>
                        </div>
                        <form id="TurmaAluno{{ $aluno->id }}" action="{{ route('vincularTurmaAluno') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $aluno->id }}">
                            <select class="form-control" id="turma_id" name="turma_id">
                                <option value="" selected disabled hidden>Selecione a Turma</option>
                                @foreach ($turmas as $turma)
                                    <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn-salvar">Salvar</button>
                        </form>
                    </div>
                    <hr class="full-width-line">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@if (session('error'))
            <div id="errorMessage" class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div id="successMessage" class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleciona as mensagens pelo ID
        var errorMessage = document.getElementById('errorMessage');
        var successMessage = document.getElementById('successMessage');

        // Verifica se as mensagens existem e define um timer para ocultá-las
        if (errorMessage) {
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 3000); // 3000ms = 3 segundos
        }

        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 3000); // 3000ms = 3 segundos
        }
    });
</script>

</body>
</html>
