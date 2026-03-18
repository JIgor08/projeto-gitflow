<?php
class Tarefa
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=teste_mvc', 'root', '');
    }

    public function criar($titulo)
    {
        $stmt = $this->pdo->prepare('INSERT INTO tarefas (titulo) VALUES (?)');
        $stmt->execute([$titulo]);
    }

    public function editar($id, $titulo)
    {
        $stmt = $this->pdo->prepare('UPDATE tarefas SET titulo = ? WHERE id = ?');
        $stmt->execute([$titulo, $id]);
    }


    public function listarTodas()
    {
        $stmt = $this->pdo->query('SELECT * FROM tarefas');
        return $stmt->fetchAll();
    }

    public function deletar($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM tarefas WHERE id = ?');
        $stmt->execute([$id]);
    }

    public function mudarStatus($id, $status)
    {
        $stmt = $this->pdo->prepare(
            "UPDATE tarefas SET status = ? WHERE id = ?"
        );
        $stmt->execute([$status, $id]);
    }
}
