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
                        <h2>Adicionar Atividade</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('adicionarAula')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Título da Atividade:</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição da Atividade:</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="data_abertura">Data de Abertura:</label>
                                <input type="date" class="form-control" id="data" name="data" required>
                            </div>
                            <div class="form-group">
                                <label for="arquivos">Anexar Arquivos:</label>
                                <input type="file" class="form-control-file" id="caminhoArquivo" name="caminhoArquivo[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary">Adicionar Atividade</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
