{% extends "admin_template.php" %}
{% block body %}
<div id="registration_form">
	<form action="" method="POST" >
		<div class="form-group">
			<label for="userlogin">Логин</label>
			<input type="text" name="userlogin" id="userlogin" class="form-control">	
		</div>
		<div class="form-group">
			<label for="userpassword">Пароль</label>
			<input type="text" name="userpassword" id="userpassword">	
		</div>
		<div class="form-group">
			<label for="useremail">Email</label>
			<input type="text" name="useremail" id="useremail">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
{% endblock body %}


