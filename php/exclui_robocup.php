<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados');
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$ID = $_POST['ID'];
		$sql = "DELETE FROM `robocup` WHERE ID = '$ID'";
		$conn->query($sql);
		mysqli_close($conn);
		header("Location: ../robocup.php");
	}
	else
		echo "Erro de conexão";
?>