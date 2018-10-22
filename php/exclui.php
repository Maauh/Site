<?php
	session_start();	
	include_once "data_base.php";
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$ID = $_POST['ID'];
		$TABLENAME = $_POST['TABLENAME'];
		$sql = "DELETE FROM `$TABLENAME` WHERE ID = '$ID'";
		if (mysqli_query($conn, $sql))
			header("Location: ../".$_POST['RETURN']);
		else
			echo "ERRO: Não foi possível executar.".mysqli_error($conn);
	}
	else
		echo "Erro de conexão";
?>