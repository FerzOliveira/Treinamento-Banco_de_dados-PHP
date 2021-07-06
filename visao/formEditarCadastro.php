<?php include("../controle/controle_cliente.php") ?>
<?php $id = $_POST["id"]; //Recebe valor ID ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
//Instanciar classe Cliente - Start	
	
	$obj_cliente = new Cliente();

	$arrayCliente = $obj_cliente -> busca($id);
	
//Instanciar classe Cliente - Start	
?>
<body>
	
	<form action="">
		Nome:  <input type="text" name="nome" id="campoNome" value="<?php echo $arrayCliente[0]['nomeCliente'] ?>"><br>
		Idade: <input type="text" name="idade" id="campoIdade" value="<?php echo $arrayCliente[0]['idadeCliente'] ?>">
		<input type="hidden" name="id" id="campoId" value="<?php echo $arrayCliente[0]['idCliente'] ?>">
		
		<input type="button" id="atualizar" value="Editar" onClick=editar()>
		<input type="hidden" name="acao" value="update">
		
	
	</form>
	<br>
	<input type="button" onClick="telaListar();" value="Listar" >
	
	
	
</body>
</html>