<?php
// Сборщик ошибок помогает при выключином ini_set(display_error, 1) и т.д.

class ErrorCollector
{
	public static $errors;
	// if (in_array(needle, haystack)) {
	// 	# code...
	// }
	static function showErrors()
	{
		if (count(self::$errors) >= 1) {
			foreach (ErrorCollector::$errors as $key => $value) {
			$view = new View();
			echo View::$twig->render('error.php', array('message' => ErrorCollector::$errors));
			}
			exit();
		}	
	} 
}