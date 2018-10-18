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

    <title>RobôCup</title>
</head>

<body class="background">
    <nav class="navbar navbar-expand-sm navbar-dark bg-gradient-primary ">
        <div class="container ">
            <a class="navbar-brand h1 mb-0" href="index.php">HOME</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="robocup.php">RobôCup</a></li>
                    <li class="nav-item"><a class="nav-link " href="historia.php">Historia do Robô</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre.php">Integrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="diversao.html">Diversão</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container1">
        <div class="container">
                <?php
                    session_start();
                    $edit_mode = isset($_SESSION['user']);
                    if ($edit_mode)
                        echo '<a class="btn btn-secondary btn-lg btn-block" href="#" data-toggle="modal" data-target="#caixa1">Adicionar Notícia</a>';

                    // $conexao = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados') or die ("A conexão não foi executada com sucesso");
                    $conexao = mysqli_connect('localhost','root', '', 'dados') or die ("A conexão não foi executada com sucesso");
                    $conexao->set_charset("utf-8");
                    $consulta = "SELECT TITULO, IMGURL, DESCR, DAT FROM robocup";
                    $resultado = mysqli_query($conexao,$consulta);
                    while(list($TITULO, $IMGURL, $DESCR, $DAT) = mysqli_fetch_row($resultado)) {
                        echo "
                        <div class=\"row robocup-card\">
                            <div class=\"col-12 col-sm-12 col-md-6 img-container\">
                                <img alt=\"#\" src=\"$IMGURL\" class=\"img-thumbnail\"/>
                            </div>
                            <div class=\"col-12 col-sm-12 col-md-6\">
                                <div class=\"modal-header\">
                                    <a class=\"btn btn-secondary btn-lg btn-block\" href=\"#\">$TITULO</a><br>
                                </div>
                                <p>$DESCR</p>
                            </div>
                            <div style=\"padding: 0;\" class=\"container\">
                                <div class=\"float-left\">
                                    <p>$DAT</p>
                                </div>
                                <div class=\"float-middle\">";
                                    if ($edit_mode)
                                    {
                                        echo "<a href=\"\" class=\"btn btn-lg btn-primary btn-block\">Editar</a>";
                                        echo "<a href=\"\" class=\"btn btn-lg btn-danger btn-block\">Excluir</a>";
                                    }
                                echo "    
                                </div>
                            </div>
                        </div>";
                    }
                ?>
        </div>
        
        <footer class="page-footer font-small cyan darken-3">
            <div class="footer-copyright text-center py-3">
                &copy; 2018 Copyright, Todos os Direitos Reservados. Criação e implementação Grupo Potatoes Party.
            </div>
        </footer>

        <div class="modal fade" id="caixa1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicionar Conteúdo</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form class="form-signin" method="POST" action="adiciona_robocup.php">
                        <label for="TITULO" class="sr-only">Senha</label>
                        <input type="text" name="TITULO" id="TITULO" class="form-control" placeholder="Titulo" required><br>
                        <input type="text" name="IMGURL" id="IMGURL" class="form-control" placeholder="IMGURL" required><br>
                        <textarea name="DESCR" cols="60" rows="5" placeholder="Descrição"></textarea>

                        <div class="page-footer font-small cyan darken-3">
                            <button class="btn btn-danger float-right" type="submit">Adicionar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>