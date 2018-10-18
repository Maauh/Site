<?php
	session_start();	
	$conn = mysqli_connect('localhost','root', '', 'dados') or die ("A conexão não foi executada com sucesso");
	date_default_timezone_set("Etc/GMT+3");
	$date = date('m/d/Y h:i:s a', time());
	// echo $_POST['TITULO'].",".$_POST['IMGURL'].",". $_POST['DESCR'].",". null.",". $date;
	$conn->query("INSERT INTO robocup (TITULO, IMGURL, DESCR, DAT) VALUES (".$_POST['TITULO'].",".$_POST['IMGURL'].",". $_POST['DESCR'].",". $date.")");
	header("Location: robocup.php");
?>