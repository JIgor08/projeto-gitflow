<?php
require 'Tarefa.php';

if(empty($_POST['tarefa'])) {
    header('Location: menu.html?error=1');
    exit;
}

$tarefa = new Tarefa();
$tarefa->criar($_POST['tarefa']);

header('Location: menu.html');
exit;
