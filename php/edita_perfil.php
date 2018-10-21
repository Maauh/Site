<?php
	session_start();	
	include_once "data_base.php";
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$date = date('d/m/Y h:i a', time());
		$ID = $_POST['ID'];
		$NOME = $_POST['NOME'];
		$FBID = $_POST['FBID'];
		$INTEGRANTE = isset($_POST['INTEGRANTE']) ? 1 : 0;
		$DESCRICAO = $_POST['DESCRICAO'];
		$FUNCAO = $_POST['FUNCAO'];
		$sql = "UPDATE `usuarios` SET NOME = '$NOME', FBID = '$FBID', INTEGRANTE = '$INTEGRANTE', DESCRICAO = '$DESCRICAO', FUNCAO = '$FUNCAO' WHERE ID = '$ID'";
        if (mysqli_query($conn, $sql))
        {
            $sql = "SELECT * FROM usuarios WHERE ID = '$ID'";
            $query = mysqli_query($conn, $sql);
            $_SESSION['user'] = mysqli_fetch_assoc($query);
			header("Location: ../administracao.php");
        }
		else
			echo "ERRO: Não foi possível executar.".mysqli_error($conn);
	}
	else
		echo "Erro de conexão";
?>