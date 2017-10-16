<?php

class Kernel 
{
	static function kernelStart()
	{
		Session::sessionStart();
		Route::routeStart();
		Verification::verificationStart();
		ErrorCollector::showErrors();		
	}	
}
