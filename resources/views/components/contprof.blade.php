<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Turmas</title>
  <!-- Adicionando Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Adicionando Font Awesome para os ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 0px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .turmas {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .turma {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      margin-bottom: 10px;
      background-color: #f1f1f1;
      border-radius: 5px;
      text-decoration: none;
      color: #333;
      transition: background-color 0.3s;
    }

    .turma:hover {
      background-color: #e2e2e2;
    }

    .icones i {
      margin-left: 15px;
      color: #666;
      transition: color 0.3s;
    }

    .icones i:hover {
      color: #000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Turmas</h2>
    <ul class="turmas">
      <li>
        <a href="materia" class="turma">
          1º Ensino Médio
          <span class="icones">
            <i class="fas fa-chart-bar"></i> <!-- Ícone de estatísticas -->
            <i class="fas fa-edit"></i> <!-- Ícone de editar -->
            <i class="fas fa-eye"></i> <!-- Ícone de visualizar -->
          </span>
        </a>
      </li>
      <li>
        <a href="materia" class="turma">
          2º Ensino Médio
          <span class="icones">
            <i class="fas fa-chart-bar"></i> <!-- Ícone de estatísticas -->
            <i class="fas fa-edit"></i> <!-- Ícone de editar -->
            <i class="fas fa-eye"></i> <!-- Ícone de visualizar -->
          </span>
        </a>
      </li>
      <!-- Outras turmas -->
    </ul>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Adicionando Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
