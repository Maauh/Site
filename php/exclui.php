<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados');
	// $conn = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados');
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$ID = $_POST['ID'];
		$sql = "DELETE FROM ".$_SESSION['TABLENAME']." WHERE ID = '$ID'";
		if (mysqli_query($conn, $sql))
			header("Location: ../".$_SESSION['RETURN']);
		else
			echo "ERRO: Não foi possível executar.".mysqli_error($conn);
	}
	else
		echo "Erro de conexão";
?>