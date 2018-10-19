<div class="row blog-card">
    <div class="col-12 col-sm-12 col-md-6 img-container">
        <img alt="#" src=<?php echo $IMGURL;?> class="img-thumbnail"/>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <div class="modal-header">
            <a class="btn btn-secondary btn-lg btn-block" href="#"><?php echo $TITULO;?></a><br>
        </div>
        <p><?php echo $DESCR;?></p>
    </div>
    <div style="padding: 0;" class="container">
            <?php
            if ($DAT)
                echo "<p>Postado no dia $DAT</p><br>";
            ?>
        <div class="">
            <?php
            if ($edit_mode)
            {
                echo "<a href=\"#\" class=\"btn btn-lg btn-primary btn-block\" data-toggle=\"modal\" data-target=\"#edit$ID\">Editar</a>";
                echo "<a href=\"#\" class=\"btn btn-lg btn-danger btn-block\"  data-toggle=\"modal\" data-target=\"#delete$ID\">Excluir</a>";
            }
            ?>
        </div>
    </div>
</div>
<div class="modal fade" id=<?php echo "\"edit$ID\"" ?> tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Conteúdo</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-signin" method="POST" action="php/edita_historia.php">
                <input type="text" name="ID" hidden value=<?php echo "\"$ID\""?> required>
                <input type="text" name="TITULO" class="form-control" placeholder="Titulo" value=<?php echo "\"$TITULO\"" ?> required><br>
                <input type="text" name="IMGURL" class="form-control" placeholder="IMGURL" value=<?php echo "\"$IMGURL\"" ?> required><br>
                <textarea name="DESCR" cols="60" rows="5" placeholder="Descrição"><?php if ($DESCR) echo $DESCR ?></textarea>
                <div class="page-footer font-small cyan darken-3">
                    <button class="btn btn-primary float-right" type="submit">Editar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id=<?php echo "\"delete$ID\"" ?> tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Você Realmente Deseja Excluir?</h5><br>
            </div>
            <div class="modal-body">
            <div>
                <a class="btn btn-secondary btn-lg btn-block" href="#"><?php echo $TITULO;?></a><br>
                <img alt="#" src=<?php echo $IMGURL;?> class="img-thumbnail"/><br><br>
            </div>
            <form class="form-signin" method="POST" action="php/exclui_historia.php">
                <input type="text" name="ID" hidden value=<?php echo "\"$ID\""?> required>
                <button class="btn btn-danger float-left" type="submit">Sim</button>
                <button class="btn btn-primary float-right" data-dismiss="modal">Não</button>
            </form>
            </div>
        </div>
    </div>
</div>