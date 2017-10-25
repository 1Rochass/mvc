<?php
class LoginModel extends Model
{
	function checkLogin($user)
	{
		$username = $user['username'];
		$userpassword = $user['userpassword'];

		// Work with RedBeanPHP
		// Connection
		R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor');
		// Create bean
		$user = R::dispense('users'); 
		// Write data in array 
		$user = R::findOne('users', 'username = ?', array($username)); 
		
		if (is_object($user)) {
			// Проверяем является user админом
			if ($user->admin == 1) {
				return $user;
			}
			else {
				return false;
			}
		}
		else {
			return false;
		}
	}
}