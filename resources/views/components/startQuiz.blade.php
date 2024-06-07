<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quimíca Orgânica</title>
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

    .titulo {
      padding: 10px;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .titulo h1 {
      margin: 0;
      font-size: 1.5rem;
      text-align: center;
    }

    .container {
      padding: 20px;
    }

    .card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
    }

    .card h5 {
      margin-bottom: 10px;
      font-size: 1rem;
    }

    .card img {
      max-width: 100%;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .card .options {
      list-style: none;
      padding: 0;
    }

    .card .options li {
      margin-bottom: 10px;
    }

    .botao {
      text-align: center; /* Centraliza o conteúdo dentro da div */
      padding: 15px 0;
      position: flex;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: center; /* Centraliza o botão horizontalmente */
    }

    .botao button {
      background-color: #17A2B7; /* Cor de fundo */
      color: white; /* Cor do texto */
      border: none; /* Sem borda */
      padding: 10px 20px; /* Espaçamento interno */
      border-radius: 5px; /* Bordas arredondadas */
      cursor: pointer; /* Cursor de ponteiro ao passar o mouse */
      font-size: 1rem; /* Tamanho da fonte */
      font-weight: bold; /* Negrito */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra */
      transition: background-color 0.3s, transform 0.3s; /* Transições suaves */
      text-align: center; /* Centraliza o texto dentro do botão */
    }

    .botao button:hover {
      background-color: #1f22a2; /* Cor de fundo ao passar o mouse */
      transform: scale(1.05); /* Aumentar levemente o tamanho */
    }

    .botao button:active {
      background-color: #1a1d82; /* Cor de fundo ao clicar */
      transform: scale(1); /* Redefinir o tamanho */
    }
  </style>
</head>
<body>
  <div class="titulo">
    <h1>Quimíca Orgânica</h1>
  </div>

  <div class="container">
    <!-- Atividade 1 -->
    <div class="card">
      <h5>Atividade 1: <small>Calculando o triângulo retângulo, com suas medidas dadas em centímetros, podemos afirmar que o valor do seno do ângulo &theta; é igual a:</small></h5>
      <img src="triangle1.png" alt="Triângulo Atividade 1">
      <ul class="options">
        <li><input type="radio" name="atividade1" id="opcao1"> <label for="opcao1">A) 4/5</label></li>
        <li><input type="radio" name="atividade1" id="opcao2"> <label for="opcao2">B) 5/4</label></li>
        <li><input type="radio" name="atividade1" id="opcao3"> <label for="opcao3">C) 3/5</label></li>
        <li><input type="radio" name="atividade1" id="opcao4"> <label for="opcao4">D) 5/3</label></li>
      </ul>
    </div>

    <!-- Atividade 2 -->
    <div class="card">
      <h5>Atividade 2: <small>Calculando o triângulo retângulo, com suas medidas dadas em centímetros, podemos afirmar que o valor do seno do ângulo &theta; é igual a:</small></h5>
      <img src="triangle2.png" alt="Triângulo Atividade 2">
      <ul class="options">
        <li><input type="radio" name="atividade2" id="opcao5"> <label for="opcao5">A) 4/5</label></li>
        <li><input type="radio" name="atividade2" id="opcao6"> <label for="opcao6">B) 5/4</label></li>
        <li><input type="radio" name="atividade2" id="opcao7"> <label for="opcao7">C) 3/5</label></li>
        <li><input type="radio" name="atividade2" id="opcao8"> <label for="opcao8">D) 5/3</label></li>
      </ul>
    </div>
  </div>

  <!-- aqui vai ter bd -->
  <div class="botao">
    <button type="button" data-toggle="modal" data-target="#finalizarModal">Finalizar Atividade</button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="finalizarModal" tabindex="-1" aria-labelledby="finalizarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <!-- Classe adicionada para centralizar verticalmente -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="finalizarModalLabel">Confirmação</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Tem certeza de que deseja finalizar a atividade?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Finalizar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Adicionando Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
