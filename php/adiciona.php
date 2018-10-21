<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados');
	// $conn = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados');
	if ($conn)
	{
		date_default_timezone_set("Etc/GMT+3");
		$TITULO = $_POST['TITULO'];
		$IMGURL = $_POST['IMGURL'];
		$DESCR = $_POST['DESCR'];
		$DAT = date('Y-m-d H:i:s', time());
		$POSTTYPE = $_POST['POSTTYPE'];
		$TABLENAME = $_SESSION['TABLENAME'];
		$sql = "INSERT INTO `$TABLENAME` (`TITULO`, `IMGURL`, `DESCR`, `DAT`, `POSTTYPE`) VALUES ('$TITULO', '$IMGURL', '$DESCR', '$DAT', '$POSTTYPE')";
		if (mysqli_query($conn, $sql))
			header("Location: ../../".$_SESSION['RETURN']);
		else
			echo "ERRO: Não foi possível executar.".mysqli_error($conn);
	}
	else
		echo "Erro de conexão";
?>