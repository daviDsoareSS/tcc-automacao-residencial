<?php
  include('protect.php');
  include_once('conexao.php');
?>

<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>

<title>Serviços contratados | 4House</title>
</head>
<body class="pag-perfil">
    <main>
        <div class="card" style="width: 18rem; height: 12rem;">
            <div class="card-header">
                Meus dados
            </div>
                <ul class="list-group list-group-flush">
                    <a href="perfil.php"><li class="list-group-item">Informaçôes pessoais</li></a>
                    <a href="servicos-contratados.php"><li class="list-group-item selected">Serviços contratados</li></a>
                    <a href=""><li class="list-group-item">Vestibulum at eros</li></a>
                </ul>
        </div>
        <div class="container-dados-pessoais">
            <h2><span></span>Serviços contratados</h2>

            <?php 

            $idUser = $_SESSION['idUser'];

                $sql = "SELECT s.nomeServico, a.dataAgendamento, a.statusServico, e.endereco, e.numero, e.cep, e.bairro FROM agendamento a 
                        JOIN servico s ON s.idServico = a.idServico
                        JOIN endereco e ON e.idEndereco = a.idEndereco
                        WHERE  a.idUser = '$idUser'";

                $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);


                $i = 1;
                while($row = mysqli_fetch_array($result)){

            ?>

            <ul>
                <p><?php echo $i; ?>º Serviço</p>
                <li>Nome do serviço:<span class="dados-user nome-servico"><?php echo $row['nomeServico']; ?></span></li>
                <li>Data agendada:<span class="dados-user data-agendada"><?php echo $row['dataAgendamento']; ?></span></li>
                <li>Status serviço:<span class="dados-user status-servico"><?php echo $row['statusServico']; ?></span></li>
                <li>Endereço:<span class="dados-user endereco"><?php echo $row['endereco']; ?>,<?php echo $row['bairro']; ?> Nº<?php echo $row['numero']; ?> - <?php echo $row['cep']; ?></span></li>
            </ul>

            <?php
                    $i++;
                }
            ?>
        </div>
    </main>
</body>
</html>