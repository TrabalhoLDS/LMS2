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
            <h2>Adicionar Atividade</h2>
            @section('content')
            <div class="container">
                <h2>Adicionar Atividade</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            <form action="{{ route('atividades.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nome">Título da Atividade:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição da Atividade:</label>
                    <textarea id="descricao" name="descricao" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="dataAbertura">Data de Abertura:</label>
                    <input type="date" id="dataAbertura" name="dataAbertura" required>
                </div>
                <div class="form-group">
                    <label for="dataExpiracao">Data de Vencimento:</label>
                    <input type="date" id="dataExpiracao" name="dataExpiracao" required>
                </div>
                <div class="form-group">
                    <label for="tipoAtividade">Tipo de Atividade:</label>
                    <select id="tipoAtividade" name="tipoAtividade" required>
                        <option value="exercicio">Exercício</option>
                        <option value="trabalho">Trabalho</option>
                        <option value="projeto">Projeto</option>
                        <option value="avaliacao">Avaliação</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="arquivos">Anexar Arquivos:</label>
                    <input type="file" id="arquivos" name="arquivos[]" multiple>
                </div>
                <button type="submit">Adicionar Atividade</button>
            </form>
        </div>
    </div>
</body>
