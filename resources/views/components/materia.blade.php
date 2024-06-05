
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

    .materias {
      list-style-type: none;
      padding: 0;
    }

    .materia {
      padding: 15px;
      border-bottom: 1px solid #ccc;
    }

    .btn-adicionar {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 18px;
      background-color: #17A2B7;
      color: #fff;
      border: none;
      border-radius: 50px;
      cursor: pointer;
    }

    .btn-adicionar:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<br><h1 class="titulo">
      Matérias
      <a href="addMateria" class="btn btn-adicionar">+</a>

    </h1>
    <div class="container">
  <ul class="materias">
    <li class="materia">
      <a href="materia">
        <h3>Matemática</h3>
        <p>1° Ensino Médio</p>
      </a> 
    </li>
  </ul>
</div>
<div class="container">
  <ul class="materias">
    <li class="materia">
      <a href="link-para-o-destino">
        <h3>Quimica</h3>
        <p>1° Ensino Médio</p>
      </a>
    </li>
  </ul>
</div>
<div class="container">
  <ul class="materias">
    <li class="materia">
      <a href="link-para-o-destino">
        <h3>Fisica</h3>
        <p>1° Ensino Médio</p>
      </a>
    </li>
  </ul>
</div>

  <!-- Adicionando Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function adicionarMateria() {
      alert("Função para adicionar matéria aqui!");
      // Implemente aqui a lógica para adicionar novas matérias
    }
  </script>
</body>

