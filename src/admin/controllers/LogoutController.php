<?php 
class LogoutController extends Controller
{
	function logoutAction()
	{		
		if (Session::sessionDestroy()) {
			echo header("Location: /admin/Login/");
		}
	}
}
