<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- Adicionando FontAwesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
<style>
    .container {
      max-width: 800px;
      margin: auto;
    }

    .titulo {
      margin-bottom: 20px;
      text-align: center;
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
  font-size: 1.2rem; 
 float: center; /* Altere o valor conforme desejado */
}

    .btn-primary{
        background-color: #17A2B7;
        float: right;
    }

  </style>
</head>
<body>
<br><h1 class="titulo">
<i class="fas fa-calculator icone-matematica"></i>Matemática</h1>
  <div class="container">
    <!-- Formulário para adicionar conteúdo -->
    <div class="item">
      <h3 class="titulo-secao">Adicionar Conteúdo<button type="submit" class="btn btn-primary">+</button></h3>
      
    </div>

    <!-- Formulário para adicionar atividade -->
    <div class="item">
    <h3 class="titulo-secao">Adicionar Atividade<button type="submit" class="btn btn-primary">+</button></h3>
      
    </div>

    <!-- Lista de atividades adicionadas -->
    <div class="item">
      <h3 class="titulo-secao">Atividades Adicionadas</h3>
      <ul>
        <li>Atividade 1</li>
        <li>Atividade 2</li>
        <li>Atividade 3</li>
      </ul>
    </div>
  </div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
