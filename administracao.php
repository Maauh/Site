<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include "php/link.php";?>
	<title>Administração</title>
</head>

<body class="background">
	<?php include "mini/menu.php";?>
	<div class="container1">
		<?php
			session_start();
			if (isset($_SESSION['user']))
				include_once "mini/perfil.php";
			else
				include_once "mini/login.php";
		?>
		<?php include "mini/footer.php";?>
	</div>
</body>

</html>