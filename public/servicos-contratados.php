<?php
  include('protect.php');
?>

<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<title>Serviços contratados | 4House</title>
</head>
<body class="pag-perfil">
    <main>
        <div class="card-perfil">
            <ul>
                <h5>Meu perfil</h5>
                <hr>
                <a href="perfil.php"><li class="opcoes-card"><span></span>Dados pessoais</li></a>
                <hr>
                <a href="servicos-contratados.php"><li class="opcoes-card selected"><span></span>Serviços contratados</li></a>
                <hr>
                <a href="#"><li class="opcoes-card"><span></span>Lorem Ipsum</li></a>
                <hr>
                <a href="#"><li class="opcoes-card"><span></span>Lorem Ipsum</li></a>
            </ul>
        </div>
        <div class="container-dados-pessoais">
            <h2><span></span>Serviços contratados</h2>
            <ul>
                <p>01</p>
                <li>Nome do serviço:<span class="dados-user nome-servico">Portão elétrico</span></li>
                <li>Data agendada:<span class="dados-user data-agendada">01/10/2022</span></li>
                <li>Status serviço:<span class="dados-user status-servico">Pendente</span></li>
                <li>Endereço:<span class="dados-user endereco">Rua Recife,Vila Seabra Nº30 - 08180-425</span></li>
            </ul>
            <ul>
                <p>02</p>
                <li>Nome do serviço:<span class="dados-user nome-servico">Sensor de proximidade</span></li>
                <li>Data agendada:<span class="dados-user data-agendada">22/09/2022</span></li>
                <li>Status serviço:<span class="dados-user status-servico">Finalizado</span></li>
                <li>Endereço:<span class="dados-user endereco">Rua Sócrates,Vila Seabra Nº1035 - 08180-430</span></li>
            </ul>
        </div>
    </main>
</body>
</html>