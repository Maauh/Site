<div class="col-12 col-sm-6 col-md-6 perfil-sobre-nos">
    <div class="row perfil-moldura">
        <div class="col-12 col-sm-12 col-md-4 img-container">
            <a href=<?php echo "\"https://facebook.com/profile.php?id=$FBID\""?>><img alt="#" src=<?php echo "\"https://graph.facebook.com/$FBID/picture?type=large\""?> class="img-thumbnail foto-perfil"/></a>
        </div>
        <div class="col-12 col-sm-12 col-md-8">
            <h5><?php echo $NOME;?></h5>
            <p><?php echo $DESCRICAO;?></p>
            <p><?php echo $FUNCAO;?></p>
        </div>
    </div>
</div>