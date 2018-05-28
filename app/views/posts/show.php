<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p><a href="{{ urlFor('home') }}">Back home</a></p>
	<h1>{{ post.title }}</h1>
	<div class="post">
		<p>{{ post.body }}</p>
		<div class="author">
			By: {{ post.author }}
			<p>{{ post.created }}</p>
		</div>
	</div>
</body>
</html>
