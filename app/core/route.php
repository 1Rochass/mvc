<?php 
class Route 
{
	static $ControllerName; 
	static $ActionName;
	static $BoundleName;

	static function routeStart()
	{

		self::$ControllerName = "Main"; 
		self::$ActionName = "index";
		self::$BoundleName = "blog";
		
		// Cuting GET request like ?article=1&page=2
		$requestUri = preg_replace("/[?&*]\w+[=]\w+/", "", $_SERVER['REQUEST_URI']);
		
		$route = explode("/", $requestUri);

		if(!empty($route[1])){

			self::$BoundleName = $route[1];	

		}
		if(!empty($route[2])){

			self::$ControllerName = $route[2];	

		}
		if(!empty($route[3])){

			self::$ActionName = $route[3];	

		}
	}

	static function routeRequireController ()
	{
		self::$ControllerName = self::$ControllerName . "Controller"; 
		self::$ActionName = strtolower(self::$ActionName) . "Action";

		// Проверяем наличие файла
		if (file_exists("src/" . self::$BoundleName . "/controllers/" . self::$ControllerName . ".php")) {

			require_once "src/" . self::$BoundleName . "/controllers/" . self::$ControllerName . ".php";

		}
		else {

			ErrorCollector::$errors[] = "File " . Route::$ControllerName . ".php does not exist"; // Файл не найден
			ErrorCollector::showErrors();	

		}

		// Проверяем наличие класса
		if(class_exists(Route::$ControllerName)){

			$Controller = self::$ControllerName;
			if (method_exists(Route::$ControllerName, Route::$ActionName)) {
				$Action = self::$ActionName;
				// Создаем обьект контроллера и запускаем его метод
				$Controller = new $Controller();
				$Controller->$Action();
			}
			else{
				// Метод не найден
				ErrorCollector::$errors[] = "Method " . Route::$ActionName . " does not exist"; 
				ErrorCollector::showErrors();	
			}
		}
		else{
			// Класс не найден
			ErrorCollector::$errors[] = "Class " . Route::$ControllerName . " does not exist"; 
			ErrorCollector::showErrors();	
		}
	}	
} 