<?php 

class AppController extends Controller
{
	public function abraAction()
	{
		echo View::$twig->render('index.php', array('book' => 'You must be valid'));	
	}
}