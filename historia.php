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

    <title>Historia</title>
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
                    <li class="nav-item active"><a class="nav-link " href="historia.php">Historia do Robô</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre.php">Integrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="diversao.php">Diversão</a></li>
					<li class="nav-item"><a class="nav-link" href="administracao.php">Administração</a></li>
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
                        $consulta = "SELECT ID, TITULO, IMGURL, DESCR, DAT FROM historia";
                        $resultado = mysqli_query($conexao,$consulta);
                        while(list($ID, $TITULO, $IMGURL, $DESCR, $DAT) = mysqli_fetch_row($resultado)) {
                            include "mini/robocup_card.php";
                        }
                    ?>
            </div>
            <?php include "mini/footer.php";?>
        </div>

        <div class="modal fade" id="caixa1" tabindex="-1" role="dialog">
            <?php include "mini/historia_add_form.php";?>
        </div>
        <?php include "mini/footer.php";?>
    </div>
</body>

</html>