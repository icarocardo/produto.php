# Como rodar o projeto

Este projeto foi desenvolvido em **PHP** com **PostgreSQL** e pode ser executado localmente usando o **XAMPP**.

Requisitos
- XAMPP
- PHP 8 ou superior
- PostgreSQL
- Navegador web

 Estrutura do projeto

Coloque a pasta do projeto dentro do diretório `htdocs` do XAMPP.

Exemplo:

1. Copiar o projeto para o htdocs

Copie a pasta meuproduto para dentro de:

C:\xampp\htdocs\

Ficando assim:

C:\xampp\htdocs\meuproduto
2. Iniciar o Apache

Abra o XAMPP Control Panel e clique em Start no módulo:

Apache

Se estiver tudo certo, ele ficará verde.

3. Criar o banco de dados

No PostgreSQL, crie um banco chamado:

produtos

Exemplo:

CREATE DATABASE produtos;
4. Criar a tabela de produtos

Depois de criar o banco, conecte-se a ele e execute um comando semelhante a este:

CREATE TABLE produto (
    idproduto SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    quantidade INT,
    valor NUMERIC(10,2)
);

Se quiser inserir alguns dados para teste:

INSERT INTO produto (nome, quantidade, valor)
VALUES 
('Teclado', 10, 99.90),
('Mouse', 20, 59.90),
('Monitor', 5, 899.90);
6. Configurar o arquivo index.php

Se quiser que o sistema abra diretamente a tela de login, coloque este código no arquivo index.php:

<?php
header("Location: login.php");
exit();
?>
7. Acessar o projeto no navegador

Abra o navegador e acesse:

http://localhost/meuproduto/

Ou diretamente:

http://localhost/meuproduto/login.php
