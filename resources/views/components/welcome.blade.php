

<body>
    <style>.custom-search-form {
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
.dropdown-button {
    margin-left: auto;  /* Aligns button to the right within .centered-names */
  }
  
  .centered-names .btn {
    margin-left: auto;
  }

  .dropdown-frame {
    display: flex;
    align-items: center;  /* Aligns items vertically within the frame */
    height: 40px;
  }

  .blue-icon {
    color: blue;
    font-size: 32px; /* Ajuste o tamanho conforme necessário */
}
.pink-icon {
    color: pink;
    font-size: 32px;
}
.green-icon{
    color: green;
    font-size: 32px;
}

.smaller-text {
    font-size: 14px; /* Reduzindo o tamanho da fonte para 14px */
    margin-top: 5px; /* Ajustando o espaçamento superior */
    margin-bottom: 5px; /* Ajustando o espaçamento inferior */
}
</style>

@include('components.Cabecalho') 
@include('components.navbarAluno')
@include('components.contAluno')
@include('components.rodape')

    

    