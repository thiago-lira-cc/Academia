# README #

Sistema de cadastro de notícias.

Orientações para a configuração da aplicação.

### O que eu preciso instalar? ###

* Um servidor web apache.
* Um banco de dados Mysql
* PHP
* Uma opção é instalar o Wamp Server (http://www.wampserver.com) que é um pacote que já contém as tecnologias citadas.

### Após a instalação ###

* Criar uma pasta chamada etec dentro do diretório wamp/www
* Colocar o código do proejto na pasta wamp/www/etec

### Criação do banco de dados ###

* Abrir o mysql (http://localhost/phpmyadmin)
* Login padrão é root e a senha padrão e em branco
* Criar um novo banco de dados -> Clicar em Databases ou Banco de Dados no cando superior
* O nome do banco deverá ser forum
* Clicar no banco de dados criado (lateral esquerda)
* Acessar a pasta do projeto no diretório wamp/www/etec/bd
* Copiar o conteúdo do arquivo ddl.sql
* No phpmyadmin do Mysql clicar na aba SQL
* Colar o conteúdo copiado e clicar em executar
* Outra alternativa é clicar em importar e selecionar o arquivo ddl.sql (lembrar que você deve estar no banco de dados forum)
* Obs. Caso tenha criado o banco com outro nome, alterar no arquivo wamp/www/conecta.php
* Acessar a URL da aplicação (http://localhost/etec)