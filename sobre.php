<!doctype html>
<html lang="pt-br">

<head>
    <title>Sobre Nós</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
                    <li class="nav-item active"><a class="nav-link" href="sobre.php">Integrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="diversao.html">Diversão</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container1">
        <br>
        <div class="container">
            <div class="row">
                <?php
                    // $conexao = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados') or die ("A conexão não foi executada com sucesso");
                    $conexao = mysqli_connect('localhost','root', '', 'dados') or die ("A conexão não foi executada com sucesso");
                    $conexao->set_charset("utf-8");
                    $consulta = "SELECT NOME, ID, DESCR, FUNC FROM integrantes";
                    $resultado = mysqli_query($conexao,$consulta);
                    while(list($NOME, $ID, $DESCR, $FUNC) = mysqli_fetch_row($resultado)) {
                        //$NOME = utf8_encode($NOME);
                        //$DESCR = utf8_encode($DESCR);
                        //$FUNC = utf8_encode($FUNC);
                        echo "
                        <div class=\"col-12 col-sm-6 col-md-6 perfil-sobre-nos\">
                            <div class=\"row perfil-moldura\">
                                <div class=\"col-12 col-sm-4 col-md-4 img-container\">
                                    <a href=\"https://facebook.com/profile.php?id=$ID\"><img alt=\"#\" src=\"https://graph.facebook.com/$ID/picture?type=large\" class=\"img-thumbnail foto-perfil\"/></a>
                                </div>
                                <div class=\"col-12 col-sm-8 col-md-8\">
                                    <h5>$NOME</h5>
                                    <p>$DESCR</p>
                                    <p>$FUNC</p>
                                </div>
                            </div>
                        </div>";
                    }
                ?>	
            </div>
        </div>
        <footer class="page-footer font-small cyan darken-3">
            <div class="footer-copyright text-center py-3">
                &copy; 2018 Copyright, Todos os Direitos Reservados. Criação e implementação Grupo Potatoes Party.
            </div>
        </footer>
    </div>
</body>

</html>