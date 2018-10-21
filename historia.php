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
    <?php include "mini/menu.php";?>
    <div class="container1">
        <div class="container">
                <?php
                    session_start();
                    $_SESSION['TABLENAME'] = "historia";
                    $_SESSION['RETURN'] = "historia.php";
                    if (isset($_SESSION['user']))
                        echo '<a class="btn btn-primary btn-lg btn-block" href="#" data-toggle="modal" data-target="#caixa1">Adicionar Notícia</a>';
                    include_once "php/data_base.php";
                    if ($conn)
                    {
                        $conn->set_charset("utf-8");
                        $TABLENAME = $_SESSION['TABLENAME'];
                        $sql = "SELECT ID, TITULO, IMGURL, DESCR, DAT, POSTTYPE FROM `$TABLENAME` ORDER BY `DAT` DESC";
                        $result = mysqli_query($conn, $sql);
                        while(list($ID, $TITULO, $IMGURL, $DESCR, $DAT, $POSTTYPE) = mysqli_fetch_row($result))
                            include "mini/blog_card.php";
                    }
                    else
                        echo "<p>Não foi possível fazer a conexão com o banco de dados.</p>"
                ?>
        </div>
        <?php include "mini/footer.php";?>
    </div>

    <div class="modal fade" id="caixa1" tabindex="-1" role="dialog">
        <?php            
            include "mini/add_form.php";
        ?>
    </div>
</body>

</html>