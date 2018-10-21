<div class="row p-2 pb-4">
    <div class="col-12 col-sm-12 col-md-4 img-container">
        <?php
            $NOME = $_SESSION['user']['NOME'];
            $FBID = $_SESSION['user']['FBID'];
            $INTEGRANTE = $_SESSION['user']['INTEGRANTE'];
            $DESCRICAO = $_SESSION['user']['DESCRICAO'];
            $FUNCAO = $_SESSION['user']['FUNCAO'];
            echo "<a href=\"https://facebook.com/profile.php?id=$FBID\"><img alt=\"#\" src=\"https://graph.facebook.com/$FBID/picture?type=large\" class=\"img-thumbnail foto-perfil\"/></a>";
        ?>
    </div>
    <div class="col-12 col-sm-12 col-md-8">
        <form class="form-signin" method="POST" action="php/edita_perfil.php">
            <input type="text" name="ID" hidden value=<?php echo $_SESSION['user']['ID'];?> required><br>
            <input type="checkbox" name="INTEGRANTE" id="cbIntegrante" <?php if ($INTEGRANTE) echo "checked";?>>Você é um integrante do grupo?<br><br>
            <input type="text" name="NOME" id="NOME" class="form-control" placeholder="Nome" value=<?php echo "\"".$_SESSION['user']['NOME']."\"";?> required><br>
            <input type="text" name="FBID" class="form-control" placeholder="Facebook Id" value=<?php echo "\"".$_SESSION['user']['FBID']."\"";?>><br>
            <textarea name="DESCRICAO" class="form-control" rows="5" placeholder="Descrição"><?php echo $_SESSION['user']['DESCRICAO'];?></textarea><br>
            <textarea name="FUNCAO" class="form-control" rows="5" placeholder="Função"><?php echo $_SESSION['user']['FUNCAO'];?></textarea><br>
            <div class="page-footer font-small cyan darken-3">
                <button class="btn btn-primary float-right" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>