<?php

$servername = "fourhouse-db-server.mysql.database.azure.com";
$username = "daviDsoareSS@fourhouse-db-server";
$password = "David12304$";
$database = "fourhouse_db";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: ".$conn->error) ;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "forhouse";


?>