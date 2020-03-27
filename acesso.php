<?php include("conexao.php");

$login=$_POST["login"];
$senha=$_POST["senha"];

$sql="SELECT * FROM login WHERE login='$login' and senha='$senha' and ativo='s' ";
$query=mysqli_query($banco, $sql);

$linhas= mysqli_num_rows($query);

if($linhas==0)
{
    echo"<html> <body>";
    echo"<p align=\"center\"> usuário não encontrado!</p>";
    echo"<p align=\"center\"> <a href=\"login.php\">voltar </a></p>";
    echo"</html> </body>";
}else
{
    setcookie("nome_usuario", $login);
    setcookie("senha_usuario", $senha);
    header("location:index.php?link=1");
}

?>
