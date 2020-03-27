<?php
$host= "localhost";
$usuario = "root";
$senha = "";
$db="aulaphp";
$banco = mysqli_connect($host, $usuario, $senha, $db) or die ("Não foi possível fazer a conexão com servidor de banco de dados");
//mysqli_select_db($banco) or die ("Não foi possível encontrar o banco de dados especificado");

?>