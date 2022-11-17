<?php

$servername = "fourhouse-server-db.database.windows.net
";
$username = "daviDsoareSS";
$password = "David12304$";
$database = "fourhouse_db";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: ".$conn->error) ;
mysqli_set_charset($conn,'utf8');
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "forhouse";


?>