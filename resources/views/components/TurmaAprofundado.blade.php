<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrados</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .same-size-img {
      width: 50px; /* Ajuste o tamanho da imagem conforme necessário */
      height: 50px; /* Ajuste o tamanho da imagem conforme necessário */
      border-radius: 50%; /* Para tornar a imagem redonda */
    }
    .full-width-line {
      margin-top: 15px;
      margin-bottom: 15px;
      border: 0;
      border-top: 1px solid #eee;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1 class="display-5">Turma</h1>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <form class="input-group custom-search-form">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
            </form>
            <hr class="full-width-line">
            <div class="centered-names" id="user-list">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="mr-3 same-size-img">
                  <p class="p">Usuário 1</p>
                </div>
                <div>
                  <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                    <option value="" selected disabled hidden>Selecione</option>
                    <option value="admin">1°Ano</option>
                    <option value="prof">2°Ano</option>
                    <option value="user">Remover</option>
                  </select>
                  <button type="button" onclick="alert('Salvando...')">Salvar</button>
                </div>
              </div>
              <hr class="full-width-line">
            <div class="centered-names" id="user-list">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="mr-3 same-size-img">
                  <p class="p">Usuário 1</p>
                </div>
                <div>
                  <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                    <option value="" selected disabled hidden>Selecione</option>
                    <option value="admin">1°Ano</option>
                    <option value="prof">2°Ano</option>
                    <option value="user">Remover</option>
                  </select>
                  <button type="button" onclick="alert('Salvando...')">Salvar</button>
                </div>
              </div>
                 
                  
              <hr class="full-width-line">
              <!-- Repetir conforme necessário para mais usuários -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5"></div>
  <div class="d-flex justify-content-center">
    <!-- Paginação (apenas visual, sem funcionalidade real) -->
    <nav aria-label="Pagination">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
      </ul>
    </nav>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#search').on('keyup', function() {
        var query = $(this).val().toLowerCase();
        $('#user-list .d-flex').each(function() {
          var text = $(this).text().toLowerCase();
          if (text.indexOf(query) === -1) {
            $(this).hide();
          } else {
            $(this).show();
          }
        });
      });
    });
  </script>
</body>
</html>
