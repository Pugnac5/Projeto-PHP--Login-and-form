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



$nome       =$_POST["nome"];
$endereco   =$_POST["endereco"];
$bairro     =$_POST["bairro"];
$cidade     =$_POST["cidade"];
$cep        =$_POST["cep"];
$uf         =$_POST["uf"];
$fone       =$_POST["fone"];
$rg         =$_POST["rg"];
$email      =$_POST["email"];
$sexo       =$_POST["sexo"];

$sql="UPDATE cliente SET 
    nome='$nome',
    endereco='$endereco',
    bairro='$bairro',
    cidade='$cidade',
    cep='$cep',
    uf='$uf', 
    fone='$fone', 
    email='$email', 
    sexo='$sexo',
    WHERE rg='$rg'
   ";

$query = mysqli_query($banco, $sql) or die("Houve um erro na Altereção dos dados.<br><br> Verifique o valor dos dados!!!");

header("location:index.php?link=1")
?>
    
</body>
</html>