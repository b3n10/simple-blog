<?php

// contain route for homepage
// use ($app) to include $app obj inside closure function
$app->get('/', function() use ($app) {

})->name('home'); // name of the route
