# Application using Simplest Router


## Resources in this application:

- PHP 8.1 without database.
- Namespace with PSR-4 and composer.
- MySQL
- PostgreSQL
- php-cli scripts to migrations and seeder
- Patterns Front Controller and Singleton
- Search
- PDO
- Bootstrap 5.2
- Script para backup do mysql na pasta bin
    php bin/backupDb

Pacotes de terceiros

- Migrations and seeders with Phinx e Faker Restaurant
- Ignition handler error


## Instalação deste exemplo

- Copie a pasta app para o /var/www/html ou c:\xampp\htdocs
- Criar o banco no mysql
- Configurar no config.php
- Execute:

composer install

sh migrate.sh

Access

http://localhost/micro-framework


## Migrations e seeds

Caso queira criar novas migrations e seeds veja o tutorial em

[MigrationsSeeds.md](MigrationsSeeds.md)


## Usando o Micro Framework

[Usando o Micro Framework](usando.md)


