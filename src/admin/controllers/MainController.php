<?php 

class MainController extends Controller
{
	public function indexAction()
	{
		echo $this->twig->render('index.php', array('book' => 'PHP'));	
	}

}