<?php
// make sure to create .htaccess in public/ dir
// see: https://stackoverflow.com/a/30633620/6353682

// get the /posts/ dir and pass postID variable
$app->get('/posts/:postID', function($postID) use ($app) {

	// use prepare because of variable injection in sql
	// placeholder postID in prepared statement is diff from the placeholder in URL
	$post = $app->db->prepare("
		SELECT
		posts.*,
		CONCAT(users.firstname, ' ', users.lastname) AS author
		FROM posts
		LEFT JOIN users
		ON posts.user_id = users.id
		WHERE posts.id = :postID
	")->fetchAll(PDO::FETCH_ASSOC);

});
