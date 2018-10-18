<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados');
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$date = date('d/m/Y h:i a', time());
		$TITULO = $_POST['TITULO'];
		$IMGURL = $_POST['IMGURL'];
		$DESCR = $_POST['DESCR'];
		$ID = $_POST['ID'];
		$sql = "UPDATE `robocup` SET TITULO = '$TITULO', IMGURL = '$IMGURL', DESCR = '$DESCR' WHERE ID = '$ID'";
		$conn->query($sql);
		mysqli_close($conn);
		header("Location: ../robocup.php");
	}
	else
		echo "Erro de conexão";
?>