<?php 	
// Main class
require_once "app/core/Kernel.php";

require "app/config/config.php";

require_once "app/core/Session.php";

require_once "app/core/Route.php";
require_once "app/core/Controller.php";
require_once "app/core/View.php";
require_once "app/core/Model.php";

require_once "app/core/Verification.php";
require_once "app/core/ErrorCollector.php";

//Twig
require_once 'vendor/autoload.php';


// Start
Kernel::kernelStart();




