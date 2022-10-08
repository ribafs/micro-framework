# Using the Micro Framework

It is possible to create some types of software with the Micro Framework.

The basic Micro Framework folders and files are:

/App
/Core
/public
config.php
.htaccess


## Core

The Core folder contains the framework's core files, which generally do not need to be changed when creating a new application.


### Routes

The routes class used in this example, along with Ignition, is compatible with PHP 8. For backward compatibility see other route examples:

https://github.com/ribafs/simplest-router/tree/main/pt-BR/exemplos


## public

The public folder also doesn't usually need to be changed, unless you are going to change assets. In the index.php file there are the basic constants that are very important in the framework (inherited from mini3) and also the basic configuration of Ignition.


## config.php

This file stores the database settings, some constants such as the application name and the default dontroller.


## .htaccess

We have two .htaccess files, one in the root and one in the public folder. File in root redirects everything that arrives to the application to the public folder. The one in the public folder takes all incoming requests and passes them to the index.php file. So we have the only access point to the application, which characterizes a Front Controller.


## App

In this folder are the files of each created application: controllers, models and views with their templates. For each application these files are unique and need to be changed to adapt.


## Indication

It's very comfortable to use software that you know and have strong control over, like this one to me. This small project was created basically for me to learn how to use MVC with routes in PHP. Its purpose was not for me to be used in production. But this decision is up to each programmer and company.

My suggestion and recommendation for several reasons is to use one of the great PHP frameworks, if you want to use it in production and my favorite is Laravel.

