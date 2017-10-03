<?php 
class LoginController
{
	function loginAction()
	{
		$view = new $View();
		$view->generate();
	}
	function check_loginAction($username, $userpassword, $email)
	{

	}
}
