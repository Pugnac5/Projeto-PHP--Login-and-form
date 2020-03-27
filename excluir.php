<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include ("conexao.php");


$codigo     =$_POST["codigo"];


$sql="DELETE FROM cliente WHERE rg='$rg'";

$query = mysqli_query($banco, $sql) or die("Houve um erro na Altereção dos dados.<br><br> Verifique o valor dos dados!!!");

header("location:index.php?link=1")
?>
    
</body>
</html>