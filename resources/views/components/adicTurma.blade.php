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
<h2 class="titulo"> Adicionar Turma</h2>

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


  <div class="container">
    <!-- esta sendo enviado para o contoller admin na função store -->
    <form id="formAtualizarUsuario" action="{{route('admin.store')}}" method="POST">
      <!-- somente para encriptografia e segurança dos dados do formulário -->
      @csrf
      <div class="form-group">
        <label for="nomeTurma">Nome da turma:</label>
        <input type="text" class="form-control" id="nomeTurma" name="nome" placeholder="Digite o nome da turma">
      </div>
      <button type="submit" class="btn btn-adicionar">Adicionar</button>
    </form>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
