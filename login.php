<?php include ("conexao.php");?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 
    <form method="post" action="acesso.php">
   <p align="center">  login:<input name="login" type="text" size="10" value=""></p>
   <p align="center"> Senha:<input name="senha" type="password" size="10"value=""></p>
   <p align="center"> <input name="enviar" value="Enviar" type="submit"></p>
    </form>
</body>
</html>