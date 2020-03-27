<?php include ("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tr>
        <form name="consulta" method="post" action="">
        <td>
           (rg) Digite o Valor:  
            <input name="cliente" type="text" id="cliente">
            <input name="consultar" type="submit" value="Buscar">
            </td>
        </form>
         </tr>
        <tr>
             <td>
             <table width="100%" border="0" cellspacing="2" cellpadding="1">
                <tr bgcolor="00FFFF">
                    <td>RG</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Telefone</td>
                    <td>Email</td>
                </tr>
                <?php
                $cliente= $_POST["cliente"];  

                $sql="SELECT * FROM cliente WHERE rg like'$cliente%' order by rg ";
                $query=mysqli_query($banco, $sql); 
                $bgcolor="#FFFFFF";
                while($resultado = mysqli_fetch_array($query))
                {
                    if ($bgcolor=="#FFFFCC") 
                         $bgcolor="#FFFFFF";
                        else 
                      $bgcolor="#FFFFCC";	
                    print "
                    <tr bgcolor = '#FFFFCC'>
                    <td bgcolor = \"$bgcolor\"> $resultado[rg] </td>
                    <td bgcolor = \"$bgcolor\"> $resultado[nome] </td>
                    <td bgcolor = \"$bgcolor\"> $resultado[endereco] </td>
                    <td bgcolor = \"$bgcolor\"> $resultado[fone] </td>
                    <td bgcolor = \"$bgcolor\"> $resultado[email] </td>		
                
                    </tr>";
                }
                ?>
             </table>
             </td>
         </tr>
    </table>
</body>
</html>