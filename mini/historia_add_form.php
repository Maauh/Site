<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Adicionar Conteúdo</h5>
            <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form class="form-signin" method="POST" action="php/adiciona_historia.php">
            <input type="text" name="TITULO" class="form-control" placeholder="Titulo" required><br>
            <input type="text" name="IMGURL" class="form-control" placeholder="IMGURL" required><br>
            <textarea name="DESCR" cols="60" rows="5" placeholder="Descrição"></textarea>
            <div class="page-footer font-small cyan darken-3">
                <button class="btn btn-danger float-right" type="submit">Adicionar</button>
            </div>
        </form>
        </div>
    </div>
</div>