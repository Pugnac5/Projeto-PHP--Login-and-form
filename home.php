<?php
include ("conexao.php"); ?>
<html>
<head>
<title> Curso Completo de PHP - www.mjailton.com.br </title>
</head>
<body>
	<table width = "100%" border = "0" cellspacing = "0" align= "center" cellpadding = "0" bordercolor="#000000">
	<tr bgcolor ="#00FFFF">
	<td> nome</td>
	  <td > Endereço</td>
	  <td> Cidade</td>
	  <td> Bairro</td>
	  <td> Cep</td>
	  <td> Email</td> 	
	</tr>
	<?php
		$sql="select * from cliente";
		$query = mysqli_query($banco, $sql);
		$bgcolor="#FFFFFF";
		while($resultado = mysqli_fetch_array($query))
		{
			if ($bgcolor=="#FFFFCC") 
				 $bgcolor="#FFFFFF";
				else 
			  $bgcolor="#FFFFCC";	
			print "
			<tr bgcolor = '#FFFFCC'>
			<td bgcolor = \"$bgcolor\"> $resultado[nome] </td>
			<td bgcolor = \"$bgcolor\"> $resultado[endereco] </td>
			<td bgcolor = \"$bgcolor\"> $resultado[cidade] </td>
			<td bgcolor = \"$bgcolor\"> $resultado[bairro] </td>
			<td bgcolor = \"$bgcolor\"> $resultado[cep] </td>
			<td bgcolor = \"$bgcolor\"> $resultado[email] </td>		
		
			</tr>";
		}

	?>
	</table>
</body>
</html>