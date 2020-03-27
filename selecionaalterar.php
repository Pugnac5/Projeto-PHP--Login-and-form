
<?php
include ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="alterar" method="post" action="index.php?link=4">
    selecione um nome:
    <select name="selecao" size="1" id="selecao">
        <?php
        echo "$opcao";
        $sql="SELECT nome FROM cliente order by nome";
		$query = mysqli_query($banco, $sql) or die ("Nao foi possovel realizar a consulta <br><br> Verifique a conexão");
        while($resultado = mysqli_fetch_array($query))
        {
            ?>
            <option>
                <?=$resultado["nome"]?>
        </option>
            <?php
        }
        mysqli_free_result($query);
       ?>
</select>
<input name="ok" type="submit" value="OK">
    </form>
</body>
</html>