# Usando o Micro Framework

É possível criar alguns tipos de softwares com o Micro Framework.

As pastas e arquivos básicos do Micro Framework são:

/App
/Core
/public
config.php
.htaccess


## Core

A pasta Core contém os arquivos do núcleo do framework, que geralmente não precisam ser alterados ao criar um novo aplicativo.


### Rotas

A classe de rotas usada neste exemplo, juntamente com o Ignition são compatíveis com o PHP 8. Para compatibidade com versões anteriores veja outros exemplos de rota:

https://github.com/ribafs/simplest-router/tree/main/pt-BR/exemplos


## public

A pasta public também não precisa geralmente ser alterada, a não ser que se vá alterar os assets. No arquivo index.php existem as constantes básicas que são muito importantes no framework (herança do mini3) e também a configuração básica do Ignition.


## config.php

Este arquivo guarda as configurações do banco, algumas constantes como o nome do aplicativo e o dontroller default.

## .htaccess

Temos dois .htaccess, um no raiz e outro na pasta public. O do raiz redireciona tudo que chega ao aplicativo para a pasta public. O da pasta public pega todas as requisições que chegam e passa para o arquivo index.php. Assim temos o único ponto de acesso ao aplicativo, o que caracteriza um Front Controller.


## App

Nesta pasta ficam os arquivos de cada aplicativo criado: controllers, models e views com seus templates. Para cada aplicativo estes arquivos são exclusivos e precisam ser alterados para se adaptarem.


## Indicação

É muito confortável usar um software que você conhece e tem forte controle sobre ele, como este. Este pequeno projeto foi criado basicamente para que eu aprendesse a usar o MVC com rotas no PHP. Sua finalidade não foi para mim a de ser usado em produção. Mas esta decisão é de cada programador e empresa e ele está aqui.

Minha sugestão e recomendação por vários motivos é a de que se utilize um dos grandes frameworks PHP, caso queira usar em produção e meu preferido é o Laravel.


