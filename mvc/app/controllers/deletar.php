<?php
require_once 'Tarefa.php';
$model = new Tarefa();

$id = $_POST['id'];

$model->deletar($id);

header('Location: listar.php');
exit;
?>

