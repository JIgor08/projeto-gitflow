<?php
require_once 'Tarefa.php';

$model = new Tarefa();

$id = $_POST['id'];
$status = isset($_POST['status']) ? 1 : 0;

$model->mudarStatus($id, $status);


header('Location: listar.php');
exit;
