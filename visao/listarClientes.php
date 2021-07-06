<?php include("../controle/controle_cliente.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar os Clientes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
</head>
<?php
//Instanciar classe Cliente - Start	
	
	$obj_cliente = new Cliente();

	$arrayClientes = $obj_cliente -> busca();
	
//Instanciar classe Cliente - Start	
?>
<body>
	
	<table border="1">
		<tr>
			<td>Nome</td>
			<td>Idade</td>
			<td style="text-align: center">Ação</td> 
		</tr>
		
		
	
	<?php
	//echo '<pre>';
	//var_dump($arrayClientes);
	//echo '</pre>';
	
		foreach($arrayClientes as $value){ //preenche a tabela com os valores
		?>
		<tr>
			<td><?php echo $value['nomeCliente'] ?></td>
			<td><?php echo $value['idadeCliente'] ?></td>
			<td> <input type="button" onClick="telaEditar(<?php echo $value['idCliente'] ?>)" value="Editar"/> 
			<input type = "button" onClick = "deletar(<?php echo $value['idCliente'] ?>);" value = "Apagar"/> </td>
		</tr>
		<?php	
		}
	?>
	</table>
	<br>
	<input type="button" onClick="telaCadastrar()" value="Cadastrar" > 
	
	<form id="formulario" action="formEditarCadastro.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>

	
</body>
</html>