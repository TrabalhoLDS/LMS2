<style>

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 15px;
}

h2 {
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

button {
    background-color: #17A2B7;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
    display: block;
}

button:hover {
    background-color: #0056b3;
}

</style>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Adicionar Aula</h2>

<!-- Esta seção exibe mensagens de status e erro -->
@if (session('status'))
            <div id="statusMessage" class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div id="errorMessage" class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleciona as mensagens pelo ID
        var statusMessage = document.getElementById('statusMessage');
        var errorMessage = document.getElementById('errorMessage');

        // Verifica se as mensagens existem e define um timer para ocultá-las
        if (statusMessage) {
            setTimeout(function() {
                statusMessage.style.display = 'none';
            }, 3000); // 3000ms = 3 segundos
        }

        if (errorMessage) {
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 3000); // 3000ms = 3 segundos
        }
    });
</script>


                    </div>
                    <!-- Botão de Voltar -->
        <a href="../home" class="btn-voltar"><i class="fas fa-arrow-left"></i><- Voltar</a>

                    <div class="card-body">
                        <!-- resources/views/prof/addAula.blade.php -->
<form action="{{ route('adicionarAula', ['turma_id' => $turma->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nome">Título da Aula:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição da Aula:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
    </div>
    <div class="form-group">
        <label for="caminhoArquivo">Anexar Arquivos:</label>
        <input type="file" class="form-control-file" id="caminho_arquivo" name="caminho_arquivo[]" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar Atividade</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
