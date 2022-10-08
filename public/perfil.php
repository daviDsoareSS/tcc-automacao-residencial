<?php
  include('protect.php');
?>

<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<title>Meu perfil | 4House</title>
</head>
<body class="pag-perfil">
    <main>
        <div class="card-perfil">
            <ul>
                <h5>Meu perfil</h5>
                <hr id="hr-top-card">
                <a href="perfil.php"><li class="opcoes-card selected"><span></span>Dados pessoais</li></a>
                <hr>
                <a href="servicos-contratados.php"><li class="opcoes-card"><span></span>Serviços contratados</li></a>
                <hr>
                <a href="#"><li class="opcoes-card"><span></span>Lorem Ipsum</li></a>
                <hr>
                <a href="#"><li class="opcoes-card"><span></span>Lorem Ipsum</li></a>
            </ul>
        </div>
        <div class="container-dados-pessoais">
            <h2><span></span>Dados pessoais</h2>
            <ul>
                <li>Email:<span class="dados-user"><?php echo($_SESSION['email']);?></span></li>
                <li>Nome completo:<span class="dados-user"><?php echo($_SESSION['nome']);?></span></li>
                <!--Função para calcular idade do usuário-->
                <?php
                 //FUNÇÃO CALCULAR IDADE DO USUARIO
                  $dataNascimento = $_SESSION['dataNasc'];
                  $data = new DateTime($dataNascimento);
                  $resultado = $data->diff(new DateTime( date('Y-m-d')));
                 //FIM FUNÇÃO
                ?>
                <li>Idade:<span class="dados-user"><?php echo $resultado->format( '%Y anos' );?></span></li>
                <li>Sexo:<span class="dados-user"><?php echo($_SESSION['sexoUser']);?></span></li>
                <li>Cidade:<span class="dados-user">São Paulo -SP</span></li>
                <li>Endereço:<span class="dados-user endereco">Rua Recife,Vila Seabra Nº30 - 08180-425</span></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </main>
</body>
</html>