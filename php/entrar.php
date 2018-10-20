<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados');
	// $conn = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados');
	if ($conn)
	{
		if((isset($_POST['username'])) && (isset($_POST['password'])))
		{
			$user = mysqli_real_escape_string($conn, $_POST['username']);
			$pass = mysqli_real_escape_string($conn, $_POST['password']);
			$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE USUARIO = '$user' AND SENHA = '$pass' LIMIT 1");
			$_SESSION['user'] = mysqli_fetch_assoc($query);
			header("Location: ../administracao.php");
		}
	}
	else
		echo "Erro de conexão";
?>