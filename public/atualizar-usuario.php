<?php
    include_once('conexao.php');

    if(isset($_POST['nome'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $dataNasc = $_POST['dataNasc'];
        $sexo = $_POST['sexoUser'];
        $email = $_POST['email'];
        $tel1 = $_POST['telefone1'];
        $cep = $_POST['cep'];
        $rua = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $numero = $_POST['numero'];

        $sqlUpdate = "UPDATE users SET nome='$nome',email='$email'  WHERE idUser='$id'";

        $result = $conn->query($sqlUpdate);
    }
    else{
        echo "deu merda";
    }
    header("Location: editar-usuarios.php");
?>
