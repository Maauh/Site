<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include "php/link.php";?>
  <title>Home</title>
</head>

<body class="background">
  <?php include "mini/menu.php";?>
  <div class="container1">
    <div>
      <h1 class="display-3 ">POTATOES PARTY</h1>
    </div>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 img-container">
        <img alt="#" src="imagem/nos.jpg" class="img-thumbnail" />
      </div>
    </div><br>
    <div class="container">
      <?php
          session_start();
          $TABLENAME = "index";
          $RETURN = "index.php";
          if (isset($_SESSION['user']))
              echo '<a class="btn btn-primary btn-lg btn-block" href="#" data-toggle="modal" data-target="#caixa1">Adicionar Notícia</a>';
          include_once "php/data_base.php";
          if ($conn)
          {
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
      <?php include "mini/add_form.php";?>
  </div>
</body>

</html>