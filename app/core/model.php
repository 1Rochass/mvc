<?php
class Model 
{
	public $db;

	public function __construct()
	{
		require_once "app/config/db.php";
		//$this->db = new PDO("mysql:host = $host, dbname = $db", $user, $password);
	}

	public function get_data($model,$method, $data=null) // Функцию переименовать в data
	{
		require_once "src/" . Route::$BoundleName . "/models/" . $model . ".php";

		$model = new $model();
		return $model->$method($data);
	}
}