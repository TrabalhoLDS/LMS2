<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <a class="navbar-brand" href="home">
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
                <a class="nav-link" href="viewAlunoTurma">Vincular Alunos</a>
            </li>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="viewTurma">Associar Turma</a>
            </li>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="addTurma">Adicionar Turma</a>
            </li>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
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
