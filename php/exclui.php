<?php
	session_start();	
	include_once "data_base.php";
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