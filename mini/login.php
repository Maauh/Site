<form class="form-signin" method="POST" action="php/entrar.php">
    <h2 class="form-signin-heading">Login</h2><br>

    <label for="inputUser" class="sr-only">Usuário</label>
    <input type="text" name="username" id="inputUser" class="form-control" placeholder="Usuário" required autofocus><br>

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required><br>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
</form>
<div class="modal fade" id=<?php echo "edit";?> tabindex="-1" role="dialog">
    <?php include "php/perfil_edit_form.php";?>
</div>