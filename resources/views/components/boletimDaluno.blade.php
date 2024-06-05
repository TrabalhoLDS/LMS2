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
      background-color: #fff;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
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
      color: red;
    }

    .aluno {
      padding: 10px;
      background-color: #f1f1f1;
      margin-bottom: 10px;
      border-radius: 5px;
      transition: background-color 0.3s;
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #333;
    }

    .aluno:hover {
      background-color: #e2e2e2;
    }

    .aluno i {
      margin-right: 10px;
      color: #333;
    }

    .btn-voltar {
      background-color: #17A2B7;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-voltar:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1 class="titulo">
        <i class="fas fa-award icone-boletim"></i>Boletim
      </h1>
      <!-- Botão de Voltar -->
      <button class="btn-voltar" onclick="history.back()"><i class="fas fa-arrow-left"></i> Voltar</button>
    </div>

    <!-- Lista de alunos -->
    <div class="item">
      <h3 class="titulo-secao">Lista de Alunos</h3>
      <ul>
        <li><a href="notas" class="aluno"><i class="fas fa-user"></i> Aluno 1</a></li>
        <li><a href="notas.html?aluno=2" class="aluno"><i class="fas fa-user"></i> Aluno 2</a></li>
        <li><a href="notas.html?aluno=3" class="aluno"><i class="fas fa-user"></i> Aluno 3</a></li>
        <!-- Adicione mais alunos conforme necessário -->
      </ul>
    </div>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Adicionando Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
