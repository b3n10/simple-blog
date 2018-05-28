<?php
// make sure to create .htaccess in public/ dir
// see: https://stackoverflow.com/a/30633620/6353682

// get the /posts/ dir and pass postID variable
$app->get('/posts/:postID', function($postID) use ($app) {
	echo $postID;
});
