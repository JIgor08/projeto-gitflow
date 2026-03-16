# To-do List — MVC com PHP

> Projeto desenvolvido para a disciplina de Engenharia de Software

---

## Dados do Projeto

| Campo        | Info                          |
|-------------|-------------------------------|
| Universidade | [Nome da universidade]        |
| Curso        | [Nome do curso]               |
| Disciplina   | Engenharia de Software        |
| Semestre     | 2026-1                        |
| Professor    | Edeilson Milhomem da Silva    |

## Descrição

Aplicação web de lista de tarefas (To-do List) desenvolvida com PHP nativo, HTML e CSS, seguindo o padrão arquitetural MVC e o fluxo de trabalho GitFlow.

## Integrantes

| Nome | Feature desenvolvida |
|------|----------------------|
| [Nome 1] | CRUD de tarefas |
| [Nome 2] | [Feature do colega] |

## Requisitos Implementados

- [ ] Listar tarefas
- [ ] Criar tarefa
- [ ] Editar tarefa
- [ ] Deletar tarefa
- [ ] [Feature do colega]

## Vídeo de Apresentação

[Link do vídeo]

---

## Como executar localmente

### Pré-requisitos

- PHP 8+
- MySQL
- Apache com `mod_rewrite` habilitado (ou XAMPP/WAMP)

### Passos

1. Clone o repositório:
```bash
git clone [url-do-repo]
cd todo-mvc
```

2. Crie o banco de dados executando o script SQL:
```bash
mysql -u root -p < config/banco.sql
```

3. Ajuste as credenciais do banco em `config/database.php`:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'todo_mvc');
define('DB_USER', 'root');
define('DB_PASS', '');
```

4. Configure o Apache para servir a pasta `public/` como raiz do projeto.

5. Acesse `http://localhost/` no navegador.
