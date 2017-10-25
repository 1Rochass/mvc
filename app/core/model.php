<?php
class Model 
{
	public $connection;
	public function __construct()
	{
		//R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor');
		//$this->connection = new mysqli(DB::$host, DB::$user, DB::$password, DB::$db);
		// $this->db = new PDO("mysql:host = $host, dbname = $db", $user, $password);
	}

	public function get_data($model,$method, $data=null) // Функцию переименовать в data
	{
		require_once "src/" . Route::$BoundleName . "/models/" . $model . ".php";
		
		$model = new $model();
		return $model->$method($data);
	}
}