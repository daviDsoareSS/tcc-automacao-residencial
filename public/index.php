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
  <div class="modal">
  </div>
  <span class="circle">
    <svg height="52vw" width="10vw"></svg>
  </span>
      <main>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="container-login" action="entrada-login.php" method="post">
          <strong><small>Email:</small></strong><br>
          <input type="text" name="email" id="" required><br>
          <strong><small>Senha:</small></strong><br>
          <input type="password" name="senha" required>
          <hr>
          <a href="signup.php"><button type="button" class="btn btn-secondary">Não tenho conta</button></a>
          <a href="index.php"><button type="submit" class="btn btn-primary">Entrar</button></a>
        </form>
      </div>
    </div>
  </div>
</div>
        <div class="container-main">
            <img src="img/main/save.png" alt="">
            <div class="text-main">
                <strong><h1>Automação residencial</h1></strong>
                <small>Serviços para automatizar seu lar</small>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis exercitationem amet dicta possimus, a voluptates facere esse nihil corporis delectus adipisci officiis maiores ex nobis aperiam autem reiciendis, cupiditate distinctio!
                Autem qui enim voluptas vel deleniti nobis et placeat.</p>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href=""><span class="leia">... Leia mais</span></a></p>
        </div>
        <div class="container-section">
          <img src="img/section/sensor-de-proximidade.png" alt="" width="400vw">
          <h2>Sensor de proximidade</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam tempora nemo aliquam rerum nihil commodi eveniet sunt soluta eum! Nesciunt es<a href=""><span class="leia">... Leia mais</span></a></p>
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
                <img src="img/article/cards/global.png" alt="">
                <p>São Paulo-SP</p>
                <small>Zona leste</small>
              </div>
              <div class="card">
                <img src="img/article/cards/global.png" alt="">
                <p>São Paulo-SP</p>
                <small>Zona leste</small>
              </div>
            </div>
          </div>
       </div>
      </article>
      <figure>
        <div class="card-figure first">
          <img src="img/section/card-1.png" alt="">
          <h3>Serviços</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quod vero libero, odio laborum perferendis deleniti eligendi aliquid ad? Error distinctio voluptates quod omnis dolor tempora autem iusto? Iste, facilis!</p>
      </div>
      <div class="card-figure second">
          <img src="img/section/card-2.png" alt="">
          <h3>FAQ</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quod vero libero, odio laborum perferendis deleniti eligendi aliquid ad? Error distinctio voluptates quod omnis dolor tempora autem iusto? Iste, facilis!</p>
      </div>
      <div class="card-figure three">
          <img src="img/section/card-3.png" alt="">
          <h3>Redes Sociais</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quod vero libero, odio laborum perferendis deleniti eligendi aliquid ad? Error distinctio voluptates quod omnis dolor tempora autem iusto? Iste, facilis!</p>
      </div>
      </figure>
  <?php
    //FOOTER
    include 'includes/footer.php';
  ?>
    
</body>
</html>