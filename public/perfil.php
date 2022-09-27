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
                <li>Email:<span class="dados-user">thelordsofgames6@gmail.com</span></li>
                <li>Nome completo:<span class="dados-user">David Soares Silva</span></li>
                <li>Idade:<span class="dados-user">18 anos</span></li>
                <li>Sexo:<span class="dados-user">Masculino</span></li>
                <li>Cidade:<span class="dados-user">São Paulo -SP</span></li>
                <li>Endereço:<span class="dados-user endereco">Rua Recife,Vila Seabra Nº30 - 08180-425</span></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </main>
</body>
</html>