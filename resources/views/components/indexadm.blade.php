<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>

<body>
    <style>
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
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logotipoo.png') }}" alt="Logotipo" width="60" height="60">

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

    <!-- Título -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-5">Cadastrados</h1>
            </div>
        </div>
    </div>

    <!-- Barra de pesquisa -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="input-group custom-search-form">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Pesquisar...">
                        </form>
                        <!-- Nomes, imagens e botões dropdown dentro da moldura -->
                        <hr class="full-width-line">
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="mr-3 same-size-img">
                                    <p class="p">Bruno Santos</p>
                                </div>
                                <div>
                                    <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                                        <option value="" selected disabled hidden>Selecione</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Professor</option>
                                        <option value="3">Aluno</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="./img/Foto_Flores.jpg" id="Imagem Flores" class="mr-3 same-size-img">
                                    <p class="p">Flores Silva Dias</p>
                                </div>
                                <div>
                                    <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                                        <option value="" selected disabled hidden>Selecione</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Professor</option>
                                        <option value="3">Aluno</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="./img/Foto_Fernanda.jpg" id="Imagem Fernanda" class="mr-3 same-size-img">
                                    <p class="p">Fernanda Dantas</p>
                                </div>
                                <div>
                                    <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                                        <option value="" selected disabled hidden>Selecione</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Professor</option>
                                        <option value="3">Aluno</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <!-- Aqui você pode adicionar mais conteúdo conforme necessário -->
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
