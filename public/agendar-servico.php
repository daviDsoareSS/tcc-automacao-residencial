<?php

    include_once('conexao.php');
    session_start();

    $nomeServico = mysqli_real_escape_string($conn, trim($_POST['servico']));
    $endereco = mysqli_real_escape_string($conn, trim($_POST['endereco']));
    $cep = mysqli_real_escape_string($conn, trim($_POST['cep']));
    $logradouro = mysqli_real_escape_string($conn, trim($_POST['logradouro']));
    $bairro = mysqli_real_escape_string($conn, trim($_POST['bairro']));
    $cidade = mysqli_real_escape_string($conn, trim($_POST['cidade']));
    $numeroCasa = mysqli_real_escape_string($conn, trim($_POST['numero-casa']));
    $dataAgendamento = mysqli_real_escape_string($conn, trim($_POST['dataAgendamento']));
    $horaAgendamento = mysqli_real_escape_string($conn, trim($_POST['horaAgendamento']));
    $tel = mysqli_real_escape_string($conn, trim($_POST['tel']));
    
    $idUser = $_SESSION['idUser'];

    $statusServico = "Pendente";

    $valorTeste = $_SESSION['endereco'].", ".$_SESSION['bairro']." Nº".$_SESSION['numero']." - ".$_SESSION['cep'];

    // Pegando o id so Serviço que o usuário escolheu na tel a agendamento.php 
    $sql = "SELECT idServico FROM servico WHERE nomeServico = '$nomeServico'";

    $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

    if($result->num_rows > 0){
         $row = mysqli_fetch_assoc($result);
    }

    $idServico = $row['idServico'];

    // Peguei o id do Serviço


    if((empty($cep) && empty($logradouro) && empty($bairro) && empty($cidade) && empty($numeroCasa)
       && $endereco == $valorTeste) || (!empty($cep) && !empty($logradouro) && !empty($bairro) && !empty($cidade) && !empty($numeroCasa) && $cep == $_SESSION['cep'] && $numeroCasa == $_SESSION['numero'])){
        
        // Pegando o id do endereço que o usuário cadastrou no dia em que criou a sua conta no site 
        $numero = $_SESSION['numero'];
        $cep = $_SESSION['cep'];
        
        $sql = "SELECT idEndereco FROM endereco WHERE idUser = '$idUser' AND numero = '$numero' AND cep = '$cep' ";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
        }

        $idEndereco = $row['idEndereco'];
        // Peguei o id do Endereço

        // Inseri na tabela agendamento os valores do agendamento

        $statusServico = "Pendente";

        $sql = "INSERT INTO agendamento VALUES (DEFAULT, '$dataAgendamento', '$horaAgendamento', '$statusServico', '$idUser', '$idEndereco', '1', '$idServico')";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        echo "Serviço agendado com sucesso";

        header("Location: servicos-contratados.php");

    }else if($endereco == "outro-endereco" && !empty($cep) && !empty($logradouro) && !empty($bairro) && !empty($cidade) && !empty($numeroCasa)){

        $sql = "INSERT INTO endereco VALUES (DEFAULT, '$logradouro', '$numeroCasa', '$cep', '$bairro', '$cidade', '$idUser')";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        // Pegando o id do endereço que o usuário cadastrou no dia em que criou a sua conta no site 
        
        $sql = "SELECT idEndereco FROM endereco WHERE idUser = '$idUser' AND numero = '$numeroCasa' AND cep = '$cep' ";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
        }

        $idEndereco = $row['idEndereco'];
        // Peguei o id do Endereço

        $sql = "INSERT INTO agendamento VALUES (DEFAULT, '$dataAgendamento', '$horaAgendamento', '$statusServico', '$idUser', '$idEndereco', '1', '$idServico')";

        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);  
        
        echo "Serviço agendado com sucesso";

        header("Location: servicos-contratados.php");

    }else{

        $_SESSION['agendamento_invalido'] = "<p style='color:red';>Por favor, insira os dados corretamente para realizar o agendamento.</p>";
        
        header("Location: agendamento.php?id=$idUser");   
    
    }

?>
    