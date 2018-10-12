<h3 class="mb-5">Administração de usuários</h3>

<form method="post">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input id="usersEmail" type="email" name="email" class="form-control" placeholder="Seu email..." value="<?php echo $data['user']['email']; ?>">
    </div>
    <div class="form-group">
        <label for="usersPassword">Senha</label>
        <input id="usersPassword" type="password" name="password" class="form-control" placeholder="Sua senha..." value="">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<a href="/admin/users/<?php echo $data['user']['id']; ?>" class="btn btn-secondary">Voltar</a>
