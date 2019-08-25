<?php 

require_once("vendor/autoload.php"); //Faz parte do Composer, traz as dependências(o que o projeto precisa)

//Namespaces, chama apenas o que vai precisar 
use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {

	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->run();

 ?>