<?php
require_once __DIR__ . '/../models/tarefa.php';
$model = new Tarefa();
$tarefas = $model->listarTodas();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../public/css/style.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <title>Minhas Tarefas</title>
</head>

<body>

    <h1>Minhas Tarefas</h1>

    <table border="3" cellspacing="0" cellpadding="5">

        <thead>
            <tr>
                <th>Título</th>
                <th>Data de criação</th>
                <th>Status</th>
                <th>Ações</th>
                <th class="status-col">Concluída?</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
                <tr>

                    <td><?= $tarefa['titulo'] ?></td>

                    <td><?= $tarefa['criado_em'] ?></td>

                    <td>
                        <?= $tarefa['status'] == 1 ? 'Concluída' : 'Pendente' ?>
                    </td>

                    <td>

                        <form action="../controllers/deletar.php" method="POST" style="display:inline">
                            <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
                            <button type="submit" class="btn btn-deletar">Deletar</button>
                        </form>

                        <a href="../controllers/editar.php?id=<?= $tarefa['id'] ?>" class="btn btn-editar">Editar</a>

                    </td>

                    <td class="status-col">
                        <form action="../controllers/mudar_status.php" method="POST" style="display:inline">
                            <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">

                            <input
                                type="checkbox"
                                name="status"
                                value="1"
                                <?= $tarefa['status'] ? 'checked' : '' ?>
                                onchange="this.form.submit()">
                        </form>

                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <br>
    <hr>
    <br>

    <a href="menu.html" class="botao"><strong>Voltar ao Menu Principal</strong></a>

</body>

</html>