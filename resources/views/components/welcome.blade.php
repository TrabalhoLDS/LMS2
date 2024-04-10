<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LDS</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="./css/index_aluno.css" rel="stylesheet">

</head>

<body>
    <style>.custom-search-form {
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
.dropdown-button {
    margin-left: auto;  /* Aligns button to the right within .centered-names */
  }
  
  .centered-names .btn {
    margin-left: auto;
  }

  .dropdown-frame {
    display: flex;
    align-items: center;  /* Aligns items vertically within the frame */
    height: 40px;
  }

  .blue-icon {
    color: blue;
    font-size: 32px; /* Ajuste o tamanho conforme necessário */
}
.pink-icon {
    color: pink;
    font-size: 32px;
}
.green-icon{
    color: green;
    font-size: 32px;
}

.smaller-text {
    font-size: 14px; /* Reduzindo o tamanho da fonte para 14px */
    margin-top: 5px; /* Ajustando o espaçamento superior */
    margin-bottom: 5px; /* Ajustando o espaçamento inferior */
}</style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logotipoo.png') }}" alt="Logotipo" width="60" height="60">
        <!-- Ícone de notificação -->
        <i class="fas fa-bell ml-3"></i>
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


    <!-- Título -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-left">
                <h3 class="display-9">Seja bem vindo ...</h3>
            </div>
        </div>
    </div>

    <!-- Mural de Atividades -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <!-- Primeiro quadro -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group-prepend">
                            <div class="col-md-8 text-center d-flex justify-content-center align-items-center">
                                <h5 class="display-9">Mural de Atividades</h5>
                            </div>
                        </div>
                        <!-- Nomes e ícones dos materiais dentro da moldura -->
                        <hr class="full-width-line">
                    <p class="p mt-2 smaller-text">Entrega: 10/04/2024</p> <!-- Adicionada a classe "smaller-text" -->
                    <div class="centered-names">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-calculator mr-3 blue-icon"></i>
                                <p class="p">Trigonometria</p>
                                </div>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        <p class="p mt-2">Entrega: 10/04/2024</p>
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-flask mr-3 pink-icon"></i> <!-- Ícone representando Química Orgânica -->
                                    <p class="p">Química Orgânica</p>
                                </div>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        <p class="p mt-2">Entrega: 10/04/2024</p>
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-atom mr-3 green-icon"></i> <!-- Ícone representando Óptica -->
                                    <p class="p">Óptica</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segundo quadro -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group-prepend">
                            <div class="col-md-8 text-center d-flex justify-content-center align-items-center">
                                <h5 class="display-9">Diciplinas</h5>
                            </div>
                        </div>
                        <!-- Nomes e ícones dos materiais dentro da moldura -->
                        <hr class="full-width-line">
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calculator mr-3 blue-icon"></i> <!-- Ícone representando Literatura -->
                                    <p class="p">Matemática</p>
                                </div>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-flask mr-3 pink-icon"></i> <!-- Ícone representando História -->
                                    <p class="p">Química</p>
                                </div>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        <div class="centered-names">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-atom mr-3 green-icon"></i> <!-- Ícone representando Linguagem -->
                                    <p class="p">Física</p>
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