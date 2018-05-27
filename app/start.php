<?php

use Slim\Slim;

// require composer autoloader
require_once '../vendor/autoload.php';

// create instance of Slim class
// another way:
// $app = new \Slim\Slim();
$app = new Slim([
	// choose twig for $view obj
	'view'	=>	new \Slim\Views\Twig()
]);

// Database
$app->container->singleton('db', function() {
	return new PDO('mysql:host=127.0.0.1;dbname=blog', 'root', 'jairah');
});

// Views
// set $view as $app->view() obj
$view = $app->view();

// set the View templates dir
$view->setTemplatesDirectory('../app/views');

// find parser extensions for $view
$view->parserExtensions = [
	new \Slim\Views\TwigExtension()
];

// require routes
require_once 'routes.php';

// invoke method
$app->run();
