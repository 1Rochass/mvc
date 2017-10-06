<?php
class RegistrationModel extends Model
{
	function setRegistration($user)
	{
		$username = $user['username'];
		$userpassword = $user['userpassword'];
		$useremail = $user['useremail'];

		// Work with RedBeanPHP
		R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor'); // Connection

		// $user = R::dispense('users');	// Make a bean
		
		// Заполняем данными поля username и т.д.
		// $user->username = $username;	// ORM 
		// $user->userpassword = $userpassword;
		// $user->useremail = $useremail;

		// $id = R::store($user);	// Make query
		

		// Выводим данные из users с id = 4
		// return $user = R::load('users', 4);

		// Выводим массив
		// for($i = 1; R::count('users') >= $i; $i++){
		// 	$data[] = $user = R::load('users', $i);
		// } 
		// return $data;

		// Выводми массив хорошо получается так в Twig: 
		// 	{% for ans in answer %}
		// {{ ans.id }}
		// {{ ans.username }}
		// <br>
		// {% endfor %}
		//return $data = R::getAll("SELECT * FROM users");

		// Проверка
		// if ($id > 0) {
		// 	return "You have been registred.";	
		// }
		// else {
		// 	return "Something wrong with registration.";	
		// }
		
		





	
	}
}