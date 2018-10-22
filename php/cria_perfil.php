<?php
	session_start();	
	include_once "data_base.php";
	if ($conn)
	{
		$NOME = $_POST['NOME'];
		$USUARIO = $_POST['USUARIO'];
		$SENHA = $_POST['SENHA'];

		$query = mysqli_query($conn, "SELECT * FROM `usuarios` WHERE USUARIO = '$USUARIO' LIMIT 1");
		if (mysqli_fetch_assoc($query) == NULL)
		{
			$sql = "INSERT INTO `usuarios` (`NOME`, `USUARIO`, `SENHA`) VALUES ('$NOME', '$USUARIO', '$SENHA')";
			if (mysqli_query($conn, $sql))
				header("Location: ../administracao.php");
			else
				echo "ERRO: Não foi possível executar.".mysqli_error($conn);
		}
		else
			echo "Erro o nome de usuário já está em uso.";
	}
	else
		echo "Erro de conexão";
?>