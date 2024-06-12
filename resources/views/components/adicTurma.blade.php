<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Turma</title>
  <!-- Adicionando Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
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
            text-align: center;
        }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-adicionar {
      background-color: #17A2B7;
      color: #fff;
      display: block;
      margin: 0 auto;
    }

    .btn-adicionar:hover {
      background-color: #0056b3;
    }

    

  </style>
</head>
<body><br>
<h2 class="titulo">Adicionar Turma</h2>
  <div class="container">
    <!-- esta sendo enviado para o contoller admin na função store -->
    <form  id="formAtualizarUsuario" action="{{route('admin.store')}}" method="POST">
      <!-- somente para encriptografia e segurança dos dados do formulário -->
        @csrf
      <div class="form-group">
        <label for="nomeTurma">Nome:</label>
        <input type="text" class="form-control" id="nomeTurma" name="name" placeholder="Digite o nome da matéria">
      </div>
      <button type="submit" class="btn btn-adicionar">Adicionar</button>
    </form>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
