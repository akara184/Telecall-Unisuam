<?php
ini_set('display_errors', "1"); //PUTA QUE PARIU, A PORRA DO PHP.INI NÃO ESTÁ ATIVANDO OS ERROS,
                                //ENTÃO EU TIVE QUE USAR A FUNÇÃO PRA ATIVAR PELO CÓDIGO, !!!CARALHO???

$host = "localhost";
$user = "root";
$dataBase = "telecall";
$password = "";

$mysqli = new mysqli($host, $user, $password, $dataBase);
if($mysqli->connect_errno){
  echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>