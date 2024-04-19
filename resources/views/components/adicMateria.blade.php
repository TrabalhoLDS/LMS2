<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Matéria</title>
  <!-- Adicionando Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 340px;
      margin: 5px auto;
      padding: 10px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .titulo {
        font-size: 25px;
      color: #333;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-adicionar {
      background-color: #17A2B7;
      color: #fff;
    }

    .btn-adicionar:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body><br>
<h2 class="titulo">Adicionar Matéria</h2>
  <div class="container">
    
    <form>
      <div class="form-group">
        <label for="nomeMateria">Nome da Matéria:</label>
        <input type="text" class="form-control" id="nomeMateria" placeholder="Digite o nome da matéria">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" rows="3" placeholder="Descreva a matéria"></textarea>
      </div>
      <button type="submit" class="btn btn-adicionar">Adicionar Matéria</button>
    </form>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
