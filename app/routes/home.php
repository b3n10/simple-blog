<?php

// contain route for homepage
// use ($app) to include $app obj inside closure function
$app->get('/', function() use ($app) {

	// query all from posts table where posts.user_id = users.id
	// also select (by concatenating) users table's first and last name and passed as author variable in FETCH_ASSOC array
	$posts = $app->db->query("
		SELECT
		posts.*,
		CONCAT(users.firstname, ' ', users.lastname) AS author
		FROM posts
		LEFT JOIN users
		ON posts.user_id = users.id
	")->fetchAll(PDO::FETCH_ASSOC); // as associative array

	// render home view
	// pass $posts as 'posts' to app/views/home.php
	// 'home.php' is recognized because $view obj sets '../app/views/' as templates directory
	$app->render('home.php', [
		'posts'	=> $posts
	]);

})->name('home'); // name of the route
