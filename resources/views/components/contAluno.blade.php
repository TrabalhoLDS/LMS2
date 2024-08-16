<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/aluno.css') }}">

<!-- o código css foi movido para a pasta publica dentro de css o link de css em perfeito estado
é preferivel estar dentro do cabeçalho a tag 'link'. -->



<!-- Título -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-left">
            <h3 class="display-9">Seja bem-vindo</h3>
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
                        <div class="container mt-4">
                            <div class="row justify-content-center">
                                <div class="col-md-8 mb-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="display-9 mb-4">Mural de Atividades</h5>
                                            <ul class="list-group">
                                                @forelse ($atividades as $atividade)
                                                    <li class="list-group-item">
                                                        <a href="{{ route('atividades.show', $atividade->id) }}">
                                                            <strong>{{ $atividade->nome }}</strong>
                                                        </a>
                                                        <p>{{ $atividade->descricao }}</p>
                                                    </li>
                                                @empty
                                                    <li class="list-group-item">
                                                        Não há atividades
                                                    </li>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                            <h5 class="display-9">Disciplinas</h5>
                        </div>
                    </div>
                    <!-- Nomes e ícones dos materiais dentro da moldura -->
                    <hr class="full-width-line">
                    <div class="centered-names">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                @forelse ($turmas as $turma)
                                    <li>
                                        <a href="{{ route('aluno.disciplinaaluno', ['turma_id'=>$turma->id]) }}" class="turma">
                                            <p>{{ $turma->nome }}</p>
                                            <span class="icones">
                                                <i class="fas fa-chart-bar" title="Estatísticas"></i>
                                                <!-- Ícone de estatísticas -->
                                                <i class="fas fa-edit" title="Editar"></i> <!-- Ícone de editar -->
                                                <i class="fas fa-eye" title="Visualizar"></i>
                                                <!-- Ícone de visualizar -->
                                            </span>
                                        </a>
                                    </li>
                                @empty
                                    <li>
                                        Não está matriculado em nenhuma turma.
                                    </li>
                                @endforelse
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
