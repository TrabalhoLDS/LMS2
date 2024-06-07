<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notas e Insights</title>
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

    .titulo {
      margin-bottom: 20px;
      text-align: center;
      font-size: 2rem;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .titulo i {
      margin-right: 10px;
      color: #;
    }

    .item {
      background-color: #fff;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
      display: flex;
      align-items: center;
    }

    .btn-voltar i {
      margin-right: 5px;
    }

    .btn-voltar:hover {
      background-color: #0056b3;
    }

    .form-group textarea {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      resize: vertical;
    }

    .btn-enviar {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
      display: block;
      margin-top: 10px;
      text-decoration: none;
    }

    .btn-enviar:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1 class="titulo">
        <i class="fas fa-chart-line"></i>Notas e Insights
      </h1>
      <button class="btn-voltar" onclick="history.back()">
        <i class="fas fa-arrow-left"></i> Voltar
      </button>
    </div>
    
    <!-- Informações do aluno -->
    <div class="item">
      <h3 class="titulo-secao">Nome do Aluno</h3>
      <!-- Aqui você pode inserir os detalhes e insights específicos do aluno -->
      <p>Nota 1: 7</p>
      <p>Nota 2: 9</p>
      <p>Nota 3: 8</p>
      <!-- Adicione mais notas e insights conforme necessário -->
    </div>
    
    <div class="item">
      <div class="form-group">
        <label for="feedback">Enviar um feedback:</label>
        <textarea id="feedback" name="descricao" rows="4" required></textarea>
        <button class="btn-enviar"><i class="fas fa-paper-plane"></i> Enviar</button>
      </div>
    </div>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Adicionando Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
