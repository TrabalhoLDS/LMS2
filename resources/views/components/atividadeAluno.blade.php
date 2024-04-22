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
                        <h5 class="display-9">Trigonometria</h5>
                        </div>
                    </div>
                    <hr class="full-width-line">
                    <ul>
                        <li>Aberto: quarta-feira, 3 abr. 2024, 00:00</li>
                        <li>Vencimento: quarta-feira, 10 abr. 2024, 23:59</li>
                    </ul>
                    <hr class="full-width-line">
                     
                    <!-- Descrição da Atividade -->
<b>Instruções:</b>
<br>
    Resolva cada problema abaixo mostrando todos os passos e cálculos.
    Use as identidades trigonométricas quando necessário.
    Verifique suas respostas e garanta que estão em formato simplificado.
<br>
<b>Problemas:</b>
<br>
    1. Um triângulo retângulo tem um ângulo agudo de 30∘(graus). Calcule os valores de seno, cosseno e tangente desse ângulo.<br>

    2. Dado um triângulo retângulo com um cateto oposto medindo 5 e um cateto adjacente medindo 12, calcule o valor de seno, cosseno e tangente do ângulo agudo.<br>

    3. Um observador está a 100 metros de distância de uma árvore. Se o ângulo de elevação da parte superior da árvore em relação ao observador é de 45∘(graus), qual é a altura da árvore?

<hr class="full-width-line">
                    <!-- Formulário para envio de arquivos e fotos -->
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        <label for="arquivos">Anexar Arquivos:</label>
                        <input type="file" id="arquivos" name="arquivos" multiple><br><br>
                        <label for="fotos">Anexar Fotos:</label>
                        <input type="file" id="fotos" name="fotos" accept="image/*" multiple><br><br>
                        <button type="submit">Enviar atividade</button>
                    </form>
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

