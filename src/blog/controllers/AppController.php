<?php 

class AppController extends Controller
{
	public function abraAction($BoundleName)
	{
		View::generate($BoundleName, "abra.php");
	}
}