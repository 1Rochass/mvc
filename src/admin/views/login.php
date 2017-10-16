{% extends "admin_template.php" %}
{% block body %}
{% block login %}
<div id="login_form">
	<form action="/admin/Login/checkLogin" method="POST">
		<div class="form-group">
			<label for="username">Login</label>
			<input type="text" name="username" id="username" class="form-control">
		</div>
		<div class="form-group">
			<label for="userpassword">Password</label>
			<input type="text" name="userpassword" id="userpassword" class="form-control">
		</div>
		<button type="submit" name="login_submit" class="btn btn-default">Submit</button>
	</form>
	{{ message }}
</div>
{% endblock login %}
{% endblock body %}