<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="faleconosco.css">
    <title>Fale Conosco</title>

<style>

    </style>
</head>
<body>

<div id="menu">
    <?php
    include 'menu.php'
    ?>
</div>

<br><br><br><br><br><br>
<div class="container">
  <form action="faleconosco_cad.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Nome</label>
      </div>
      <div class="col-75">
        <input type="text" id="nome" name="nome" placeholder="Seu nome...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Seu email...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Telefone</label>
      </div>
      <div class="col-75">
      <input type="text" id="telefone" name="telefone" placeholder="Seu telefone...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Mensagem</label>
      </div>
      <div class="col-75">
        <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="ENVIAR" class="bt_enviar">
    </div>
  </form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="rodape">
  <?php
    include 'rodape.php'
    ?> </div>

</body>
</html>