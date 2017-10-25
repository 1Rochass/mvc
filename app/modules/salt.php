// Создает соль для паролей
// Salt::make_salt(12); - Вернет 12 рандомных знаков 
<?php
class Salt
{
	static $salt;
	static $chars = "1234567890qwertyuiopasdfghjklzxcvbnm";
	
	static function make_salt($count)
	{
		for ($i=0; $i < $count ; $i++) { 
			$rand = mt_rand(0, 36);
			self::$salt .= self::$chars[$rand]; 
		}
		
		return self::$salt;
	}
} 

?>