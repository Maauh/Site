<div class="row robocup-card">
    <div class="col-12 col-sm-12 col-md-6 img-container">
        <img alt="#" src="$IMGURL" class="img-thumbnail"/>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <div class="modal-header">
            <a class="btn btn-secondary btn-lg btn-block" href="#">$TITULO</a><br>
        </div>
        <p>$DESCR</p>
    </div>
    <div style="padding: 0;" class="container">
        <div class="">
            <p>$DAT</p>
        </div>
        <div class="float-middle">";
            <?php
            if ($edit_mode)
            {
                echo "<a href=\"\" class=\"btn btn-lg btn-primary btn-block\">Editar</a>";
                echo "<a href=\"\" class=\"btn btn-lg btn-danger btn-block\">Excluir</a>";
            }
            ?>
        </div>
    </div>
</div>