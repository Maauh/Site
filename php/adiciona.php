<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados');
	// $conn = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados') or die ("A conexão não foi executada com sucesso");
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$date = date('d/m/Y h:i a', time());
		$TITULO = $_POST['TITULO'];
		$IMGURL = $_POST['IMGURL'];
		$DESCR = $_POST['DESCR'];
		$sql = "INSERT INTO ".$_SESSION['TABLENAME']." (`TITULO`, `IMGURL`, `DESCR`, `DAT`) VALUES ('$TITULO', '$IMGURL', '$DESCR', '$date')";
		if(mysqli_query($conn, $sql)){
			echo "Records inserted successfully.";
		} else{
			echo "ERROR: Could not able to execute.".mysqli_error($conn);
		}
		mysqli_close($conn);
		header("Location: ../../".$_SESSION['RETURN']);
	}
	else
		echo "Erro de conexão";
?>