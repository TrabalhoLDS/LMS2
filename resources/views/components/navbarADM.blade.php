<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <a class="navbar-brand" href="home">
        <img src="{{ asset('img/logotipoo.png') }}" alt="Logotipo" width="60" height="60">
        <!-- Ícone de notificação -->

    </a>

    <style>
    .custom-logout-button {
        border-radius: 20px; /* Ajuste este valor para controlar o arredondamento */
        background-color: transparent;
        border: none;
        color: red; /* Cor do texto */
        padding: 10px 20px; /* Ajuste o espaçamento interno conforme necessário */
        cursor: pointer;
        font-size: 16px; /* Ajuste o tamanho do texto conforme necessário */
    }

    .custom-button {
        border-radius: 20px; /* Ajuste este valor para controlar o arredondamento */
        background-color: transparent;
        border: none;
        color: white; /* Cor do texto */
        padding: 10px 20px; /* Ajuste o espaçamento interno conforme necessário */
        cursor: pointer;
        font-size: 16px; /* Ajuste o tamanho do texto conforme necessário */
        
    }

    .custom-logout-button:hover {
        background-color: rgba(255, 0, 0, 0.1); /* Leve fundo vermelho ao passar o mouse */
    }

    .custom-button:hover {
        background-color: rgba(255, 0, 0, 0.1); /* Leve fundo vermelho ao passar o mouse */
    }
</style>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="custom-button" href="home">Inicio</a>
            </li>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="custom-button" href="viewAlunoTurma">Vincular Alunos</a>
            </li>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="custom-button" href="viewTurma">Associar Turma</a>
            </li>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="custom-button" href="addTurma">Adicionar Turma</a>
            </li>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <!-- Formulário de logout -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button type="submit" class="custom-logout-button" @click.prevent="$root.submit();">
                    {{ __('Sair') }}
                </button>
            </form>
        </li>
    </ul>
</div>

</nav>
