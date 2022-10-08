<?php
  include('protect.php');
?>

<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>
<title>Sensor de proximidade | 4House</title>
<body class="pag-sensor-proximidade">
<!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/1490.gif" alt="">
    </div>
</div>
<!-- fim do preloader --> 
<div class="modal">
</div>
  <span class="circle">
    <svg height="52vw" width="10vw"></svg>
  </span>
<main>
    <img src="img/servicos/sensor-proximidade/main/banner-sensor.png" alt="">
    <div class="container-text-sensor-proximidade">
        <h1>Sensor de proximidade</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptas excepturi facere necessitatibus iusto rerum laboriosam soluta aliquam maiores eum, voluptatum optio sapiente, asperiores veritatis vitae ullam animi totam suscipit?
        Optio cupiditate nobis labore, numquam necessitatibus recusandae sed, laboriosam quaerat illo dolore est! Consequuntur, reiciendis laborum libero architecto alias numquam ipsum minus laboriosam cumque? Accusantium aperiam cupiditate iure sit rem?</p>
        <div class="cards-sensor-proximidade">
            <div class="cards">
                <img src="img/servicos/sensor-proximidade/main/seguranca.png" alt="">
                <p>Nivel de segurança</p>
                <small>Alto nível</small>
            </div> 
            <div class="cards">
                <img src="img/servicos/sensor-proximidade/main/campeao.png" alt="">
                <p>Campeão</p>
                <small>Serviço mais contratado</small>
            </div>    
            <div class="cards">
                <img src="img/servicos/sensor-proximidade/main/tempo.png" alt="">
                <p>Instalação</p>
                <small>Tempo médio de 4 horas</small>
            </div>       
            <div class="cards">
                <img src="img/servicos/sensor-proximidade/main/seguranca.png" alt="">
                <p>Nivel de segurança</p>
                <small>Alto nível</small>
            </div>    
        </div>
        <button id="contrate-servico">Contrate agora</button>
    </div>
</main>

<?php
    //FOOTER
    include 'includes/footer.php';
?>
</body>
</html>