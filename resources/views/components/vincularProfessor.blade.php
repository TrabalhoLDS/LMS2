<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-5">Vincular professor a turma</h1>
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
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <form id="ProfessorTurma" action="{{ route('associarProfessorTurma') }}" method="POST">
                                    @csrf
                                    <select class="form-control" id="turma_id" name="turma_id">
                                        <option value="" selected disabled hidden>Selecione</option>
                                        @foreach($turmas as $turma)
                                            <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                                        @endforeach
                                    </select>
                                    <select class="form-control" id="professor_id" name="professor_id">
                                        <option value="" selected disabled hidden>Selecione</option>
                                        @foreach($professores as $professor)
                                            <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit">Salvar</button>
                                </form>
                            </div>
                        </div>
                        <hr class="full-width-line">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



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
