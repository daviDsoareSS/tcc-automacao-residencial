<?php
    session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ola Mundo</h1>
    <?php
        echo $_SESSION['recuperar-nome']."<br>";
        echo $_SESSION['recuperar-email'];
       
    ?>
</body>
</html>