<?php 
//IsSet: verifica se a variavel foi setada
if(IsSet($_COOKIE["nome_usuario"]))
    $nome_usuario =$_COOKIE["nome_usuario"];

    if(IsSet($_COOKIE["senha_usuario"]))
    $senha_usuario= $_COOKIE["senha_usuario"]; 
 if(!(empty($nome_usuario) or empty($senha_usuario )))
 {
    include("conexao.php");
    $sql="SELECT * FROM login WHERE login='$nome_usuario' and senha='$senha_usuario' and ativo='s' ";
    $query=mysqli_query($banco, $sql);
    $linhas= mysqli_num_rows($query);
    if($linhas==0)
    {
        setcookie("nome_usuario");
        setcookie("senha_usuario");
        header("location:login.php");
        exit;
    }
 }else
 {
    header("location:login.php");
    exit;
 }
?> 