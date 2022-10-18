<?php

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b503ee8da3dc11";
$password = "8aea5597";
$database = "heroku_acd6119eb0eb682";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: ".$conn->error) ;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "forhouse";


?>