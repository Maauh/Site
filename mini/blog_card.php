<div class="container blog-card  border border-dark rounded">
    <div class="row">
            <?php EchoPostType($POSTTYPE, $IMGURL);?>
        <div <?php if ($POSTTYPE == "texto") echo "class=\"col-12\""; else echo "class=\"col-12 col-sm-12 col-md-6\"";?>>
            <p class="h1 text-light bg-primary border border-dark rounded" href="#"><?php echo $TITULO;?></p><br>
            <p><?php echo $DESCR;?></p>
        </div>
        <div class="container p-0">
            <p>Postado no dia 
            <?php
                $date = new DateTime($DAT);
                echo $date->format("d/m/Y")." às ".$date->format("H:i.");?>
            </p><br>
        </div>
    </div>
    <div class="">
        <?php
        if (isset($_SESSION['user']))
        {
            echo "<a href=\"#\" class=\"btn btn-lg btn-primary btn-block\" data-toggle=\"modal\" data-target=\"#edit$ID\">Editar</a>";
            echo "<a href=\"#\" class=\"btn btn-lg btn-danger btn-block\"  data-toggle=\"modal\" data-target=\"#delete$ID\">Excluir</a>";
        }
        ?>
    </div>
</div>
<div class="modal fade" id=<?php echo "\"edit$ID\"";?> tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Conteúdo</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-signin" method="POST" action="php/edita.php">
                    <input type="text" name="ID" hidden value=<?php echo "\"$ID\""?> required>
                    <input type="text" name="TABLENAME" hidden value=<?php echo "\"$TABLENAME\""?> required>
                    <input type="text" name="RETURN" hidden value=<?php echo "\"$RETURN\""?> required>
                    <input type="text" name="TITULO" class="form-control" placeholder="Titulo" value=<?php echo "\"$TITULO\""?> required><br>
                    <select name="POSTTYPE" class="form-control">
                        <option value="texto">Somente Texto</option>
                        <option value="img" <?php if ("img" == $POSTTYPE) echo "selected";?>>Imagem</option>
                        <option value="iframe" <?php if ("iframe" == $POSTTYPE) echo "selected";?>>Iframe</option>
                    </select><br>
                    <input type="text" name="IMGURL" class="form-control" placeholder="IMGURL" value=<?php echo "\"$IMGURL\""?>><br>
                    <textarea name="DESCR" class="form-control" rows="12" placeholder="Descrição"><?php echo $DESCR?></textarea><br>
                    <div class="page-footer font-small cyan darken-3">
                        <button class="btn btn-primary float-right" type="submit">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id=<?php echo "\"delete$ID\"";?> tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Você Realmente Deseja Excluir?</h5><br>
            </div>
            <div class="modal-body">
                <div>
                    <?php EchoPostType($POSTTYPE, $IMGURL);?>
                    <p class="h1 text-light bg-primary blog-text" href="#"><?php echo $TITULO;?></p><br>
                </div>
                <form class="form-signin" method="POST" action="php/exclui.php">
                    <input type="text" name="ID" hidden value=<?php echo "\"$ID\""?> required>
                    <input type="text" name="TABLENAME" hidden value=<?php echo "\"$TABLENAME\""?> required>
                    <input type="text" name="RETURN" hidden value=<?php echo "\"$RETURN\""?> required>
                    <button class="btn btn-danger float-left" type="submit">Sim</button>
                    <button class="btn btn-primary float-right" data-dismiss="modal">Não</button>
                </form>
            </div>
        </div>
    </div>
</div>