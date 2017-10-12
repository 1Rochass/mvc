<?php 
class StoreController extends Controller
{
	public function indexAction()
	{
		echo $this->twig->render('index.php', array('hello' =>'Hello store'));	
	}
}