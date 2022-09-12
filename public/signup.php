<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4House -Criar conta</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter:wght@700&family=Lato&display=swap');
    </style>
</head>
<body id="pag-login">
    <div class="container-left">
        <img src="img/login/background-login.png" alt="" height="100%" width="100%">
    </div>
    <form class="container-login signup" action="acesso.php" method="post">
    <div class="top-login">
    <div class="container-message-user">    
    <?php 
        if(isset($_SESSION['campos_vazios'])){
            echo($_SESSION['campos_vazios']);
            unset($_SESSION['campos_vazios']);
        }
        if(isset($_SESSION['status_cadastro'])){
            echo($_SESSION['status_cadastro']);
            unset($_SESSION['status_cadastro']);
        }
        if(isset($_SESSION['usuario_existe'])){
            echo($_SESSION['usuario_existe']);
            unset($_SESSION['usuario_existe']);
        }
        ?>    
    </div>
        <h1>CRIE SUA CONTA</h1>
         
        <p>Digite seu nome e sobrenome<span>*</span></p>
            <input style="height: 10px;" type="text" name="nome" id="nomeUser" placeholder="Digite nome e sobrenome" required>
        <p>Digite sua data de nascimento <span>*</span></p>
            <input style="height: 10px;" type="date" name="dataNasc" id="dataNasc" placeholder="*somente números" required>
       
            <p>Digite um email <span>*</span></p>
                <input style="height: 10px;" class="form-control" type="text" name="email" id="email" placeholder="ex. joao@gmail.com">
            <p><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.804 9c1.038-1.793 2.977-3 5.196-3 3.311 0 6 2.689 6 6s-2.689 6-6 6c-2.219 0-4.158-1.207-5.196-3h-3.804l-1.506-1.503-1.494 1.503-1.48-1.503-1.52 1.503-3-3.032 2.53-2.968h10.274zm7.696 1.5c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z"/></svg> Insira uma senha <span>*</span></p>
                <input style="height: 10px;" class="form-control" type="password" name="senha" id="senha">
            <p><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.804 9c1.038-1.793 2.977-3 5.196-3 3.311 0 6 2.689 6 6s-2.689 6-6 6c-2.219 0-4.158-1.207-5.196-3h-3.804l-1.506-1.503-1.494 1.503-1.48-1.503-1.52 1.503-3-3.032 2.53-2.968h10.274zm7.696 1.5c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z"/></svg> Confirme sua senha <span>*</span></p>
                <input style="height: 10px;" class="form-control" type="password" name="senha2" id="senha2">
                <?php
                if(isset($_SESSION['senhas_iguais'])){
                    echo($_SESSION['senhas_iguais']);
                    unset($_SESSION['senhas_iguais']);
                }
            ?>
            <a href="login.php"><button id="entrar" type="submit">CRIAR CONTA</button></a>

        <div class="criarConta">
            <h3>Já tem uma conta?</h3>
            <a href="login.php"><strong><h4 id="login" style="color: rgb(63, 89, 180,1);">REALIZAR LOGIN</h4></strong></a>
        </div>
    </form>
</body>
</html>
