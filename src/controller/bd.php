<?php

$host = "localhost";
$user = "root";
$dataBase = "telecallDados";
$password = "";


$mysqli = new mysqli($host, $user, $password, $dataBase);
if($mysqli->error){
    die("falha ao conectar:" . $mysqli->connect_error);
}


?>