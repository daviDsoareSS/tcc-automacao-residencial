<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4House -Login</title>
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
    <img src="img/login/background-login.png" alt="" height="100%" w7uy'1    idth="100%">
    </div>
    <form class="container-login" action="entrada-login.php" method="post">
    <div class="top-login login-user">
        <h1>LOGIN</h1>
        <small>Email:</small>
        <input type="text" name="email" id="" required>
        <small>Senha:</small>
        <input type="password" name="senha" required>
        <a href="index.php"><button id="entrar" type="submit">ENTRAR</button></a>
        <a href="recuperar-senha.php"><h3 id="recuperar-senha">Esqueceu a senha?</h3></a>
        </div>
        <div class="criarConta">
            <h3>É novo por aqui?</h3>
            <a href="signup.php"><strong><h4 id="criar-conta">CRIAR CONTA</h4></strong></a>
        </div>
    </form>
</body>
</html>
