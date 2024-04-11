
<body>
    <style>
        
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  h2 {
    text-align: center;
  }
  
  
  .container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 0; /* Bordas retas */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    min-height: 100vh; /* Altura mínima igual à altura da viewport */
  }
  
  h1 {
    text-align: center;
    color: #333;
  }
  
  .turmas {
    list-style-type: none;
    padding: 0;
  }
  
  .turma {
    padding: 10px;
    color: #666;
    cursor: pointer; /* Cursor de mão ao passar por cima */
    text-decoration: none; /* Remover sublinhado de link */
    display: flex; /* Usar display flex para alinhar os ícones */
    align-items: center; /* Centralizar verticalmente os ícones */
    justify-content: space-between; /* Distribuir o espaço entre o nome e os ícones */
    border-bottom: 1px solid #ccc; /* Adiciona uma linha de separação */
  }
  
  .turma:last-child {
    border-bottom: none; /* Remove a linha de separação do último item */
  }
  
  .turma:hover {
    background-color: #f9f9f9;
  }
  
  /* Estilos para os ícones */
  .icones i {
    margin-left: 10px; /* Espaçamento entre os ícones */
    color: #666; /* Cor dos ícones */
    cursor: pointer; /* Cursor de mão ao passar por cima */
  }
  
  .icones i:hover {
    color: #333; /* Mudança de cor ao passar o mouse */
  }

  .custom-search-form {
    max-width: 500px;
    margin: 0 auto;
}

@media (max-width: 576px) {
    .custom-search-form {
        max-width: 100%;
        padding: 0 15px;
    }
}

.full-width-line {
    margin: 20px -15px;
    border-top: 1px solid #dee2e6;
}

.inner-line {
    margin: 10px 0;
    border-top: 1px solid #dee2e6;
}

.p {
    color: black;
}

/* Estilização para as imagens */
.same-size-img {
    height: 40px; /* Definindo a altura desejada */
    width: 40px;  /* Definindo a largura desejada */
    object-fit: cover; /* Garantindo que a imagem cubra todo o espaço */
}

.centered-names {
    display: flex;
    align-items: center;  /* Aligns items vertically */
    justify-content: space-between;
}
/* Estilização para o botão dropdown */
.dropdown-toggle {
    font-size: 0.8rem;
    padding: 0.2rem 0.5rem;
    margin-top: 0; /* Removendo o espaçamento superior */
}

/* Espaçamento entre o botão e o nome */
.btn-name-spacing {
    margin-right: 10px;
}

.icones {
    float: right; /* Alinha os ícones à direita */
  }
  
  .icones i {
    margin-left: 10px; /* Espaçamento entre os ícones */
    color: #666; /* Cor dos ícones */
    cursor: pointer; /* Cursor de mão ao passar por cima */
  }
  
  .icones i:hover {
    color: #333; /* Mudança de cor ao passar o mouse */
  }

  /* Estilos para a barra de navegação */
.navbar {
  background-color: #17a2b8; /* Cor de fundo da barra de navegação */
}

.navbar-brand img {
  margin-right: 10px; /* Espaçamento à direita do logotipo */
}

.navbar-nav .nav-link {
  color: #fff; /* Cor do texto dos links */
}

/* Estilos para o título da página */
.container h2 {
  margin-top: 20px; /* Espaçamento superior */
  margin-bottom: 20px; /* Espaçamento inferior */
}

/* Estilos para as matérias */
.materias {
  list-style-type: none; /* Remove os marcadores de lista */
  padding-left: 0; /* Remove o recuo padrão da lista */
}

.materia {
  display: block; /* Transforma o link em um elemento de bloco */
  padding: 10px; /* Espaçamento interno */
  background-color: #f8f9fa; /* Cor de fundo */
  margin-bottom: 10px; /* Espaçamento inferior */
  border-radius: 5px; /* Arredonda as bordas */
}

.materia:hover {
  background-color: #e9ecef; /* Altera a cor de fundo ao passar o mouse */
}

.icones {
  float: right; /* Alinha os ícones à direita */
}

.icones i {
  margin-left: 10px; /* Espaçamento entre os ícones */
}

/* Estilos para o botão "Adicionar Matéria" */
.adicionar-materia {
  margin-top: 20px; /* Espaçamento superior */
}

/* Estilos para ícones do Font Awesome */
.fa-chart-bar, .fa-edit, .fa-eye {
  color: #007bff; /* Cor dos ícones */
}

  
    </style>

  @include('components.Cabecalho')

  @include('components.NavbarProf')

  @include('components.contprof')

  @include('components.rodape')



