<?php

use Slim\Slim;

// require composer autoloader
require_once '../vendor/autoload.php';

// create instance of Slim class
// another way:
// $app = new \Slim\Slim();
$app = new Slim();

// connect db
$app->container->singleton('db', function() {
	return new PDO('mysql:host=127.0.0.1;dbname=blog', 'root', 'jairah');
});

// invoke method
$app->run();
