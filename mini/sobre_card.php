<div class="row perfil-moldura border border-dark rounded">
    <div class="col-12 col-sm-12 col-md-4 img-container">
        <a href=<?php echo "\"https://facebook.com/profile.php?id=$FBID\""?>><img class="img-thumbnail p-0 border border-dark rounded-1 foto-perfil" alt="#" src=<?php echo "\"https://graph.facebook.com/$FBID/picture?type=large\""?>/></a>
    </div>
    <div class="col-12 col-sm-12 col-md-8">
        <h4><?php echo $NOME;?></h4>
        <p><?php echo $DESCRICAO;?></p>
        <p><?php echo $FUNCAO;?></p>
    </div>
</div>