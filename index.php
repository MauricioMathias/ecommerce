<?php 

session_start();

require_once("vendor/autoload.php"); //Faz parte do Composer, traz as dependências(o que o projeto precisa)

//Namespaces, chama apenas o que vai precisar 
use \Slim\Slim;

$app = new Slim();

require_once("site.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");

$app->config('debug', true);	

$app->run();

 ?>