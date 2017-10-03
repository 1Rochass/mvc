<?php
class RegistrationController extends Controller
{

	function registrationAction()
	{
		//View::generate($BoundleName, "registration.php");


		// $loader = new Twig_Loader_Filesystem('../src/admin/views/');
		// $twig = new Twig_Environment($loader);

		echo $this->twig->render('registration.php', array('book' => 'PHP'));	
	}
}