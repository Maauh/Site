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
	<?php include "mini/menu.php";?>
    <div class="container1">
        <div class="container">
                <?php
                    session_start();
                    if (isset($_SESSION['user']))
                    {
                        $_SESSION['TABLENAME'] = "robocup";
                        $_SESSION['RETURN'] = "robocup.php";
                        echo '<a class="btn btn-primary btn-lg btn-block" href="#" data-toggle="modal" data-target="#caixa1">Adicionar Notícia</a>';
                    }
                    // $conexao = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados') or die ("A conexão não foi executada com sucesso");
                    $conexao = mysqli_connect('localhost','root', '', 'dados') or die ("A conexão não foi executada com sucesso");
                    $conexao->set_charset("utf-8");
                    $consulta = "SELECT ID, TITULO, IMGURL, DESCR, DAT FROM robocup";
                    $resultado = mysqli_query($conexao,$consulta);
                    while(list($ID, $TITULO, $IMGURL, $DESCR, $DAT) = mysqli_fetch_row($resultado)) {
                        // include "mini/robocup_card.php";
                        include "mini/blog_card.php";
                    }
                ?>
        </div>
        <?php include "mini/footer.php";?>
        <?php include "php/teste.php";?>
    </div>

    <div class="modal fade" id="caixa1" tabindex="-1" role="dialog">
        <?php            
            include "mini/add_form.php";
        ?>
    </div>

</body>

</html>