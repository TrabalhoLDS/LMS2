<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
    <!-- Adicionando Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Adicionando FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Cor de fundo alterada para um tom mais suave */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto; /* Centraliza o container na página */
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .titulo {
            font-size: 2rem;
            color: #333;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .icone-boletim {
            margin-right: 10px;
            color: #e74c3c; /* Cor do ícone alterada para vermelho */
        }

        .aluno {
            padding: 10px;
            background-color: #f1f1f1;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: block; /* Ajustado para melhorar a estrutura da lista */
            text-decoration: none;
            color: #333;
        }

        .aluno:hover {
            background-color: #e2e2e2;
        }

        .item .aluno i {
            margin-right: 15px; /* Aumenta o espaço entre o ícone e o texto */
        }

        .btn-voltar {
            background-color: #17a2b8; /* Cor do botão de voltar ajustada */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-voltar:hover {
            background-color: #117a8b; /* Cor de hover ajustada */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1 class="titulo">
            <i class="fas fa-award icone-boletim"></i> Boletim
        </h1>
        <!-- Botão de Voltar -->
        <a href="../home" class="btn-voltar"><i class="fas fa-arrow-left"></i> Voltar</a>
    </div>

    <!-- Lista de alunos -->
    <div class="item">
        <h3 class="titulo-secao">Lista de Alunos</h3>
        <ul style="list-style-type: none; padding: 0;">
            @foreach ($alunos as $aluno)
                <li><a href="notas.html?aluno={{ $aluno->id }}" class="aluno"><i class="fas fa-user" style="margin-right: 15px;"></i> {{ $aluno->name }}</a></li>
            @endforeach
        </ul>
    </div>


</div>

<!-- Adicionando Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Adicionando Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
