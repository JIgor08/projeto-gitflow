<?php
require_once __DIR__ . '/../models/tarefa.php';
$model = new Tarefa();
$model->deletar($_POST['id']);
header('Location: ../views/listar.php');
exit;
