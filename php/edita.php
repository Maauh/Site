<?php
	session_start();	
	include_once "data_base.php";
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$date = date('d/m/Y h:i a', time());
		$TITULO = $_POST['TITULO'];
		$IMGURL = $_POST['IMGURL'];
		$DESCR = $_POST['DESCR'];
		$ID = $_POST['ID'];
		$POSTTYPE = $_POST['POSTTYPE'];
		$TABLENAME = $_POST['TABLENAME'];
		$sql = "UPDATE `$TABLENAME` SET TITULO = '$TITULO', IMGURL = '$IMGURL', DESCR = '$DESCR', POSTTYPE = '$POSTTYPE' WHERE ID = '$ID'";
		if(mysqli_query($conn, $sql))
			header("Location: ../".$_POST['RETURN']);
		else
			echo "ERROR: Could not able to execute.".mysqli_error($conn);
	}
	else
		echo "Erro de conexão";
?>