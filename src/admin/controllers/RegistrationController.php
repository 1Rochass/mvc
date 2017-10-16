<?php
class RegistrationController extends Controller
{

	public function indexAction()
	{
		//View::generate($BoundleName, "registration.php");


		// $loader = new Twig_Loader_Filesystem('../src/admin/views/');
		// $twig = new Twig_Environment($loader);

		echo $this->twig->render('registration.php', array('book' => 'PHP'));	
	}
	public function makeRegistrationAction()
	{
		if (isset($_POST['registration_submit'])) {
			$user['username'] = $_POST['username'];
			$user['userpassword'] = $_POST['userpassword'];
			$user['useremail'] = $_POST['useremail'];
		}
		else {
			$error = "Не нажата кнопка registration_submit";
			echo $this->twig->render('error.php', array('error' => $error));
		}

		$data = $this->model->get_data("RegistrationModel", "setRegistration", $user);
		
		echo $this->twig->render('registration.php', array('answer' => $data));
	}
}