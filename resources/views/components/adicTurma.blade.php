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
<h2 class="titulo"> Adicionar Turmas</h2>
  <div class="container">
    <!-- esta sendo enviado para o contoller admin na função store -->
    <form id="formAtualizarUsuario" action="{{route('admin.store')}}" method="POST">
      <!-- somente para encriptografia e segurança dos dados do formulário -->
      @csrf
      <div class="form-group">
        <label for="nomeTurma">Nome da turma:</label>
        <input type="text" class="form-control" id="nomeTurma" name="name" placeholder="Digite o nome da turma">
      </div>
      <div class="form-group form-inline">
        <label for="nivelUsuario" class="mr-2">Selecionar Professor:</label>
        <select class="form-control" id="nivelUsuario" name="nivelUsuario">
          <option value="" selected disabled hidden>Selecione</option>
          <option value="admin">Administrador</option>
          <option value="prof">Professor</option>
          <option value="user">Aluno</option>
        </select>
      </div>
      <div class="form-group form-inline">
        <label for="nivelMateria" class="mr-2">Selecionar Matéria:</label>
        <select class="form-control" id="nivelMateria" name="nivelMateria">
          <option value="" selected disabled hidden>Selecione</option>
          <option value="matematica">Matemática</option>
          <option value="portugues">Português</option>
          <option value="historia">História</option>
        </select>
      </div>
      <button type="submit" class="btn btn-adicionar">Adicionar</button>
    </form>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
