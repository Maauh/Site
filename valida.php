<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados') or die ("A conexão não foi executada com sucesso");
	if((isset($_POST['username'])) && (isset($_POST['password'])))
	{
		$user = mysqli_real_escape_string($conn, $_POST['username']);
		$pass = mysqli_real_escape_string($conn, $_POST['password']);
			
		$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE USERNAME = '$user' AND PASS = '$pass' LIMIT 1");
		$resultado = mysqli_fetch_assoc($query);

		if(isset($resultado))
		{
			$_SESSION['logado'] = 1;
			$_SESSION['ID'] = $resultado['ID'];
			$_SESSION['NOME'] = $resultado['NOME'];
			$_SESSION['PASS'] = $resultado['PASS'];
		}
		header("Location: index.php");
	}
?>