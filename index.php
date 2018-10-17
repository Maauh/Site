<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <title>Home</title>
</head>

<body class="background">
  <nav class="navbar navbar-expand-sm navbar-dark bg-gradient-primary ">
    <div class="container ">
      <a class="navbar-brand h1 mb-0" href="index.php">HOME</a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSite">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="robocup.php">RobôCup</a></li>
          <li class="nav-item"><a class="nav-link " href="historia.php">Historia do Robô</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Integrantes</a></li>
          <li class="nav-item"><a class="nav-link" href="diversao.html">Diversão</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container1">
    <div>
      <h1 class="display-3 ">POTATOES PARTY</h1>
    </div>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 img-container">
        <img alt="#" src="imagem/nos.jpg" class="img-thumbnail" />
      </div>
      <div class="col-12 col-sm-12 col-md-6">
        <?php
          if (isset($_SESSION))
            echo MEME

        ?>
        <form class="form-signin" method="POST" action="valida.php">
          <h2 class="form-signin-heading">Login</h2>
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br>
          <label for="inputPassword" class="sr-only">Senha</label>
          <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required><br>
          <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
        </form>
      <p class="text-center text-danger">
        <?php if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        }?>
      </p>
      <p class="text-center text-success">
        <?php 
        if(isset($_SESSION['logindeslogado'])){
          echo $_SESSION['logindeslogado'];
          unset($_SESSION['logindeslogado']);
        }
        ?>
        <br>
      </div>
      <footer class="page-footer font-small cyan darken-3">
        <div class="footer-copyright text-center py-3">
          &copy; 2018 Copyright, Todos os Direitos Reservados. Criação e implementação Grupo Potatoes Party.
        </div>
      </footer>
    </div>
</body>

</html>