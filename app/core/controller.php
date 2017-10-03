<?php 
class Controller
{
	public $view; // Обьект View
	public $twig; // Обьект Twig_Environment

	public function __construct()
	{
		$this->view = new View(); // Обьект View содержит нужные нам обьекты Twig
		$this->twig = $this->view->twig; // Определяем в свойство twig подобьект Twig_Environment обьекта View
	}
}