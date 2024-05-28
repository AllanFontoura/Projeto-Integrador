<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="pontovenda.css">
    <title>Pontos de Venda</title>
<style>

</style>
</head>
<body>

<div id="menu">
    <?php
    include 'menu.php'
    ?>
</div>

<br><br><br><br>


<div class="container">
  <div class="row">
    <div class="coluna">
      <div class="card">
        <h3>Rodoviária da Barra Funda</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Rua Jornalista Aloysio Biondi, S/N <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 11 3866-1100<br><br>
        <button onclick="mostrarImagem('imagem/RodBarraFunda.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de Bauru</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Praça João Paulo II, 30 <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 14 3233-9018<br><br>
        <button onclick="mostrarImagem('imagem/RodBauru.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de Botucatu</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Rua Tiradentes, S/N <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 14 3811-1430<br><br>
        <button onclick="mostrarImagem('imagem/RodBotucatu.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de Guarujá</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Avenida Santos Dumont, 840 <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 13 3383-8933<br><br>
        <button onclick="mostrarImagem('imagem/RodGuaruja.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de Itanhaém</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Avenida Harry Forssell, 1404 <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 13 3421-1800<br><br>
        <button onclick="mostrarImagem('imagem/RodItanhaem.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária do Jabaquara</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Rua dos Jequitibás, S\N <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 11 3866-1100<br><br>
        <button onclick="mostrarImagem('imagem/RodJabaquara.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de Piracicaba</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Av. Armando de Salles, 2344 <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 19 3433-8003<br><br>
        <button onclick="mostrarImagem('imagem/RodPiracicaba.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de Ribeirão Preto</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Avenida Jerônimo Gonçalves, 640 <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 16 3412-9849<br><br>
        <button onclick="mostrarImagem('imagem/RodRibeiraoPreto.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de Santos</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Praça dos Andradas, 44 <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 13 3213-2290<br><br>
        <button onclick="mostrarImagem('imagem/RodSantos.png')">Ver mais Detalhes</button>
      </div>
    </div>

    <div class="coluna">
      <div class="card">
        <h3>Rodoviária de São Vicente</h3><hr>
        <img src="imagem\localiza.png" alt="teste2" style="width:4%"> Avenida Capitão-Mor Aguiar, 798 <br>
        <img src="imagem\telefone.png" alt="teste2" style="width:4%"> 13 4040-4244<br><br>
        <button onclick="mostrarImagem('imagem/RodSaoVicente.png')">Ver mais Detalhes</button>
      </div>
    </div>

  </div>  
</div>

<div class="overlay" onclick="fecharImagem()">
  <img id="imagem-ampliada">
</div>


<br><br>


<div class="rodape">
  <?php
    include 'rodape.php'
    ?> </div>

<script>
  function mostrarImagem(caminhoImagem) {
    var overlay = document.querySelector('.overlay');
    var imagemAmpliada = document.getElementById('imagem-ampliada');
    imagemAmpliada.src = caminhoImagem;
    overlay.style.display = 'block'; 
  }

  function fecharImagem() {
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'none'; 
  }
</script>

</body>
</html>