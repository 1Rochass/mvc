{% extends 'admin_template.php' %}
{% block body %}
	{{ parent() }}
	<form action="/admin/Logout/logout" method=POST>
		<button name="logout_submit" class="btn btn-default">Logout</button>
	</form>
	{% block menu %}
	<div id="menu">
		<a href="/admin/">Home</a>
		<a href="/admin/Article/readArticle">Show articles</a>
		<a href="/admin/Article/createArticle">Create articles</a>
	</div>
	{% endblock menu %}
{% endblock body %}