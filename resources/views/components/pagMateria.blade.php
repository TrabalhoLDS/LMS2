<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matemática</title>
  <!-- Adicionando Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Adicionando FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
    }

    .titulo {
      margin-bottom: 20px;
      text-align: center;
      font-size: 2rem;
      color: #333;
    }

    .icone-matematica {
      margin-right: 10px; /* Espaçamento entre o ícone e o texto */
      color: red;
    }

    .item {
      background-color: #fff;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .titulo-secao {
      margin-bottom: 15px;
      font-size: 1.3rem;
      color: #333;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .titulo-secao a {
      text-decoration: none;
      color: #333;
      transition: color 0.3s;
    }

    .titulo-secao a:hover {
      color: #0056b3;
    }

    .btn-primary {
      background-color: #17A2B7;
      border: none;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    ul li:hover {
      background-color: #e2e2e2;
    }

    .btn-voltar {
      background-color: #17A2B7;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      display: block;
      margin: 20px 0;
      text-decoration: none;
    }

    .btn-voltar:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="titulo">
      <i class="fas fa-calculator icone-matematica"></i>{{ $turma->nome }}
    </h1>

    <!-- Formulário para adicionar conteúdo -->
    <div class="item">
      <h3 class="titulo-secao">
        <a href="{{ route('addAula', ['turma_id' => $turma->id]) }}">
          <i class="fas fa-plus-circle"></i> Adicionar Aula
        </a>
      </h3>
    </div>

    <div class="item">
      <h3 class="titulo-secao">
        <a href="{{ route('addAtividade', ['turma_id' => $turma->id]) }}">
          <i class="fas fa-plus-circle"></i> Adicionar Atividade
        </a>
      </h3>
    </div>

    <div class="item">
      <h3 class="titulo-secao">
        <a href="{{ route('addQuestionario', ['turma_id' => $turma->id]) }}">
          <i class="fas fa-plus-circle"></i> Adicionar Questionário
        </a>
      </h3>
    </div>

    <div class="item">
      <h3 class="titulo-secao">
        <a href="{{ route('boletim', ['turma_id' => $turma->id]) }}">
          <i class="fas fa-award"></i> Boletim
        </a>
      </h3>
    </div>

    <div class="item">
      <h3 class="titulo-secao">Aulas e/ou atividades Adicionadas</h3>
      <ul>
        <li><a href=""><i class="fas fa-book-open"></i> Atividade 1</a></li>
        <li><a href=""><i class="fas fa-book-open"></i> Aula 2</a></li>
        <li><a href=""><i class="fas fa-book-open"></i> Atividade 2</a></li>
        <!-- Adicione mais itens conforme necessário -->
      </ul>
    </div>

    <!-- Botão de Voltar -->
    <a href="{{ route('home') }}" class="btn-voltar"><i class="fas fa-arrow-left"></i> Voltar</a>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
