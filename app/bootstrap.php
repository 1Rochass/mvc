<?php 	
require_once "app/core/route.php";
require_once "app/core/controller.php";
require_once "app/core/view.php";
require_once "app/core/module.php";

//Twig
require_once 'vendor/autoload.php';

// Запускает роутер
Route::start();
