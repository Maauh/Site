<form class="form-signin" method="POST" action="php/entrar.php">
    <h2 class="form-signin-heading">Login</h2><br>

    <label for="inputUser" class="sr-only">Usuário</label>
    <input type="text" name="username" id="inputUser" class="form-control" placeholder="Usuário" required autofocus><br>

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required><br>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button><br>
    <a class="btn btn-secondary btn-lg btn-block" href="" data-toggle="modal" data-target="#cria">Criar Conta</a><br>
</form>
<div class="modal fade" id=<?php echo "edit";?> tabindex="-1" role="dialog">
    <?php include "php/perfil_edit_form.php";?>
</div>

<div class="modal fade" id="cria" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar Conta</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row p-2 pb-4">
                    <div class="col-12">
                        <form class="form-signin" method="POST" action="php/cria_perfil.php">
                            <input type="text" name="NOME" class="form-control" placeholder="Nome" required><br>
                            <input type="text" name="USUARIO" class="form-control" placeholder="Usuário" required><br>
                            <input type="password" name="SENHA" class="form-control" placeholder="Senha" required><br>
                            <div class="page-footer font-small cyan darken-3">
                                <button class="btn btn-primary float-right" type="submit">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>