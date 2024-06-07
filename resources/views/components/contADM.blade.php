<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-5">Cadastrados</h1>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form class="input-group custom-search-form">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
                    </form>
                    <hr class="full-width-line">
                    <div class="centered-names" id="user-list">
                        @foreach($usuarios as $user)
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="./img/Foto_Bruno.jpg" id="Imagem Bruno" class="mr-3 same-size-img">
                                <p class="p">{{ $user->name }}</p>
                            </div>
                            <div>
                                <form id="formAtualizarUsuario" action="{{route('users.update', ['user'=>$user->id])}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                                        <option value="" selected disabled hidden>Selecione</option>
                                        <option value="admin">Administrador</option>
                                        <option value="prof">Professor</option>
                                        <option value="user">Aluno</option>
                                    </select>
                                    <button type="submit">Salvar</button>
                                </form>
                            </div>
                        </div>
                        <hr class="full-width-line">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5"></div>
<div class="d-flex justify-content-center">
    {{ $usuarios->appends(request()->except('page'))->links('vendor.pagination.bootstrap-4') }}
</div>

<script>
$(document).ready(function() {
    $('#search').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: "{{ route('users.search') }}",
            type: "GET",
            data: {'search': query},
            success: function(data) {
                $('#user-list').html(data.html);
            },
            error: function(xhr) {
                console.log(xhr.responseText); // Adiciona logs de erro no console para debug
            }
        });
    });
});
</script>

