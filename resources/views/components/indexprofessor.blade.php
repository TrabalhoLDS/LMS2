<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LDS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="./css/index_professor.css" rel="stylesheet">
</head>

<body>
    <style>
        
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  h2 {
    text-align: center;
  }
  
  
  .container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 0; /* Bordas retas */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    min-height: 100vh; /* Altura mínima igual à altura da viewport */
  }
  
  h1 {
    text-align: center;
    color: #333;
  }
  
  .turmas {
    list-style-type: none;
    padding: 0;
  }
  
  .turma {
    padding: 10px;
    color: #666;
    cursor: pointer; /* Cursor de mão ao passar por cima */
    text-decoration: none; /* Remover sublinhado de link */
    display: flex; /* Usar display flex para alinhar os ícones */
    align-items: center; /* Centralizar verticalmente os ícones */
    justify-content: space-between; /* Distribuir o espaço entre o nome e os ícones */
    border-bottom: 1px solid #ccc; /* Adiciona uma linha de separação */
  }
  
  .turma:last-child {
    border-bottom: none; /* Remove a linha de separação do último item */
  }
  
  .turma:hover {
    background-color: #f9f9f9;
  }
  
  /* Estilos para os ícones */
  .icones i {
    margin-left: 10px; /* Espaçamento entre os ícones */
    color: #666; /* Cor dos ícones */
    cursor: pointer; /* Cursor de mão ao passar por cima */
  }
  
  .icones i:hover {
    color: #333; /* Mudança de cor ao passar o mouse */
  }

  .custom-search-form {
    max-width: 500px;
    margin: 0 auto;
}

@media (max-width: 576px) {
    .custom-search-form {
        max-width: 100%;
        padding: 0 15px;
    }
}

.full-width-line {
    margin: 20px -15px;
    border-top: 1px solid #dee2e6;
}

.inner-line {
    margin: 10px 0;
    border-top: 1px solid #dee2e6;
}

.p {
    color: black;
}

/* Estilização para as imagens */
.same-size-img {
    height: 40px; /* Definindo a altura desejada */
    width: 40px;  /* Definindo a largura desejada */
    object-fit: cover; /* Garantindo que a imagem cubra todo o espaço */
}

.centered-names {
    display: flex;
    align-items: center;  /* Aligns items vertically */
    justify-content: space-between;
}
/* Estilização para o botão dropdown */
.dropdown-toggle {
    font-size: 0.8rem;
    padding: 0.2rem 0.5rem;
    margin-top: 0; /* Removendo o espaçamento superior */
}

/* Espaçamento entre o botão e o nome */
.btn-name-spacing {
    margin-right: 10px;
}

.icones {
    float: right; /* Alinha os ícones à direita */
  }
  
  .icones i {
    margin-left: 10px; /* Espaçamento entre os ícones */
    color: #666; /* Cor dos ícones */
    cursor: pointer; /* Cursor de mão ao passar por cima */
  }
  
  .icones i:hover {
    color: #333; /* Mudança de cor ao passar o mouse */
  }

  /* Estilos para a barra de navegação */
.navbar {
  background-color: #17a2b8; /* Cor de fundo da barra de navegação */
}

.navbar-brand img {
  margin-right: 10px; /* Espaçamento à direita do logotipo */
}

.navbar-nav .nav-link {
  color: #fff; /* Cor do texto dos links */
}

/* Estilos para o título da página */
.container h2 {
  margin-top: 20px; /* Espaçamento superior */
  margin-bottom: 20px; /* Espaçamento inferior */
}

/* Estilos para as matérias */
.materias {
  list-style-type: none; /* Remove os marcadores de lista */
  padding-left: 0; /* Remove o recuo padrão da lista */
}

.materia {
  display: block; /* Transforma o link em um elemento de bloco */
  padding: 10px; /* Espaçamento interno */
  background-color: #f8f9fa; /* Cor de fundo */
  margin-bottom: 10px; /* Espaçamento inferior */
  border-radius: 5px; /* Arredonda as bordas */
}

.materia:hover {
  background-color: #e9ecef; /* Altera a cor de fundo ao passar o mouse */
}

.icones {
  float: right; /* Alinha os ícones à direita */
}

.icones i {
  margin-left: 10px; /* Espaçamento entre os ícones */
}

/* Estilos para o botão "Adicionar Matéria" */
.adicionar-materia {
  margin-top: 20px; /* Espaçamento superior */
}

/* Estilos para ícones do Font Awesome */
.fa-chart-bar, .fa-edit, .fa-eye {
  color: #007bff; /* Cor dos ícones */
}

  
    </style>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LDS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="./css/index_professor.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logotipoo.png') }}" alt="Logotipo" width="60" height="60">
        <!-- Ícone de notificação -->
        
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">ADM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.blade.php">Aluno</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iniprof.blade.php">Professor</a>
            </li>
            <li class="nav-item">
                <!-- Formulário de logout -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-dropdown-link href="{{ route('logout') }}"
                                      @click.prevent="$root.submit();">
                        {{ __('Sair') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </div>
</nav>

  <div class="container">
    <h2>Turmas</h2>
    <ul class="turmas">
      <li>
        <a href="turma_a.html" class="turma">
          1 Ensino Médio
          <span class="icones">
            <i class="fas fa-chart-bar"></i> <!-- Ícone de estatísticas -->
            <i class="fas fa-edit"></i> <!-- Ícone de editar -->
            <i class="fas fa-eye"></i> <!-- Ícone de visualizar -->
          </span>
        </a>
      </li>
      <li>
        <a href="turma_a.html" class="turma">
          2 Ensino Médio
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

  <!-- Adicionando jQuery e Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

