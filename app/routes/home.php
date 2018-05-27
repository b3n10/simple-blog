<?php

// contain route for homepage
// use ($app) to include $app obj inside closure function
$app->get('/', function() use ($app) {

	// query all from posts table where posts.user_id = users.id
	$posts = $app->db->query("
		SELECT
		posts.*
		FROM posts
		LEFT JOIN users
		ON posts.user_id = users.id
	")->fetchAll(PDO::FETCH_ASSOC); // as associative array

})->name('home'); // name of the route
