<?php
  include('protect.php');
?>

<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>
<title>Página inicial | 4House</title>
  <body>
      <!-- início do preloader -->
  <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/1490.gif" alt="">
    </div>
</div>
<!-- fim do preloader --> 
  <span class="circle">
    <svg height="52vw" width="10vw"></svg>
  </span>
<main>
        <div class="container-main">
            <img src="img/main/save.png" alt="">
            <div class="text-main">
                <strong><h1>Automação residencial</h1></strong>
                <small>Serviços para automatizar seu lar</small>
                <p>
                A solução que você precisa para tornar sua casa mais segura e inteligente.
                Contratando nossos serviços você terá a interação total da sua casa em apenas um toque no seu celular.
                Irá facilitar tarefas que dependiam só de você, de acordo com as suas necessidades e vontades.
                <i>A Casa do Futuro</i> pode estar a apenas um clique de você.</p>
                <a href="sobre.php"><button>Venha conhecer</button></a>
            </div>
        </div>
      </main>
      <section>
        <small id="servicos">Alguns serviços</small>
        <h3>Mais prestados</h3>
        <div class="container-cards">
        <div class="container-section">
          <img src="img/section/ambientacao.png" alt="" width="400vw">
          <h2>Ambientação</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href=""><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/portao-eletrico.png" alt="" width="400vw">
          <h2>Portão elétrico</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href="portao-eletrico.php"><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/sensor-de-proximidade.png" alt="" width="400vw">
          <h2>Sensor de proximidade</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href="sensor-proximidade.php"><span class="leia">... Leia mais</span></a></p>
        </div>
      </div>
      <!--Mais serviços-->
      <button id="btn-veja-todos-servicos" type="button" data-toggle="collapse" data-target="#mostrar-servicos" aria-controls="mostrar-servicos" aria-expanded="false" aria-label="Toggle navigation">Veja todos</button>
      <div class="collapse container-cards" id="mostrar-servicos">
        <div class="container-section">
          <img src="img/section/ambientacao.png" alt="" width="400vw">
          <h2>Ambientação</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href=""><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/portao-eletrico.png" alt="" width="400vw">
          <h2>Portão elétrico</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href=""><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/sensor-de-proximidade.png" alt="" width="400vw">
          <h2>Sensor de proximidade</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href=""><span class="leia">... Leia mais</span></a></p>
        </div>
      </div>
      <span id="content-line"></span>
      </section>
      <article id="sobre">
        <div class="container-article primary-img-article">
          <img src="img/section/equipamentos-automacao-residencial 1.jpg" alt="" width="50%">
          <div class="container-article-text">
            <small>Um pouco de nós</small>
            <h3>Sobre nós</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis delectus sed commodi accusamus facilis exercitationem sequi aliquid, quam harum architecto adipisci nesciunt hic, tenetur neque consectetur ipsa impedit ullam aspernatur.
            Facilis sequi nihil debitis nam reprehenderit ut repudiandae. Aperiam asperiores excepturi fuga ex, illo saepe amet accusantium dolorem nam necessitatibus cupiditate tenetur quaerat maxime tempora facilis, iure vel. Odit, odio!</p>
            <div class="cards">
              <div class="card">
                <img src="img/article/cards/global.png" alt="">
                <p>São Paulo-SP</p>
                <small>Zona leste</small>
              </div>
              <div class="card">
                <img src="img/article/cards/classificação.png" alt="">
                <p>Avaliação</p>
                <small>+1500 clientes satisfeitos</small>
              </div>
              <div class="card">
                <img src="img/article/cards/premio.png" alt="">
                <p>Eleito</p>
                <small><i>Melhor empresa<br> no ramo 2021</i></small>
              </div>
              <div class="card">
                <img src="img/article/cards/sustentabilidade.png" alt="">
                <p>Sustentabilidade</p>
                <small>Prevervação do meio ambiente</small>
              </div>
            </div>
          </div>
       </div>
       <h4 id="text-figure"><strong>Veja oque nossos</strong><br> clientes acham sobre nós</h4>
      </article>
      <figure>
        <div class="card-figure first">
          <img src="img/figure/aspas.png" alt="">
          <p>Amei o serviço, minha casa já tinha sido furtada diversas vezes, depois que contratei o serviço de vocês eu e minha família nos sentimos mais seguros. Contratei o portão elétrico e esse mês irei contratar mais serviços, super recomendooo!!</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user1.png" alt="">
              <small>Amanda Ribeiro Silva</small>
            </div>
        </div>
      <div class="card-figure second">
          <img src="img/figure/aspas.png" alt="">
          <p>Automatizei toda a minha casa, após a contratação dos serviços eu sinto que minha rotina se tornou mais dinâmica, meus vizinhos já contrataram serviços por minha indicação!</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user2.png" alt="">
              <small>Julio César Santos</small>
            </div>
        </div>
      <div class="card-figure three">
          <img src="img/figure/aspas.png" alt="">
          <p>Sem dúvidas a melhor empresa no ramo da automação residencial, atendimento super dinâmico e objetivo sem falar dos serviços de alta qualidade ,muito topp mesmo.</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user3.jpg" alt="">
              <small>Martha Costa Santana</small>
            </div>
        </div>
      <div class="card-figure four">
          <img src="img/figure/aspas.png" alt="">
          <p>Sou cliente da empresa a 2 anos e nunca tive problemas, os atendentes são super prestativos e educados. Espero que vocês ampliem a zona de prestação de serviços, pois tenho parentes que também querem automatizar suas casas com a 4House.</p>
            <div class="card-cliente">
              <img class="foto-user" src="img/figure/user4.jpg" alt="">
              <small>João Miguel Souza</small>
            </div>
        </div>
      </figure>
  <?php
    //FOOTER
    include 'includes/footer.php';
  ?>
    
</body>
</html>