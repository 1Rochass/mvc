<?php
class Session
{
	static function sessionStart()
	{
		session_start(); //Стартуем сессию

		if (empty($_SESSION['admin']) and empty($_SESSION['user'])){
			$_SESSION['user'] = "new user";
		}
	}

	static function sessionMakeVariable($user)
	{
		// if(isset($_POST['login_form']))
		// {
		// 	$username = $_POST['username'];
		// 	$userpassword = $_POST['userpassword'];

		// 	include_once 'db.php';
		// 	$query = $connect->query("SELECT * FROM `users` WHERE username = '$username' AND userpassword = '$userpassword'");
		// 	if($query->num_rows >=1)
		// 	{
		// 		while($row = $query->fetch_array())
		// 		{
		if ($user->admin == 1) {
			$_SESSION['admin_name'] = $user->username;	
			$_SESSION['admin'] = $user->admin;
			return true;
		}
		else {
			return false;
		}
		// else {
		// 	$_SESSION['user'] = $user['username'];	
		// 	return $_SESSION['user'];
		// }
		
		
			// 		echo "<script>window.location.href = '/';</script>";
			// 	}
			// }
			// else 
			// {
			// 	echo "Wrong username or userpassword";
			// }
		// }

		// if(isset($_POST['logout_form']))
		// {
		// 	session_destroy();
		// 	unset($_SESSION['admin']);
		// 	unset($_SESSION['user']);
		// 	echo "<script>window.location.href = '/';</script>";
		// }
	}
	static function sessionDestroy()
	{
		session_destroy();
		unset($_SESSION['admin']);
		return true;
		// unset($_SESSION['user']);
		// echo "<script>window.location.href = '/';</script>";
	}

	// function session_show_form()
	// {
	// 	if (empty($_SESSION['user']))
	// 	{
	// 		include '/application/views/view_login_form.php';
	// 	}
	// 	else
	// 	{
	// 		echo $_SESSION['user'];
	// 		include '/application/views/view_logout_form.php';
	// 	}
	// }
}


