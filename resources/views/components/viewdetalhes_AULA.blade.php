<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Aula</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 15px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .btn-editar {
            background-color: #007bff;
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

        .btn-editar:hover {
            background-color: #0056b3;
        }

        .details {
            margin-bottom: 20px;
        }

        .details p {
            margin: 10px 0;
            font-size: 16px;
        }

        .details .label {
            font-weight: bold;
            color: #333;
        }

        .details .value {
            margin-left: 10px;
            color: #555;
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

        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1>Aula 1: Título da Aula</h1>
        </div>
    </div>

    <!-- Mensagens de sucesso ou erro -->
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

    <div class="card">
        <div class="card-body">
            <div class="details">
                <p><span class="label">Descrição:</span><span class="value">Descrição detalhada da aula. Esta seção deve fornecer uma visão geral completa do conteúdo abordado na aula, como os principais tópicos, metodologias de ensino e quaisquer informações relevantes sobre o que os alunos irão aprender.</span></p>

                <p><span class="label">Objetivos:</span><span class="value">- Objetivo 1: Descrição do primeiro objetivo da aula.<br>- Objetivo 2: Descrição do segundo objetivo da aula.<br>- Objetivo 3: Descrição do terceiro objetivo da aula.</span></p>

                <p><span class="label">Data:</span><span class="value">10/08/2024</span></p>

                <p><span class="label">Duração:</span><span class="value">2 horas</span></p>

                <p><span class="label">Instrutor:</span><span class="value">Nome do instrutor responsável pela aula.</span></p>
            </div>
            <a href="editar_aula.html" class="btn-editar">Editar</a>
        </div>
    </div>
</div>

</body>
</html>
