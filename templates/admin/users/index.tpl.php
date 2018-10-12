<h3 class="mb-5">Administração de usuários</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['users'] as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td class="text-right">
                <a href="/admin/users/<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">ver</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="/admin/users/create" class="btn btn-secondary">Novo</a>
