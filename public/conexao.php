<?php

$servername = "fourhouse-server-flexible.mysql.database.azure.com";
$username = "CloudSA8cf60b08";
$password = "David12304$";
$database = "fourhouse-db";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: ".$conn->error) ;
mysqli_set_charset($conn,'utf8');
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "forhouse";


?>