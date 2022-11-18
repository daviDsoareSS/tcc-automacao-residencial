<?php

$servername = "fourhouse-db.ceplxgrj0xpi.us-east-1.rds.amazonaws.com";
$username = "daviDsoareSS";
$password = "David12304$";
$database = "fourhouse_db";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: ".$conn->error) ;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "forhouse";


?>