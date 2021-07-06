// JavaScript Document

function telaListar(){ //Função redireciona a tela Listar Clientes
	
	window.location.href = 'listarClientes.php';
}
function telaCadastrar(){ //Função redireciona a tela Cadastrar
	
	window.location.href = 'formCadastro.php';
}
function telaEditar(valor){ //Função redireciona a tela Editar
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
	
	//window.location.href = 'formEditarCadastro.php?id='+valor;
}
function deletar(valor){ 
	
	var conf = confirm('Tem certeza que quer apagar?'); //Confirmção da ação
	
	if(conf == true){
		$.ajax({  //encaminha os dados para o controle_cliente

		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"delete",id:valor},

		success: function(data){
			alert('Deletado com sucesso');
			location.reload();
			}
		})
	}
}
function cadastrar(valor){ 
	
	nome  = $('#campoNome').val();
	idade = $('#campoIdade').val();
	
	$.ajax({  //encaminha os dados para o controle_cliente
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nome:nome,idade:idade},
		
		success: function(data){
			alert("Cadastrado com sucesso");
			location.reload();
		}
	})
}
function editar(valor){
	
	nome  = $('#campoNome').val();
	idade = $('#campoIdade').val();
	id    = $('#campoId').val();
	
	$.ajax({  //encaminha os dados para o controle_cliente
		
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"update",nome:nome,idade:idade,id:id},
		
		success: function(data){
			alert("Editado com sucesso");
			telaListar();
		}
	})
}