<style>
    /* Estilos para a Tela de Atividades */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 15px;
}

.card {
    border: 1px solid #ccc;
    border-radius: 5px;
}

.card-body {
    padding: 20px;
}

.full-width-line {
    border-top: 1px solid #ccc;
}

h5 {
    margin-bottom: 10px;
}

ul {
    padding-left: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}



</style>

<div class="container mt-4">
    <div class="row justify-content-center">
        <!-- Primeiro quadro -->
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-body">
                    <button onclick="history.go(-1);" class="btn-voltar">
                        <i class="fas fa-arrow-left"></i> Voltar
                    </button>
                    <div class="input-group-prepend">
                        <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                            <h5 class="display-9">{{ $atividade->nome }}</h5>
                        </div>
                    </div>
                    <hr class="full-width-line">
                    <ul>
                        <li>Aberto: {{ $atividade->dataAbertura->format('l, d M Y, H:i') }}</li>
                        <li>Vencimento: {{ $atividade->dataExpiracao->format('l, d M Y, H:i') }}</li>
                    </ul>
                    <hr class="full-width-line">

                    <!-- Descrição da Atividade -->
                    <b>Instruções:</b>
                    <br>
                    {{ $atividade->descricao }}
                    <hr class="full-width-line">

                    <!-- Formulário para envio de arquivos e fotos -->
                    <form action="{{ route('atividades.submit', $atividade->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="arquivos">Anexar Arquivos:</label>
                            <input type="file" id="arquivos" name="arquivos[]" multiple><br><br>
                        </div>
                        <div class="form-group">
                            <label for="fotos">Anexar Fotos:</label>
                            <input type="file" id="fotos" name="fotos[]" accept="image/*" multiple><br><br>
                        </div>
                        <div class="form-group">
                            <label for="comentarios">Comentários:</label>
                            <textarea id="comentarios" name="comentarios" rows="4" class="form-control" placeholder="Escreva seus comentários ou instruções adicionais aqui..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar atividade</button>
                    </form>
                    <hr class="full-width-line">

                    <!-- Informações sobre o status da atividade -->
                    <table class="table">
                        <tr>
                            <th>Status de Envio</th>
                            <td>{{ $atividade->status_envio ?? 'Nenhum envio foi feito ainda' }}</td>
                        </tr>
                        <tr>
                            <th>Status da Avaliação</th>
                            <td>{{ $atividade->status_avaliacao ?? 'Não há notas' }}</td>
                        </tr>
                        <tr>
                            <th>Tempo Restante</th>
                            <td>{{ $atividade->tempo_restante ?? '2 dias 8 horas restando' }}</td>
                        </tr>
                        <tr>
                            <th>Última Modificação</th>
                            <td>{{ $atividade->ultima_modificacao ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Comentários sobre o Envio</th>
                            <td>{{ $atividade->comentarios ?? 'Comentários (0)' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

