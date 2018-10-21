<div class="sobre-card">
    <h1>Bem Vindo Administrador</h1><br>
    <h3>O site já pode ser modificado agora.</h3><br>
    <?php
        $ID = $_SESSION['user']['ID'];
        $FBID = $_SESSION['user']['FBID'];
        $NOME = $_SESSION['user']['NOME'];
        $DESCRICAO = $_SESSION['user']['DESCRICAO'];
        $FUNCAO = $_SESSION['user']['FUNCAO'];
        include "sobre_card.php"
    ?>
    <a class="btn btn-primary btn-lg btn-block" href="" data-toggle="modal" data-target="#edit">Editar</a>
    <a class="btn btn-danger btn-lg btn-block" href="php/sair.php">Sair</a>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Perfil</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include "mini/perfil_edit_form.php";?>
            </div>
        </div>
    </div>
</div>