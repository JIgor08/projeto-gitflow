<?php

require_once __DIR__ . '/../models/tarefa.php';

$model = new Tarefa();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $model->editar($_POST['id'], $_POST['titulo']);
    header('Location: listar.php');
    exit;
}

$tarefa = $model->buscarPorId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <title>Editar Tarefa</title>
</head>

<body>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
        <input type="text" name="titulo" value="<?= $tarefa['titulo'] ?>">
        <button type="submit">Salvar</button>
    </form>
</body>

</html>