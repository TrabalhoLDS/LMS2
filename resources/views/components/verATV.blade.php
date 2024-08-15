<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Atividades e Aulas</title>
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

        .activity-group,
        .lesson-group {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .activity-group h3,
        .lesson-group h3 {
            margin: 0 0 10px 0;
        }

        .activity-group p,
        .lesson-group p {
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

        .edit-button,
        .delete-button {
            background-color: #17A2B7;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-top: 10px;
            display: inline-block;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            background-color: #dc3545;
            margin-left: 10px;
        }

        .delete-button:hover {
            background-color: #c82333;
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
                    <h2>Minhas Atividades e Aulas</h2>
                </div>
                <a href="../home" class="back-button"><- Voltar</a>
                <div class="card-body">
                    <!-- Exemplo de atividades e aulas -->
                    <div id="activities-lessons-container">
                        <!-- Atividade 1 -->
                        <div class="activity-group">
                        <a href="{{ route('detalhes_ATV', ['turma_id' => $turma->id]) }}" class="turma-link">
                        <h3>Atividade 1: Título da Atividade</h3>
                        </a>                         
                            <p><strong>Descrição:</strong> Descrição detalhada da atividade.</p>
                            <p><strong>Data de Criação:</strong> 10/08/2024</p>
                            <a href="/addAtividade/1" class="edit-button">Editar</a>
                                <button type="submit" class="delete-button">Apagar</button>
                            </form>
                        </div>

                        <!-- Aula 1 -->
                        <div class="lesson-group">
                        <a href="{{ route('detalhes_AULA', ['turma_id' => $turma->id]) }}" class="turma-link">
                        <h3>Aula 1: Título da Aula</h3>
                        </a> 
                            
                            <p><strong>Descrição:</strong> Descrição detalhada da aula.</p>
                            <p><strong>Data de Criação:</strong> 09/08/2024</p>
                            <a href="/addAula/1" class="edit-button">Editar</a>
                            
                                <button type="submit" class="delete-button">Apagar</button>
                            </form>
                        </div>

                        <!-- Caso não existam atividades ou aulas -->
                        <div class="no-data">Nenhuma atividade ou aula adicionada até o momento.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
