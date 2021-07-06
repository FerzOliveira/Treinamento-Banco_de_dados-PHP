<?php

class ConexaoDB{
	
	function con(){
		$conectar = mysqli_connect("localhost","root","")or die(mysqli_error()); //conecta com o banco
		
		mysqli_select_db($conectar,"mvc")or die(mysqli_error()); //seleciona o banco
	
		return $conectar;
	}
}

/*
//modelo - start
	//conexao banco
	$conectar = mysqli_connect("localhost","root","")or die(mysqli_error());
	
	//seleciona banco
	mysqli_select_db($conectar,"mvc")or die(mysqli_error());
//modelo - end


	$sqli = "SELECT * FROM cliente";
	
	$resultado = mysqli_query($conectar, $sqli);

*/	
?>