<?php
require_once __DIR__ . '/../models/tarefa.php';

if (empty($_POST['tarefa'])) {
    header('Location: ../views/menu.html');
    exit;
}

$tarefa = new Tarefa();
$tarefa->criar($_POST['tarefa']);

header('Location: ../views/menu.html');
exit;