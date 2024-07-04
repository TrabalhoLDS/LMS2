<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/aluno.css')}}">

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

                    @if($atividades->isEmpty())
                        <p>Nenhuma atividade encontrada.</p>
                    @else
                        <ul class="list-group">
                        @foreach ($atividades as $atividade)
                                <li class="list-group-item">
                                    <a href="{{ route('atividades.show', $atividade->id) }}">
                                        <strong>{{ $atividade->nome }}</strong>
                                    </a>
                                    <p>{{ $atividade->descricao }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
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
