<?php
    include("conexao.php");
    
    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email'])== 0){
            echo "<p>Preencha o campo email.</p>";
        }else if(strlen($_POST['senha'])== 0){
                echo "<p>Preencha o campo senha.</p>";
        }
    else{
        $email = mysqli_real_escape_string($conn,trim($_POST['email']));
        $senha = mysqli_real_escape_string($conn,trim(base64_encode($_POST['senha'])));
        
        $sql = "SELECT * FROM users WHERE email = '$email' AND senha= '$senha'";
        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        $quantidade = $result->num_rows;

        if($quantidade == 1){ 
            $user = $result->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $user['idUser'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['dataNasc'] = $user['dataNasc'];
            $_SESSION['sexoUser'] = $user['sexoUser'];

            $sql = "UPDATE users SET ultimoAcesso = '$dataUltimoAcesso' WHERE email = '$email' AND senha= '$senha'";
            $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

            header("Location: index.php");
        
        }else {
            $_SESSION['usuario_invalido']= "<p style='color:red';>Usuário não encontrado!</p>";
            header("Location: login.php");
        }
    }
}








    /*$email=$_POST['email'];
    $senha=$_POST['senha'];
    $_SESSION['email'] = $email;
    //$senha=base64_encode($senha);
    if ($conn->connect_error) {
        die("Falha na conexão " . $conn->connect_error);
    }

    $sql = "SELECT email, senha FROM users;";
    $dadosUser = "SELECT email , nome , dataNasc , pesoIni, altura , sexo FROM users;";
    $result = $conn->query($sql);  // aqui
    $logged = false;
    while($row = $result->fetch_assoc()) {

        if($row['email']==$email && $row['senha']==$senha){
            header("location:index.php");   
            $logged = true;
            $_SESSION['email'] = $email;
        }  
        else
            echo "Usuário não encontrado!";
    }

    if(isset($_SESSION['email'])){
        if($_SESSION['email']!=""){
            $logged = true;
        }
    }
    if(isset($_GET['sair'])){
        $_SESSION['email']="";
        $logged = false;
        unset($_SESSION['email']);
        session_destroy();
        header('login.html');
        
    }
    $conn->close();

*/
?>