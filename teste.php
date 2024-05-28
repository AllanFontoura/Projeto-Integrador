<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Página de Endereço das Rodoviárias</title>
    <style>
    /* Estilo para a div de sobreposição */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8); /* Fundo semi-transparente */
      z-index: 999; /* Para garantir que fique sobre todos os outros elementos */
      display: none; /* Inicialmente escondido */
    }
    /* Estilo para a imagem dentro da sobreposição */
    .overlay img {
      display: block;
      margin: 0 auto; /* Centraliza a imagem horizontalmente */
      max-width: 90%; /* Define a largura máxima da imagem */
      max-height: 90%; /* Define a altura máxima da imagem */
      margin-top: 5%; /* Espaço superior */
    }
    /* Estilo para o botão */
    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>

</head>
<body>

<div id="menu">
    <?php
    include 'menu.php'
    ?>
</div>

<br><br><br><br><br><br>

<?php
    include 'conexao.php';
    error_reporting(E_ALL);
    session_start();

    // Verifica se houve algum erro durante a conexão
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    } else {
        echo "Conexão bem-sucedida!";
        // Aqui você pode realizar outras operações com o banco de dados
    }
?>

<div class="container">
  <div class="row">
    <div class="coluna">
      <div class="card">
        <h3>Rodoviária da Barra Funda</h3><hr>
        <img id="imagem" src="imagem\localiza.png" alt="teste2" style="width:4%"> Rua Jornalista Aloysio Biondi, S/N <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 11 3866-1100<br><br>
        <button onclick="mostrarImagem()">Ver mais Detalhes</button>
      </div>
    </div>
  </div>
</div>

<!-- Elemento de sobreposição para a imagem -->
<div class="overlay" onclick="fecharImagem()">
  <img id="imagem-ampliada">
</div>


<br><br>


<div class="rodape">
  <?php
    include 'rodape.php'
    ?> </div>

<script>
  function mostrarImagem() {
    var overlay = document.querySelector('.overlay');
    var imagemAmpliada = document.getElementById('imagem-ampliada');
    var imagem = document.getElementById('imagem').src;
    imagemAmpliada.src = imagem;
    overlay.style.display = 'block'; // Exibe a sobreposição
  }

  function fecharImagem() {
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'none'; // Esconde a sobreposição
  }
</script>

</body>
</html>