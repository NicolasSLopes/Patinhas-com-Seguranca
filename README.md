# Patinhas com Segurança

## Sobre o Projeto

Este projeto é um sistema simples para cadastrar e gerenciar clientes e seus animais. A aplicação permite adicionar, editar e excluir registros, utilizando PHP, MySQL e HTML.

## Funcionalidades

* Cadastro de clientes.
* Cadastro de animais vinculados a um cliente.
* Listagem de clientes e animais.
* Edição e exclusão de registros.
* Integração com banco de dados MySQL.

## Tecnologias Utilizadas

* **PHP**
* **MySQL**
* **HTML5**
* **CSS3**
* **XAMPP**

## Objetivo

O objetivo é praticar o desenvolvimento de um sistema web com operações de cadastro, consulta, atualização e exclusão de dados, conhecido como CRUD.

## Aprendizados

Durante o desenvolvimento, foram praticados conceitos como:

* Conexão entre PHP e MySQL.
* Criação e consulta de tabelas relacionadas.
* Uso de formulários HTML com método POST.
* Uso de comandos SQL preparados.
* Organização de arquivos em um projeto web.

## Como Executar

1. Instale e abra o XAMPP.
2. Inicie os módulos **Apache** e **MySQL**.
3. Crie o banco de dados executando o arquivo `database/db.sql` no phpMyAdmin.
4. Coloque o projeto dentro da pasta `htdocs`.
5. Acesse no navegador:

```text
http://localhost/Patinhas-com-Seguran-a/Patinhas-com-Seguranca/
```

## Estrutura do Projeto

```text
Patinhas-com-Seguranca/
│
├── database/
│   └── db.sql
├── infra/
│   └── conexao.php
├── public/
│   ├── Animal/
│   └── Cliente/
├── style/
│   └── style.css
├── index.php
└── README.md
```

## Licença

Este projeto foi desenvolvido para fins educacionais e de aprendizado.

