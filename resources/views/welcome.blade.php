<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - LMS2</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-hero {
            background-image: url('img/fundo.png'); /* Imagem de fundo educacional */
            background-size: cover; /* Ajusta o tamanho da imagem para cobrir toda a área */
            background-position: center; /* Centraliza a imagem */
            background-repeat: no-repeat; /* Evita a repetição da imagem */
            height: 100vh; /* Ocupa toda a altura da tela */
            width: 100vw; /* Ocupa toda a largura da tela */
            display: flex;
            align-items: center; /* Centraliza o conteúdo verticalmente */
            justify-content: center; /* Centraliza o conteúdo horizontalmente */
        }
        .overlay {
            background: rgba(0, 0, 0, 0.5); /* Camada escura para contraste */
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
            margin-top: 25vh; /* Ajuste a posição vertical do conteúdo */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans text-gray-900">
    
    <!-- Hero Section -->
    <section class="bg-hero flex items-center justify-center">
        <div class="overlay">
            <img src="{{ asset('img/logotipoo.png') }}" alt="Logotipo" width="60" height="60" class="mx-auto mb-4">
            <h1 class="text-2xl md:text-3xl font-bold mb-4 text-white">Bem-vindo ao LMS</h1>
            <p class="text-sm md:text-lg mb-6 text-white">A plataforma ideal para sua vida escolar.</p>
            <div>
                <a href="/login" class="block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded mb-2">Login</a>
                <a href="/register" class="block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">Registro</a>
            </div>
        </div>
    </section>
    
</body>
</html>
