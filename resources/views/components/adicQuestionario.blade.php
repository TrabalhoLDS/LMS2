<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Questionário</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #17A2B7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: block;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .question-group {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .add-question-button {
            background-color: #28a745;
        }

        .remove-question-button {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Adicionar Questionário</h2>

    <!-- Esta seção exibe mensagens de status e erro -->
    @if (session('status'))
            <div id="statusMessage" class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div id="errorMessage" class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
                    </div>
                    <!-- Botão de Voltar -->
                    <a href="../home" class="btn-voltar"><i class="fas fa-arrow-left"></i><- Voltar</a>

                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('questionarios.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nome">Título do Questionário:</label>
                                        <input type="text" class="form-control" id="nome" name="titulo" required>
                                    </div>
                                    <div id="questions-container">
                                        <div class="form-group">
                                            <label for="descricao">Descrição do Questionário:</label>
                                            <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
                                        </div>
                                        <div id="questions-container">
                                            <div class="question-group">
                                                <div class="form-group">
                                                    <label for="questao_1">Questão 1:</label>
                                                    <textarea class="form-control" id="questao_1" name="questoes[1][texto]" rows="2" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="imagem_1">Imagem (opcional):</label>
                                                    <input type="file" class="form-control-file" id="imagem_1" name="questoes[1][imagem]">
                                                </div>
                                                <div class="form-group">
                                                    <label for="opcoes_1">Opções:</label>
                                                    <input type="text" class="form-control" id="opcao_1_1" name="questoes[1][opcoes][]" placeholder="Opção 1" required>
                                                    <input type="text" class="form-control" id="opcao_1_2" name="questoes[1][opcoes][]" placeholder="Opção 2" required>
                                                    <input type="text" class="form-control" id="opcao_1_3" name="questoes[1][opcoes][]" placeholder="Opção 3" required>
                                                    <input type="text" class="form-control" id="opcao_1_4" name="questoes[1][opcoes][]" placeholder="Opção 4" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="correta_1">Resposta Correta:</label>
                                                    <select class="form-control" id="correta_1" name="questoes[1][correta]" required>
                                                        <option value="0">Opção 1</option>
                                                        <option value="1">Opção 2</option>
                                                        <option value="2">Opção 3</option>
                                                        <option value="3">Opção 4</option>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn remove-question-button" onclick="removeQuestion(this)">Remover Questão</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn add-question-button" onclick="addQuestion()">Adicionar Questão</button>
                                    <button type="submit" class="btn btn-primary">Salvar Questionário</button>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let questionCount = 1;

        function addQuestion() {
            questionCount++;
            const questionGroup = document.createElement('div');
            questionGroup.className = 'question-group';
            questionGroup.innerHTML = `
            <div class="form-group">
                <label for="questao_${questionCount}">Questão ${questionCount}:</label>
                <textarea class="form-control" id="questao_${questionCount}" name="questoes[${questionCount}][texto]" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagem_${questionCount}">Imagem (opcional):</label>
                <input type="file" class="form-control-file" id="imagem_${questionCount}" name="questoes[${questionCount}][imagem]">
            </div>
            <div class="form-group">
                <label for="opcoes_${questionCount}">Opções:</label>
                <input type="text" class="form-control" id="opcao_${questionCount}_1" name="questoes[${questionCount}][opcoes][]" placeholder="Opção 1" required>
                <input type="text" class="form-control" id="opcao_${questionCount}_2" name="questoes[${questionCount}][opcoes][]" placeholder="Opção 2" required>
                <input type="text" class="form-control" id="opcao_${questionCount}_3" name="questoes[${questionCount}][opcoes][]" placeholder="Opção 3" required>
                <input type="text" class="form-control" id="opcao_${questionCount}_4" name="questoes[${questionCount}][opcoes][]" placeholder="Opção 4" required>
            </div>
            <div class="form-group">
                <label for="correta_${questionCount}">Resposta Correta:</label>
                <select class="form-control" id="correta_${questionCount}" name="questoes[${questionCount}][correta]" required>
                    <option value="0">Opção 1</option>
                    <option value="1">Opção 2</option>
                    <option value="2">Opção 3</option>
                    <option value="3">Opção 4</option>
                </select>
            </div>
            <button type="button" class="btn remove-question-button" onclick="removeQuestion(this)">Remover Questão</button>
        `;
            document.getElementById('questions-container').appendChild(questionGroup);
        }

        function removeQuestion(button) {
            button.parentElement.remove();
        }
    </script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleciona as mensagens pelo ID
        var statusMessage = document.getElementById('statusMessage');
        var errorMessage = document.getElementById('errorMessage');

        // Verifica se as mensagens existem e define um timer para ocultá-las
        if (statusMessage) {
            setTimeout(function() {
                statusMessage.style.display = 'none';
            }, 3000); // 3000ms = 3 segundos
        }

        if (errorMessage) {
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 3000); // 3000ms = 3 segundos
        }
    });
</script>


</body>

</html>
