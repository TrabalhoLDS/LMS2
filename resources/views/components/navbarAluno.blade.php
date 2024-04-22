<!-- Navbar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
<nav class="navbar navbar-expand-sm bg-info navbar-dark">
    <a class="navbar-brand" href="#">
        
        <img src="{{ asset('img/logotipoo.png') }}" alt="Logotipo" width="60" height="60">
        <!-- Ícone de notificação -->
        
    </a>
    <div class="d-flex align-items-center">
    <button class="navbar-alerta">
            <i class="fas fa-bell ml-3"></i>
        </button>

        <!-- Botão de hambúrguer -->
        <button class="navbar-alerta" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="add">ADM</a>
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