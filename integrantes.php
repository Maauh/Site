<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "php/link.php";?>
    <title>Sobre Nós</title>
</head>

<body class="background">
    <?php include "mini/menu.php";?>
    <div class="container1">
        <br>
        <div class="container">
            <div class="row">
                <?php
                    include_once "php/data_base.php";
                    if ($conn)
                    {                        
                        $sql = "SELECT * FROM usuarios WHERE INTEGRANTE = '1'";
                        $result = mysqli_query($conn, $sql);
                        while(list($ID, $NOME, $USUARIO, $SENHA, $INTEGRANTE, $FBID, $DESCRICAO, $FUNCAO) = mysqli_fetch_row($result))
                        {
                            echo "<div class=\"col-12 col-sm-6 col-md-6 perfil-sobre-nos\">";
                            include "mini/sobre_card.php";
                            echo "</div>";
                        }
                    }
                    else
                        echo "Erro de conexão";
                ?>
            </div>
        </div>        
		<?php include "mini/footer.php";?>
    </div>
</body>

</html>