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
    <?php include "mini/menu.php";?>
    <div class="container1">
        <br>
        <div class="container">
            <div class="row">
                <?php
                    $link = mysqli_connect('localhost','root', '', 'dados') or die ("A conexão não foi executada com sucesso");
                    // $link = mysqli_connect('localhost','id7472579_admin', 'password', 'id7472579_dados') or die ("A conexão não foi executada com sucesso");
                    $link->set_charset("utf-8");
                    $sql = "SELECT * FROM usuarios WHERE INTEGRANTE = '1'";
                    $result = mysqli_query($link, $sql);
                    while(list($ID, $NOME, $USUARIO, $SENHA, $INTEGRANTE, $FBID, $DESCRICAO, $FUNCAO) = mysqli_fetch_row($result)) {
                        include "mini/sobre_card.php";
                    }
                ?>	
            </div>
        </div>        
		<?php include "mini/footer.php";?>
    </div>
</body>

</html>