# Micro Framework

Este projeto basicamente é o exemplo de aplicativo do Simplest Router, com poucas alterações, mas resolvi criar um repositório para ele, para dar mais visibilidade.

Apenas uma pequena refatoração:

- Renomeei o método fetch() nos models em App para edit()
- Renomeei o action fetch() nos controllers em App para edit()
Assim ficou bem coerente, pois o papel dele é de edit.

Adicionei pequenos comentários para deixar mais claro.

Movi a configuração do Ignition do config.php para o public/inde.php. Assim, basicamente o index.php não precisará de alterações ao se criar um novo aplicativo.

Melhorei a documentação das migrations com o Phinx.


## Clique para acessar/Click to access

[*Português*](pt-BR) | [*English*](en)
----------- | ----------
<a href="pt"><img src="pt.png"></a> | <a href="en"><img src="en.png"></a>

## URL deste Projeto

[https://github.com/ribafs/micro-framework](https://github.com/ribafs/micro-framework)


### Este projeto foi criado partindo principalmente dos projetos abaixo:

- https://github.com/Izamzawi/blog-php-mvc
- https://github.com/panique/mini3
- https://github.com/nikic/FastRoute
- https://github.com/ribafs/simplest-router


## Testado em

Usando a respectiva versão so Simplest Router, testei com:

- Windows 10
    - Laragon - PHP 8.1
- Linux Mint 21
    - PHP 8.1
- Ubuntu
    - 22.04 - PHP 8.1
    - 20.04 - PHP 7.4
    - 14.04 - PHP 5.5

- Namespace
- Require
- Nomes de controllers fixos

- MySQL/MariaDb
- PostgreSQL


## Requisitos

- Module mod_rewrite from Apache


## Alguns recursos

- Suporte ao PHP 5.5 até 8.1
- Namespace with PSR-4 and composer.
- MySQL
- PostgreSQL
- Patterns Front Controller and Singleton
- Search
- PDO
- Bootstrap 5.2

Pacotes de terceiros

- Migrations and seeders with Phinx e Faker Restaurant
- Ignition handler error. O mesmo usado pelo Laravel 9


## Licença

MIT

