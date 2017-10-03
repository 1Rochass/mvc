<?php 

class MainController extends Controller
{
	public function indexAction($BoundleName)
	{
		View::generate($BoundleName, "index.php");
	}

}