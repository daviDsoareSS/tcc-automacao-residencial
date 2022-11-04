<?php
  //NAV-BAR
  include 'includes/nav-bar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<title>Meu perfil | 4House</title>
</head>
<body class="pag-perfil">
    <main>
        <div class="card" style="width: 18rem; height: 10.6rem;">
            <div class="card-header">
                Meus dados
            </div>
            <ul class="list-group list-group-flush">
                <a href="perfil.php"><li class="list-group-item selected">Informaçôes pessoais</li></a>
                <a href="servicos-contratados.php"><li class="list-group-item">Serviços contratados</li></a>
                <a href=""><li class="list-group-item">Vestibulum at eros</li></a>
            </ul>
        </div>
        <div class="container-dados-pessoais informacoes-user">
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
                <li>Cidade:<span class="dados-user"><?php echo($_SESSION['cidade']);?></span></li>
                <li>Endereço:<span class="dados-user endereco"><?php echo($_SESSION['endereco']);?>,<?php echo($_SESSION['bairro']);?> Nº<?php echo($_SESSION['numero']);?> - <?php echo($_SESSION['cep']);?></span></li>
                <li></li>
                <li></li>
                <div class="button-card">
                    <button class="editar-usuario" type="submit">Editar</button>
                    <button class="deletar-usuario" type="submit">Excluir conta</button>
                </div>
            </ul>
        </div>
    </main>
</body>
</html>