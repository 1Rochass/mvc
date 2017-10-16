{% extends "admin_template.php" %}
{% block body %}
<form action="/admin/Logout/logout" method=POST>
	<button name="logout_submit" class="btn btn-default">Logout</button>
</form>
<div class="alert alert-success" role="alert">{{ message }}</div>
{% endblock body %}