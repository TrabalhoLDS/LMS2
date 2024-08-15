<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Turma</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 15px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .group {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .group h3 {
            margin: 0 0 10px 0;
        }

        .group p {
            margin: 5px 0;
        }

        .back-button {
            background-color: #17A2B7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            display: inline-block;
            margin-bottom: 20px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .no-data {
            text-align: center;
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Professores e Alunos da Turma</h2>
                </div>
                <a href="../turmascriadas" class="back-button"><- Voltar</a>
                <div class="card-body">
                    <!-- Professores da Turma -->
                    <div class="group">
                        <h3>Professor</h3>
                        <ul>
                            <li>Professor 1: Nome do Professor</li>                          
                            <!-- Adicione mais professores conforme necessário -->
                        </ul>
                    </div>

                    <!-- Alunos da Turma -->
                    <div class="group">
                        <h3>Alunos</h3>
                        <ul>
                            <li>Aluno 1: Nome do Aluno</li>
                            <li>Aluno 2: Nome do Aluno</li>
                            <!-- Adicione mais alunos conforme necessário -->
                        </ul>
                    </div>

                    <!-- Caso não existam professores ou alunos -->
                    <div class="no-data">Nenhum professor ou aluno adicionado até o momento.</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
