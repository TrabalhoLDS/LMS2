<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Cadastrados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 15px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-salvar, .btn-apagar {
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            transition: background-color 0.3s ease;
        }

        .btn-salvar {
            background-color: #4CAF50;
            margin-right: 5px;
        }

        .btn-salvar:hover {
            background-color: #45a049;
        }

        .btn-apagar {
            background-color: #dc3545;
        }

        .btn-apagar:hover {
            background-color: #c82333;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .full-width-line {
            border: 1px solid #ddd;
            margin: 15px 0;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .p {
            margin: 5px 0;
            font-size: 14px;
        }

        .button-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .input-group-prepend {
            background-color: #e9ecef;
            padding: 10px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-group-text {
            background-color: #e9ecef;
            border: none;
        }

        .custom-search-form {
            display: flex;
            margin-bottom: 20px;
        }

        .user-link p {
            margin: 0;
            font-weight: bold;
            color: #007bff;
        }

        .user-link p:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .d-flex {
                flex-direction: column;
                align-items: flex-start;
            }

            .button-container {
                justify-content: flex-start;
                margin-top: 10px;
                width: 100%;
            }

            .btn-salvar, .btn-apagar {
                margin-right: 5px;
            }

            .form-control {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Usuários Cadastrados</h1>

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


    <div class="card">
        <form class="custom-search-form">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
            </div>
            <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
        </form>
        <hr class="full-width-line">
        
        <div id="user-list">
            @foreach($usuarios as $user)
            <div class="card">
                <div class="d-flex">
                    <div class="user-info">
                        <p class="p"><strong>Nome:</strong> {{ $user->name }}</p>
                        <p class="p"><strong>Nível:</strong> {{ $user->usertype }}</p>
                    </div>
                    <div class="button-container">
                        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                                <option value="" selected disabled hidden>Selecione</option>
                                <option value="admin">Administrador</option>
                                <option value="prof">Professor</option>
                                <option value="user">Aluno</option>
                            </select>
                            <button type="submit" class="btn-salvar">Salvar</button>
                        </form>

                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza de que deseja excluir este usuário?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-apagar">Apagar</button>
                        </form>
                    </div>
                </div>
                <hr class="full-width-line">
            </div>
            @endforeach
        </div>
    </div>
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


</body>
</html>
