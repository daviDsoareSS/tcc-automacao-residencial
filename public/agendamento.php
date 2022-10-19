<?php
    include_once('conexao.php');
    session_start();
    if(!empty($_GET['id'])){

        $idUser = $_GET['id'];
        $_SESSION['idUser'] = $idUser;
        $sqlSelect = "SELECT * FROM users WHERE idUser= $idUser";
        $sqlSelectEndereco = "SELECT * FROM endereco WHERE idUser= $idUser";
        $result = $conn->query($sqlSelect);
        $resultEndereco = $conn->query($sqlSelectEndereco);
        

        if($result->num_rows > 0){
            $user_data = mysqli_fetch_assoc($result);
            $user_data_endereco = mysqli_fetch_assoc($resultEndereco);
            
        }
        else{
            header("Location: dashboard.php");
        }
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento | 4House</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>  
    <?php
        include_once('includes/header-dashboard.php');
    ?>
    <div class="sidebar">
        <nav>
            <a href="dashboard.php"><img src="img/logo/logo-4house.png" alt="logo 4house"></a>
        </nav>
        <div class="container-sidebar">
            <ul>
                <a href="dashboard.php"><li class="selected">Interface</li></a>
                <a href="editar-usuarios.php"><li class="">Editar usuários</li></a>
                <a href="dashboard.php"><li class="">Deletar usuários</li></a>
            </ul>    
        </div>
    </div>
    <main class="pag-agendamento">
        <div class="container-dados-usuario">
            <h2>Dados usuário</h2>
            <p>Nome:<?php echo "<small>"."  ".$user_data['nome']."</small>"?></p>
            <p>Email:<?php echo "<small>"."  ".$user_data['email']."</small>"?></p>
            <p>Data de nascimento:<?php echo "<small>"."  ".$user_data['dataNasc']."</small>"?></p>
            <p>Sexo:<?php echo "<small>"."  ".$user_data['sexo']."</small>"?></p>
            <!-- <p>Telefone 1:<?php echo "<small>"."  ".$user_data['tel1']."</small>"?></p>
            <p>Telefone 2<i>(opcional)</i>:<?php echo "<small>"."  ".$user_data['tel2']."</small>"?></p> -->
            <p>Endereço:<?php echo "<small>"."  ".$user_data_endereco['endereco']."</small>"?>,<?php echo "<small>".$user_data_endereco['bairro']."</small>"?> Nº<?php echo "<small>"."  ".$user_data_endereco['numero']."</small>"?> - <?php echo "<small>".$user_data_endereco['cep']."</small>"?></p>
            <p>Serviços contratados:
            
            

            <?php

                $sql = "SELECT s.nomeServico, a.dataAgendamento, a.statusServico, e.endereco, e.numero, e.cep, e.bairro FROM agendamento a 
                        JOIN servico s ON s.idServico = a.idServico
                        JOIN endereco e ON e.idEndereco = a.idEndereco
                        WHERE  a.idUser = '$idUser'";

                $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);


                $i = 1;
                while($row = mysqli_fetch_array($result)){

            ?>

            <ul>
                <p><?php echo $i; ?>º</p>
                <li>Nome do serviço:<span class="dados-user nome-servico"><?php echo $row['nomeServico']; ?></span></li>
                <li>Data agendada:<span class="dados-user data-agendada"><?php echo $row['dataAgendamento']; ?></span></li>
                <li>Status serviço:<span class="dados-user status-servico"><?php echo $row['statusServico']; ?></span></li>
                <li>Endereço:<span class="dados-user endereco"><?php echo $row['endereco']; ?>,<?php echo $row['bairro']; ?> Nº<?php echo $row['numero']; ?> - <?php echo $row['cep']; ?></span></li>
            </ul>

            <?php
                    $i++;
                }
            ?>


            </p>
        </div>

        

        <form class="container-agendamento" action="agendar-servico.php" method="POST">
            <h2>Agendar serviço</h2>
            <label for="input-servicos">Serviço</label>
            <select class="custom-select" id="input-servicos" name="servico" required>

            <?php

                $sql = "SELECT * FROM servico;";

                $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

                $i = 1;
                while($row = mysqli_fetch_array($result)){

                    echo "<option value='$row[idServico]'>$row[nomeServico]</option>";
                    $i++;
                }

            ?>

            </select>
            <div class="form-group">
                
            <label for="">Endereço</label><br>
            
            <input type="radio" id="endereco-cadastrado" name="endereco" value="<?php echo $user_data_endereco['endereco'].", ".$user_data_endereco['bairro']." Nº".$user_data_endereco['numero']." - ".$user_data_endereco['cep']?>" checked="check" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true">

                
            <label for="endereco-cadastrado">
                Endereço cadastrado<br>
                
                <small><i>
                    <?php echo $user_data_endereco['endereco'].", ".$user_data_endereco['bairro']." Nº".$user_data_endereco['numero']." - ".$user_data_endereco['cep']?>
                </i></small>
            </label><br>
            
            <input type="radio" id="outro-endereco" name="endereco" value="outro-endereco" class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-controls="collapseExample">
                
                <label for="outro-endereco">Outro endereço</label><br>
            </div>
                <div class="container-endereco">
                        <div class="collapse" id="collapseExample">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="ex. 0000-000">
                                <label for="rua">Rua</label>
                                <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Rua">
                            </div>
                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input class="form-control type="text" name="bairro" id="bairro" placeholder="Bairro">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="localidade" placeholder="Cidade">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEstado">Número</label>
                                    <input class="form-control" type="text" name="numero-casa" id="numero-casa" placeholder="Nº">
                                </div>
                        </div>
                </div>
                <div class="form-group">
                    <label for="data-agendamento">Data do agendamento</label>
                    <input type="date" min="2022-10-15" max="2024-01-01" name="dataAgendamento">
                    <br>
                    <label for="horario-agendamento">Horário do agendamento</label>
                    <input type="time" name="horaAgendamento" min="09:00" max="18:00">
                </div>
                <div class="form-group">
                    <label for="tel1">Telefone</label>

                    <input class="form-control" type="text" name="tel"></option>
                </div>
                <button class="button-agendar" type="submit">Agendar</button>

                <?php

                    if(isset($_SESSION['agendamento_invalido'])){
                        echo($_SESSION['agendamento_invalido']);
                        unset($_SESSION['agendamento_invalido']);
                    }

                ?>

        </form>
    </main>
    <script src="script/js.js" defer></script>
</body>
</html>