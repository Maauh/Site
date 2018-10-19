<!DOCTYPE html>

<head>
	<title>Administração</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body class="background">
	<nav class="navbar navbar-expand-sm navbar-dark bg-gradient-primary ">
		<div class="container">
			<a class="navbar-brand h1 mb-0" href="index.php">HOME</a>
			<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSite">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSite">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="robocup.php">RobôCup</a></li>
					<li class="nav-item"><a class="nav-link " href="historia.php">Historia do Robô</a></li>
					<li class="nav-item"><a class="nav-link" href="sobre.php">Integrantes</a></li>
					<li class="nav-item"><a class="nav-link" href="diversao.php">Diversão</a></li>
					<li class="nav-item active"><a class="nav-link" href="administracao.php">Administração</a></li>
				</ul>
			</div>
		</div>
	</nav>
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