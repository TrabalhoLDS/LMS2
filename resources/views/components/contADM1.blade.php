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
<!-- Nomes, imagens e botões dropdown dentro da moldura -->
<hr class="full-width-line">
<div class="centered-names">
    @foreach($subjects as $subject)
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
               <p class="p">{{ $subject->name }}</p>
            </div>
            <div>
                <form id="formAtualizarUsuario">
                    @csrf <!-- Adicione o token CSRF se estiver usando Laravel 7+ -->
                    <input type="hidden" name="_method" value="PUT">
                    <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                        <option value="" selected disabled hidden>Selecione</option>
                        <option value="admin">Administrador</option>
                        <option value="prof">Professor</option>
                        <option value="user">Aluno</option>
                    </select>
                </form>
            </div>
        </div>
        <hr class="full-width-line">
    @endforeach
</div>


</div>
<!-- -->
<a></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Conteúdo principal -->
<div class="container mt-5">
    <!-- Aqui você pode adicionar mais conteúdo conforme necessário -->
</div>

