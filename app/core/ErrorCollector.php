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
		self::$errors[] = "First error";
		if (count(self::$errors) >= 1) {
			// foreach (Route::$Error as $key => $value) {
			// echo $value . "<br>";
			$view = new View();
			View::$twig->render('Error.php', array('message' => ErrorCollector::$errors));
			exit();
		}	
	} 
}