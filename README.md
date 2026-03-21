# 📝 Gerenciador de Tarefas

> Aplicação web para gerenciamento de tarefas desenvolvida com PHP nativo, HTML e CSS.

---

## 🏫 Informações Acadêmicas

| Campo        | Informação                              |
|--------------|-----------------------------------------|
| Universidade | Universidade Federal do Tocantins (UFT) |
| Curso        | Ciência da Computação                   |
| Disciplina   | Engenharia de Software                  |
| Semestre     | 1º Semestre de 2026                     |
| Professor    | Edeilson Milhomem                       |

---

## 📋 Descrição Geral do Projeto

Aplicação web para gerenciamento de tarefas pessoais, permitindo ao usuário criar, visualizar, editar e remover tarefas de forma simples e organizada.

A aplicação foi desenvolvida utilizando **PHP nativo**, **HTML** e **CSS**, seguindo o padrão arquitetural **MVC (Model–View–Controller)** e o fluxo de trabalho **GitFlow** para organização do desenvolvimento.

---

## 🎯 Objetivo

Desenvolver uma aplicação funcional de gerenciamento de tarefas aplicando boas práticas de arquitetura de software com o padrão MVC e controle de versão com GitFlow.

---

## ✅ Requisitos Implementados

| # | Feature                        | Desenvolvedor Responsável      |
|---|--------------------------------|-------------------------------|
| 1 | Cadastro de nova tarefa        | João Igor                     |
| 2 | Edição de tarefa               | João Igor                     |
| 3 | Remoção de tarefa              | João Igor                     |
| 4 | Listagem de tarefas cadastradas| João Igor                     |
| 5 | Mudança de status de tarefa    | João Igor                     |
| 6 | Conexão com MySQL              | João Igor                     |
| 7 | Criação de menu interativo     | João Igor                     |

---

## 👥 Integrantes do Time

| Nome                              | GitHub                                      |
|-----------------------------------|---------------------------------------------|
| João Igor dos Santos Nascimento   | [@JIgor08](https://github.com/JIgor08)      |

---

## 🎬 Vídeo de Apresentação

> 🔧 Em desenvolvimento

O vídeo apresentará:
- Descrição do projeto
- Features desenvolvidas
- Demonstração do projeto em funcionamento
- Gráfico de Rede (Network Graph) do GitHub demonstrando a aplicação do GitFlow

---

## 🏗️ Arquitetura MVC

```
projeto/
├── app/
│   ├── controllers/     # Controladores da aplicação
│   ├── models/          # Modelos e lógica de negócio
│   └── views/           # Templates e interface
├── public/
│   ├── index.php        # Ponto de entrada da aplicação
│   ├── css/             # Folhas de estilo
│   └── js/              # Scripts (se houver)
├── config/              # Configurações (banco de dados, rotas etc.)
└── README.md
```

---

## 🚀 Configuração e Execução Local

### Pré-requisitos

- PHP >= 7.4
- Servidor web (Apache, Nginx ou PHP built-in server)
- MySQL / MariaDB

### Passo a passo

**1. Clone o repositório**
```bash
git clone https://github.com/JIgor08/gerenciador-de-tarefas.git
cd gerenciador-de-tarefas
```

**2. Configure o banco de dados**
```bash
mysql -u root -p < config/database.sql
```

**3. Configure as variáveis de ambiente**
```bash
cp config/config.example.php config/config.php
```

Edite `config/config.php` com os dados do seu ambiente:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'gerenciador_tarefas');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');
```

**4. Inicie o servidor**
```bash
php -S localhost:8000 -t public/
```

**5. Acesse no navegador**
```
http://localhost:8000
```

---

## 🌿 GitFlow

O projeto segue o fluxo de trabalho GitFlow com as seguintes branches:

| Branch          | Finalidade                              |
|-----------------|-----------------------------------------|
| `main`          | Versão estável em produção              |
| `develop`       | Branch de integração de desenvolvimento |
| `feature/nome`  | Desenvolvimento de novas funcionalidades|
| `release/x.x.x` | Preparação de novas versões            |
| `hotfix/nome`   | Correções urgentes em produção          |

O histórico completo do GitFlow pode ser visualizado no **[Network Graph do GitHub](https://github.com/JIgor08/gerenciador-de-tarefas/network)**.

---

## 📦 Release

A versão estável do projeto está disponível em: [Releases](https://github.com/JIgor08/gerenciador-de-tarefas/releases)

---

## 📄 Licença

Este projeto foi desenvolvido para fins acadêmicos — UFT, Ciência da Computação, 2026.