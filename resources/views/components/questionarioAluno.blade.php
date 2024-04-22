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

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-adicionar {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}


</style>

<!-- Tela de Atividades -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <!-- Primeiro quadro -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                <button onclick="history.go(-1);" class="btn-voltar">
                 <i class="fas fa-arrow-left"></i> Voltar
                </button>
                    <div class="input-group-prepend">
                        <div class="col-md-8 text-center d-flex justify-content-center align-items-center">
                        <h5 class="display-9">Questionário de Química Orgânica</h5>
                        </div>
                    </div>
                    <hr class="full-width-line">
                    <ul>
                        <li>Duração: 1 hora</li>
                    </ul>
                    <hr class="full-width-line">
                     
                    <!-- Descrição da Atividade -->
                    <p>Bem-vindo ao questionário de Química Orgânica! Antes de começar, por favor, leia as seguintes regras:</p>
            
                <li>O questionário consiste em perguntas relacionadas ao tema de Química Orgânica.</li>
                <li>Você terá um tempo limitado para completar o questionário. Após o término do tempo, suas respostas serão enviadas automaticamente.</li>
                <li>Selecione a resposta que considerar correta para cada pergunta.</li>
                <li>Após concluir o questionário, clique no botão "Enviar Respostas".</li>
<br>
<a href="startQuiz" class="btn btn-adicionar">Iniciar Questionário</a>
                    <hr class="full-width-line">
                    <table>
    <tr>
        <th>Status de Envio</th>
        <td>Nenhum envio foi feito ainda</td>
    </tr>
    <tr>
        <th>Status da Avaliação</th>
        <td>Não há notas</td>
    </tr>
    <tr>
        <th>Tempo Restante</th>
        <td>2 dias 8 horas restando</td>
    </tr>
    <tr>
        <th>Última Modificação</th>
        <td>-</td>
    </tr>
    <tr>
        <th>Comentários sobre o Envio</th>
        <td>Comentários (0)</td>
    </tr>
</table>

                </div>
            </div>
        </div>
    </div>
</div>

