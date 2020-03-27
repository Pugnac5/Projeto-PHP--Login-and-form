
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
    <td><form name="formcliente" method="post" action="gravar.php">
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr align="center"> <td colspan="6"> Cadastro de Clientes</td></tr>
    <tr>
        <td>Nome: </td>
        <td colspan="5"><input type="text" name="nome" size="73"> 
    </td>
    </tr>    
    <tr>
        <td>Endereço: </td>
        <td colspan="5"><input type="text" name="endereco" size="73"> </td>
    </tr>
    <tr>
        <td>Bairro </td>
        <td colspan="5"><input type="text" name="bairro" size="73"> </td>
    </tr>   
    <tr>
        <td >Cidade: </td>
        <td width="38%" ><input type="text" name="cidade" size="30"> </td>
      
        <td width="6%">CEP: </td>
        <td width="20%" ><input type="text" name="cep" size="17"> </td>
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
        <td width="30%" ><input type="text" name="fone" size="30"> </td>
      
        <td width="6%">RG: </td>
        <td width="20%" ><input type="text" name="rg" size="17"> </td>
        
        </td>

        <tr>
        <td>Email </td>
        <td colspan="5"><input type="text" name="email" size="73"> </td>
    </tr>  
    <td>Sexo: </td>
    <td colspan="5" > Homem <input type="radio" name="sexo" value="M"> 
     Mulher <input type="radio" name="sexo" value="F"> </td>
    </tr>
    <tr>
    <td colspan="6" align="center"><input  type="submit" name="salvar" value="Salvar">
    
    <input type="reset" name="cancelar" value="Cancelar">
    </td>
</tr>    
</table>

</form>
 </td>
</tr>


</table>   

</body>
</html>