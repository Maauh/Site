<?php
	session_start();
	unset($_SESSION['user']);
	header("Location: ../administracao.php");
?>