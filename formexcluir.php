<?php
include ("conexao.php");
$nome_alterar= $_POST["selecao"];
$sql = "SELECT * FROM cliente WHERE nome='$nome_alterar'";
$query = mysqli_query($banco, $sql) or die ("Não foi possível realizar a consulta");
$linha = mysqli_fetch_array($query);
$nome=$linha["nome"];
$endereco=$linha["endereco"];
$bairro=$linha["bairro"];
$cep=$linha["cep"];
$cidade=$linha["cidade"];
//$estado=$linha["estado"];
$fone=$linha["fone"];
$sexo=$linha["sexo"];
$email=$linha["email"];
$rg=$linha["rg"];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formcliente</title>
</head>
<body>  
<table width="50%" border="1" cellspacing="0" align="center"  cellpadding="0" bordercolor="#000000">
<tr>
    <td><form name="formcliente" method="post" action="excluir.php">
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr align="center"> <td colspan="6"> Exclusao de cadastro</td></tr>
    <tr>
        <td>Nome: </td>
        <td colspan="5"><input type="text" name="nome" size="73" value="<?php print"$nome";?>"> 
        
    </td>
    </tr>    
    <tr>
        <td>Endereço: </td>
        <td colspan="5"><input type="text" name="endereco" size="73"  value="<?php print"$endereco";?>"> 
        
    </td>
    </tr>
    <tr>
        <td>Bairro </td>
        <td colspan="5"><input type="text" name="bairro" size="73" value="<?php print"$bairro";?>"> </td>
    </tr>   
    <tr>
        <td >Cidade: </td>
        <td width="38%" ><input type="text" name="cidade" size="30" value="<?php print"$cidade";?>"> </td>
      
        <td width="6%">CEP: </td>
        <td width="20%" ><input type="text" name="cep" size="17" value="<?php print"$cep";?>"> </td>
        <td width="4%">UF: </td>
        <td width="20%" >
            <select name="uf">
            <option value="MA">BA </option>
            <option value="MA">MG </option>
            <option value="MA">RJ </option>
            <option value="MA">MA </option>
            <option value="MA">DF </option>
            <option value="MA">RR </option>
            <option value="MA">PR </option>
            <option value="MA">SP </option>
            <option value="MA">RN </option>
            <option value="MA">GO </option>

    </select>
    </td>
 
    </tr>
    <tr>
        <td >Fone: </td>
        <td width="30%" ><input type="text" name="fone" size="30" value="<?php print"$fone";?>"> </td>
      
        <td width="6%">RG: </td>
        <td width="20%" ><input type="text" name="rg" size="17"  value="<?php print"$rg";?>"> </td>
        
        </td>

        <tr>
        <td>Email </td>
        <td colspan="5"><input type="text" name="email" size="73" value="<?php print"$email";?>"> </td>
    </tr>  
    <td>Sexo: </td>
    <td colspan="5" > Masculino <input type="radio" name="sexo" value="M" <?php if($sexo=="M") {print "checked";}?>> 
   
    Feminino <input type="radio" name="sexo" value="F" <?php if($sexo=="F") {print "checked";}?> > </td>
    </tr>
    <tr>
    <td colspan="6" align="center"><input  type="submit" name="salvar" value="Excluir">
    
   
    </td>
</tr>    
</table>

</form>





    </td>
</tr>


</table>   

</body>
</html>