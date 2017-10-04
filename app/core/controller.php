<?php 
class Controller
{
	public $view; // Обьект View
	public $twig; // Обьект Twig_Environment
	public $model; // Обьект Model

	public function __construct()
	{
		$this->model = new Model(); // Создаем обьект Model содержащий данные о БД

		$this->view = new View(); // Обьект View содержит нужные нам обьекты Twig
		$this->twig = $this->view->twig; // Определяем в свойство twig подобьект Twig_Environment обьекта View
	}
}