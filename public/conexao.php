<?php

define( 'MYSQL_HOST', 'fourhouse-db.ceplxgrj0xpi.us-east-1.rds.amazonaws.com' );
define( 'MYSQL_USER', 'daviDsoareSS' );
define( 'MYSQL_PASSWORD', 'David12304' );
define( 'MYSQL_DB_NAME', 'fourhouse_db' );


try
{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}


/*
$servername = "fourhouse-db.ceplxgrj0xpi.us-east-1.rds.amazonaws.com";
$username = "daviDsoareSS";
$password = "David12304$";
$database = "fourhouse_db";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Falha ao conectar ao banco de dados: ".$conn->error) ;
*/

?>