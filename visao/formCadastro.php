<?php include("../controle/controle_cliente.php") ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
</head>
<body>
	
	<form id="dados" class="form">
		
		<p>Nome:<input class="nome" name="nome" id="campoNome" type="text"></p>
		<p>Idade:<input class="idade" name="idade" id="campoIdade" type="text"></p>
		
		<input type="button" id="inserir" value="Gravar" OnClick="cadastrar()">
		<input type="hidden" name="acao" value="insere">
	
	</form>
	<br>
	<input type="button" onClick="telaListar();" value="Listar" >

</body>
</html>