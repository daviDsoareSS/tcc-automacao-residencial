<?php
    include_once('conexao.php');
    
    if(!empty($_GET['id'])){

        $idUser = $_GET['id'];
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
    <title>Document</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>  
    <header>
        <div class="container-header">
            <h1>Dashboard</h1>
            <small>Acesso restrito</small>
        </div>
        <div class="container-right-header">
            <p>Atendente: <strong>David Soares Silva</strong></p>
        </div>
    </header>
    <?php
    include_once('includes/sidebar.php');
    ?>
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
                    
                ?>
            </p>
        </div>
        <form class="container-agendamento" action="#">
            <h2>Agendar serviço</h2>
            <label for="input-servicos">Serviço</label>
            <select class="custom-select" id="input-servicos" required>
                <option selected>Escolha o serviço...</option>
                <option value="portao-eletrico">Portão Elétrico</option>
                <option value="ambientacao">Ambientação</option>
                <option value="sensor-de-proximidade">Sensor de proximidade</option>
            </select>
            <div class="form-group">
                <label for="">Endereço</label><br>
                <input type="radio" id="endereco-cadastrado" name="endereco" value="<?php echo "<small>"."  ".$user_data_endereco['endereco']."</small>"?>,<?php echo "<small>".$user_data_endereco['bairro']."</small>"?> Nº<?php echo "<small>"."  ".$user_data_endereco['numero']."</small>"?> - <?php echo "<small>".$user_data_endereco['cep']."</small>"?>" checked="check"
                data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true">
                <label for="endereco-cadastrado">Endereço cadastrado<br><small><i><?php echo "<small>"."  ".$user_data_endereco['endereco']."</small>"?>,<?php echo "<small>".$user_data_endereco['bairro']."</small>"?> Nº<?php echo "<small>"."  ".$user_data_endereco['numero']."</small>"?> - <?php echo "<small>".$user_data_endereco['cep']."</small>"?></i></small></label><br>
                <input type="radio" id="outro-endereco" name="endereco" value="outro-endereco"
                class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-controls="collapseExample">
                <label for="outro-endereco">Outro endereço</label><br>
            </div>
                <div class="container-endereco">
                        <div class="collapse" id="collapseExample">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" placeholder="ex. 0000-000">
                                <label for="rua">Rua</label>
                                <input type="text" class="form-control" name="endereco" id="logradouro" placeholder="Rua">
                            </div>
                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input class="form-control type="text" name="bairro" id="bairro">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="localidade">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEstado">Número</label>
                                    <input class="form-control" type="text" name="numero-casa" id="numero-casa">
                                </div>
                        </div>
                </div>
                <div class="form-group">
                    <label for="data-agendamento">Data do agendamento</label>
                    <input type="date" min="2022-10-15" max="2024-01-01">
                    <br>
                    <label for="horario-agendamento">Horário do agendamento</label>
                    <input type="time">
                </div>
                <div class="form-group">
                    <label for="tel1">Telefone</label>

                    <input class="form-control" type="text"></option>
                </div>
                <button class="button-agendar" type="submit">Agendar</button>
        </form>
    </main>
    <script src="script/js.js" defer></script>
</body>
</html>