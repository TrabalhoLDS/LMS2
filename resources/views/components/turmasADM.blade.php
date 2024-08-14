<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas Criadas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
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

        .btn-editar, .btn-excluir {
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            transition: background-color 0.3s ease;
        }

        .btn-editar {
            background-color: #007bff;
            margin-right: 5px;
        }

        .btn-editar:hover {
            background-color: #0056b3;
        }

        .btn-excluir {
            background-color: #dc3545;
        }

        .btn-excluir:hover {
            background-color: #c82333;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 16px;
            box-sizing: border-box;
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
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .turma-link p {
            margin: 0;
            font-weight: bold;
            color: #007bff;
        }

        .turma-link p:hover {
            text-decoration: underline;
        }

        .p {
            margin: 5px 0;
            font-size: 14px;
        }

        .button-container {
            margin-top: 10px;
            display: flex;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Turmas Criadas</h1>

    <div class="card">
        <form class="input-group custom-search-form">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
            </div>
            <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
        </form>
        <hr class="full-width-line">
        
        <div id="class-list">
            <!-- Exemplo de turmas -->
            <div class="card">
                <div class="d-flex">
                    <div>
                        <a href="detalhes_turma" class="turma-link">
                            <p>Turma 1: Nome da Turma</p>
                        </a>
                        <p class="p">Descrição breve</p>
                    </div>
                    <div class="button-container">
                        <a href="editar_turma.html?id=1" class="btn-editar">Editar</a>
                        <a href="excluir_turma.html?id=1" class="btn-excluir">Excluir</a>
                    </div>
                </div>
            </div>

            <hr class="full-width-line">

            <!-- Exemplo de turmas -->
            <div class="card">
                <div class="d-flex">
                    <div>
                        <a href="detalhes_turma" class="turma-link">
                            <p>Turma 2: [20241.5.GRU.TCN.ADS.2008-V2.1N.SUP.03187 (GNED5) 344379] Gestão de Negócios</p>
                        </a>
                        <p class="p">Descrição breve</p>
                    </div>
                    <div class="button-container">
                        <a href="editar_turma.html?id=2" class="btn-editar">Editar</a>
                        <a href="excluir_turma.html?id=2" class="btn-excluir">Excluir</a>
                    </div>
                </div>
            </div>

            <!-- Adicione mais turmas aqui -->
        </div>
    </div>
</div>

</body>
</html>
