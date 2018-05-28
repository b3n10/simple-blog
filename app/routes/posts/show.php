<?php

// get the /posts/ dir and pass postID variable
$app->get('/posts/:postID', function($postID) use ($app) {
	echo $postID;
});
