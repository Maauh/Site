<?php
	$conn = mysqli_connect('localhost','root', '', 'dados') or die ("A conexão não foi executada com sucesso");
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>