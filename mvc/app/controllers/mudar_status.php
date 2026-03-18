<?php
require_once __DIR__ . '/../models/tarefa.php';
$model = new Tarefa();
$model->mudarStatus($_POST['id'], isset($_POST['status']) ? 1 : 0);
header('Location: ../views/listar.php');
exit;