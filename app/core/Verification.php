<?php
// Класс проверяет по переменной $BoundleName путь 
// запрашиваемый пользователем и решает пускать его туда или нет

// Наследует Controller для доступа к Twig
class Verification extends Controller 
{
	static function verificationStart()
	{
		// Если путь не запрещен - пропускает пользователя дальше
		if(Route::$BoundleName !== "admin" ) {
			Route::routeRequireController();			
		}
		else if (Route::$BoundleName == "admin" and Route::$ControllerName == "Login") {
			Route::routeRequireController();		
		}
		//Если путь запрещен проверяем пропуск $_SESSION['admin']
		else {
			// Если пропуск не подходит перенаправляем на страницу логина
			if (empty($_SESSION['admin'])) {
				echo header("Location:/admin/Login/");
			}			
			else {
				
				Route::routeRequireController();
			}
		}

		// else if (Route::$BoundleName == "admin") {
		// 	Route::routeRequireController();
		// }
		
	}
}