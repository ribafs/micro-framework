# Roteiro para criar um novo CRUD

## Adicionarei um CRUD para a tabela seler

create table seler(
  id int primary key auto_increment,
  name varchar(50) not null,
  price decimal(8,2) not null
);

insert into seler(name, price) values ('banana maçã', 3.45);
insert into seler(name, price) values ('manga rosa', 5.35);

## Elementos de cada CRUD

Cada CRUD tem um controller, um model, uma view e uma entrada no menu.

Para facilitar nossas vidas vamos copiar cada um dos existentes e colar coom o nome para seler.

Todos os arquivos do aplicativo estão na pasta
/App

Na pasta /App/Controllers devem fiicar todos os controllers da aplicação

Assim também em todos os /App/Models

## Copiando

- /App/Controllers/CustomerController.php coppiar para /App/Controllers/SelerController.php

- /App/Models/SelerModel.php copiar para /App/Models/SelerSeler.php

- /App/views/customers para /App/views/seler

- /App/views/templates
