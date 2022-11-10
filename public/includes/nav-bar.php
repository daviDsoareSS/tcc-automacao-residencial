<?php
  include_once('conexao.php');
  session_start();
  $idUser = ($_SESSION['idUser']);

  $sqlSelect = "SELECT * FROM users WHERE idUser= $idUser";
        $sqlSelectEndereco = "SELECT * FROM endereco WHERE idUser= $idUser";
        $result = $conn->query($sqlSelect);
        $resultEndereco = $conn->query($sqlSelectEndereco);

        if($result->num_rows > 0){
            while ( $user_data = mysqli_fetch_assoc($result) AND $user_data_endereco = mysqli_fetch_assoc($resultEndereco)){
                
                /*TABELA USERS*/ 
                $id = $user_data['idUser'];
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $dataNasc = $user_data['dataNasc'];
                $sexo = $user_data['sexo'];
                $telefone1 = $user_data['telefone1'];
                /*TABELA ENDEREÇOS*/
                $rua = $user_data_endereco['endereco'];
                $numero = $user_data_endereco['numero'];
                $cep = $user_data_endereco['cep'];
                $bairro = $user_data_endereco['bairro'];
                $cidade = $user_data_endereco['cidade'];
            }
           
        }
        else{
            header("Location: index.php");
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="manifest" href="manifest.webmanifest">
    <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--FIM CSS BOOTSTRAP only -->
    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--FIM FAVICON-->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ba3d4d34-ed87-48b9-9a7d-2d7f532b4699";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
<body>
      <!-- início do preloader -->
        <div id="preloader">
    <div class="inner">
       <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
       <img src="img/gif/1490.gif" alt="preloader">
    </div>
</div>
<span class="circle">
  <svg height="52vw" width="10vw"></svg>
</span>
<!-- fim do preloader --> 
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
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo/logo-4house.png" width="200vw" alt="Logo 4House"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><img src="img/navbar/home.png" alt="">Inicio</a>
              <hr>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="img/navbar/services.png" alt="">Serviços
              </a>
              <hr>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               
                <?php

                  $sql = "SELECT * FROM servico;";

                  $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

                  $i = 1;
                  while($row = mysqli_fetch_array($result)){

                    echo "<a class='dropdown-item' href='$row[urlServico].php'>$row[nomeServico]</a>";

                    $i++;
                  }

                ?>
                 
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sobre"><img src="img/navbar/sobre.png" alt="">Sobre</a>
              <hr>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.php"><img src="img/navbar/contato.png" alt="">Fale Conosco</a>
              <hr>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg>            
                </a>
                <hr>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <form action="" class="navbar-search">
                    <input type="text" class="form-control">
                    <button type="submit">Pesquisar</button>
                  </form>
                </div>
              </li>
          </ul>
          <div class="session-user">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Meu perfil</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="perfil.php"><?php if(!isset($_SESSION['nome'])){echo "<a class='dropdown-item' href='login.php'>Login</a>";}else echo $nome."(Meus dados)";?></a>
                <a class="dropdown-item btn-primary" data-toggle="modal" data-target="#exampleModal">Trocar de conta</a>
                <a class="dropdown-item" href="logout.php">Sair</a>
              </div>
              </li>
          </div>
        </div>
      </nav>

</body>
    <script src="script/preloader.js" defer></script>
    <script src="script/js.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>