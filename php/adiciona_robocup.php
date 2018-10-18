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
		$sql = "INSERT INTO `robocup` (`TITULO`, `IMGURL`, `DESCR`, `DAT`) VALUES ('$TITULO', '$IMGURL', '$DESCR', '$date')";
		echo $sql."<br>";
		if(mysqli_query($conn, $sql)){
			echo "Records inserted successfully.";
		} else{
			echo "ERROR: Could not able to execute." . mysqli_error($conn);
		}
		mysqli_close($conn);
		header("Location: ../robocup.php");
	}
	else
		echo "Erro de conexão";
?>