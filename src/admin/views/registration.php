{% extends "admin_template.php" %}
{% block body %}
{% block registration %}
<div id="registration_form">
	<form action="/admin/Registration/makeRegistration" method="POST">
		<div class="form-group">
			<label for="username">Логин</label>
			<input type="text" name="username" id="username" class="form-control">	
		</div>
		<div class="form-group">
			<label for="userpassword">Пароль</label>
			<input type="text" name="userpassword" id="userpassword" class="form-control">	
		</div>
		<div class="form-group">
			<label for="useremail">Email</label>
			<input type="text" name="useremail" id="useremail" class="form-control">
		</div>
		<button type="submit" name="registration_submit" class="btn btn-default">Submit</button>
	</form>
	
	{% for ans in answer %}
	{{ ans.id }}
	{{ ans.username }}
	<br>
	{% endfor %}
	<!-- {{ answer }} -->
</div>
{% endblock registration%}
{% endblock body %}


