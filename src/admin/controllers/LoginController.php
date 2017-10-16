<?php 
class LoginController extends Controller
{
	public function indexAction()
	{
		echo View::$twig->render('login.php', array('message'=> 'Fill the form to login'));

	}
	public function checkLoginAction()
	{
		// Проверяем нажата ли кнопка
		if (isset($_POST['login_submit'])) {
			// Если пустые поля отправляем на login.php 
			if ($_POST['username'] == "" or $_POST['userpassword'] == "") {
				echo View::$twig->render('login.php', array('message' => 'The fields are empty try again'));
			}
			// Создаем массив из пришедших данных
			$user['username'] = $_POST['username'];
			$user['userpassword'] = $_POST['userpassword'];
		}
		else {
			$error = "Не нажата кнопка registration_submit";
			echo View::$twig->render('error.php', array('error' => $error));
		}
		// Отправляем данные в LoginModel
		$data = $this->model->get_data("LoginModel", "checkLogin", $user);
		// Если юзер админ  
		if ($data != false) {
			// И сессия присвоили значение $_SESSION['admin'] 
			if (Session::sessionMakeVariable($data) == true) {
				// Отправляем юзера на страницу админпанели 
				header("Location: /admin/Main/");
				//echo $this->twig->render('index.php', array('message' => $data));		
			}
			// Если проблемы с сессией отправляем на login.php
			else {
				echo View::$twig->render('login.php', array('message' => 'Problem with sessionMakeVariable'));	
			}			
		}
		// Если юзер не админ отправляем на login.php
		else {
			echo View::$twig->render('login.php', array('message' => 'You are not administrator'));
		} 
	}
}
