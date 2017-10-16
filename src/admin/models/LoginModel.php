<?php
class LoginModel extends Model
{
	function checkLogin($user)
	{
		$username = $user['username'];
		$userpassword = $user['userpassword'];

		// Work with RedBeanPHP
		R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor'); // Connection
		
		$user = R::dispense('users'); // Создаем bean

		$user = R::findOne('users', 'username = ?', array($username)); // Записываем в массив данные
		
		if (is_object($user)) {
			// Проверяем является uer админом
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