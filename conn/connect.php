<?php 

$host = "localhost";
$database = "ti93phpdb01";
$user = "root";
$pass = "";
$charset = "utf8";
$port = "3306";

$conn = new mysqli($host, $user, $pass, $database, $port);
mysqli_set_charset($conn, $charset);

if ($conn->connect_error){
    echo "Atenção ERRO:".$conn->connect_error;
}

// Endereço para checar o status da conexão //
//http://127.0.0.1/tiphpnt/conn/connect.php

?>