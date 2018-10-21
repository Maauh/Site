<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados');
	// $conn = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados');
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$date = date('d/m/Y h:i a', time());
		$TITULO = $_POST['TITULO'];
		$IMGURL = $_POST['IMGURL'];
		$DESCR = $_POST['DESCR'];
		$ID = $_POST['ID'];
		$POSTTYPE = $_POST['POSTTYPE'];
		$TABLENAME = $_SESSION['TABLENAME'];
		$sql = "UPDATE `$TABLENAME` SET TITULO = '$TITULO', IMGURL = '$IMGURL', DESCR = '$DESCR', POSTTYPE = '$POSTTYPE' WHERE ID = '$ID'";
		if(mysqli_query($conn, $sql))
			header("Location: ../".$_SESSION['RETURN']);
		else
			echo "ERROR: Could not able to execute.".mysqli_error($conn);
	}
	else
		echo "Erro de conexão";
?>