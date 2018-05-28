<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h1>Posts</h1>
{% if posts is empty %}
	<p>No posts, yet.</p>
{% else %}
	{% for post in posts %}
	<div class="post">
		{# urlFor('posts.show') will return the URL passed on the get method of routes/posts/show.php #}
		{# which is '/posts/:postID', then #}
		{# replace placeholder :postID with post.id #}
		<h2><a href="{{ urlFor('posts.show', { 'postID': post.id }) }}">{{ post.title }}</a></h2>
		<p>{{ post.body[:50] }} ..</p>
		<div class="author">
			By: {{ post.author }}
		</div>
	</div>
	{% endfor %}
{% endif %}
</body>
</html>
