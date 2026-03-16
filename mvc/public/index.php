<?php

require_once __DIR__ . '/../app/controllers/TarefaController.php';

$uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$controller = new TarefaController();

// Rota: GET /  → listar tarefas
if ($uri === '/' && $method === 'GET') {
    $controller->index();

// Rota: GET /criar  → formulário de criação
} elseif ($uri === '/criar' && $method === 'GET') {
    $controller->criar();

// Rota: POST /criar  → salvar nova tarefa
} elseif ($uri === '/criar' && $method === 'POST') {
    $controller->criar();

// Rota: GET /editar/1  → formulário de edição
} elseif (preg_match('#^/editar/(\d+)$#', $uri, $m) && $method === 'GET') {
    $controller->editar((int) $m[1]);

// Rota: POST /editar/1  → salvar edição
} elseif (preg_match('#^/editar/(\d+)$#', $uri, $m) && $method === 'POST') {
    $controller->editar((int) $m[1]);

// Rota: POST /deletar/1  → deletar tarefa
} elseif (preg_match('#^/deletar/(\d+)$#', $uri, $m) && $method === 'POST') {
    $controller->deletar((int) $m[1]);

} else {
    http_response_code(404);
    echo '<h1>404 - Página não encontrada</h1>';
}
