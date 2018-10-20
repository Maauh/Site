<?php
	session_start();	
	// $conn = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados') or die ("A conexão não foi executada com sucesso");
	$conn = mysqli_connect('localhost','root', '', 'dados');
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$ID = $_POST['ID'];
		$sql = "DELETE FROM ".$_SESSION['TABLENAME']." WHERE ID = '$ID'";
		$conn->query($sql);
		mysqli_close($conn);
		header("Location: ../../".$_SESSION['RETURN']);
	}
	else
		echo "Erro de conexão";
?>