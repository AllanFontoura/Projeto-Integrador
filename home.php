<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <title>Digo Tur</title>

    <style>
     

 
    </style>


</head>
<body>

<div id="menu">
    <?php
    include 'menu.php'
    ?>
</div>

<div id="conteudo">

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="imagem\inicio.png" alt="Ponte" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="imagem\PromoNamorados.png" alt="MASP" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="imagem\Banner Digo Tur.png" alt="Theatro" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="imagem\digotur.png" alt="Theatro" style="width:100%">

        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>


    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>

</div>

<br><br><br>

<div class="linhadotempo"><spam>História da DigoTur</sapm></div>

<br><br><br><br>

<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2024</h2>
      <p>Atualmente somos um dos maiores agregadores de venda de passagens de ônibus do estado de São Paulo.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2020</h2>
      <p>Depois da parceria com a CLICKBUS, a expansão dos negócios chega a níveis altíssimos, operamos com mais de 60% das cidades do estado de São Paulo.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p>Neste ano assinamos um dos contratos mais importantes da empresa, ao firmarmos nossa parceria com um dos grandes agregadores de venda de passagens de ônibus do Brasil, a CLICKBUS.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2014</h2>
      <p>Estávamos expandindo os negócios, atendendo cerca de 40% das cidades do interior de São Paulo.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2011</h2>
      <p>Já trabalhávamos com 10 cidades para a venda de passagens, mas ainda não havia um agregador para isso.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2007</h2>
      <p>Criação da Empresa, começamos com apenas três cidades: Guarujá, Itanhaém e Piracicaba, quando a venda de passagens pela internet estava apenas engatinhando.</p>
    </div>
  </div>
</div>

<div class="sobrenos"> <spam> <h2>QUEM SOMOS</h2> 
Digotur é uma agência de viagens especializada em proporcionar experiências únicas e personalizadas aos seus clientes. Fundada com a missão de tornar as viagens mais acessíveis e memoráveis, a Digotur oferece uma ampla gama de serviços, incluindo pacotes turísticos, reservas de hotéis, passagens aéreas, cruzeiros e atividades de lazer em destinos ao redor do mundo. <BR>

Com uma equipe experiente e apaixonada por viagens, a Digotur está comprometida em fornecer um atendimento excepcional e soluções sob medida para atender às necessidades e preferências de cada cliente. Além disso, a empresa está sempre em busca de novas parcerias e destinos exclusivos para oferecer experiências únicas e inesquecíveis aos seus clientes.<BR>

Seja para uma escapada romântica, uma aventura em família ou uma viagem de negócios, a Digotur está pronta para transformar os sonhos de viagem dos seus clientes em realidade, proporcionando momentos inesquecíveis e criando memórias que durarão para sempre.<br>
<br>
</spam> </div>

<div class="rodape">
  <?php
    include 'rodape.php'
    ?> </div>

</body>
</html>
