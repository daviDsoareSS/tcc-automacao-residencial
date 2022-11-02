<?php
    include_once('conexao.php');
    session_start();
    if(!empty($_GET['id'])){

        $idUser = $_GET['id'];
       
        $sqlSelect = "SELECT * FROM users WHERE idUser= $idUser";
        $sqlSelectEndereco = "SELECT * FROM endereco WHERE idUser= $idUser";

        $sqlDelete = "DELETE FROM heroku_acd6119eb0eb682.users WHERE idUser='$idUser'";

        $result = $conn->query($sqlDelete);
        header("Location: deletar-usuarios.php");
        
       
    }
    
    $conn->close();
    exit;
?>
