<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visualizar Turmas</title>

  <!-- Adicionando Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 340px;
      margin: 5px auto;
      padding: 10px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .titulo {
      font-size: 25px;
      color: #333;
      text-align: center; /* Centraliza o texto */
      margin-bottom: 20px; /* Espaço abaixo do título */
    }

    .materias {
      list-style-type: none;
      padding: 0;
    }

    .materia {
      padding: 15px;
      border-bottom: 1px solid #ccc;
    }

    .btn-adicionar {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 18px;
      background-color: #17A2B7;
      color: #fff;
      border: none;
      border-radius: 50px;
      cursor: pointer;
    }

    .btn-adicionar:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
                    <hr class="full-width-line">
                        <div class="centered-names" id="user-list">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <form method="POST" action="{{ route('vincular.turma.professor') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="turma_id">Turma</label>
                                            <select class="form-control" id="turma_id" name="turma_id">
                                                <option value="" selected disabled hidden>Selecione a Turma</option>
                                                @foreach ($turmas as $turma)
                                                    <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="professor_id">Professor</label>
                                            <select class="form-control" id="professor_id" name="professor_id">
                                                <option value="" selected disabled hidden>Selecione o Professor</option>
                                                @foreach ($professores as $professor)
                                                    <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Vincular Turma e Professor</button>
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

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
