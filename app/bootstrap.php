<?php 	
// Main class
require_once "app/core/Kernel.php";
// config file
require "app/config/config.php";

require_once "app/core/Session.php";

require_once "app/core/Route.php";
require_once "app/core/Controller.php";
require_once "app/core/View.php";
require_once "app/core/Model.php";
// Verification.php Security 
require_once "app/core/Verification.php";
// ErrorCollector.php Сборщик ошибок
require_once "app/core/ErrorCollector.php";
//Twig
require_once 'vendor/autoload.php';
// RedBeanPHP
require_once "app/config/rb.php";

//modules
require_once "app/modules/pagination.php";

// Start
Kernel::kernelStart();




