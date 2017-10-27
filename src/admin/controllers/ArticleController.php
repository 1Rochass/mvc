<?php
// namespace admin\controllers;

class  ArticleController extends Controller
{
	public function createArticleAction()
	{
		// Create Article with data
		if (isset($_POST['createArticleSubmit'])) {
			$article['article_title'] = $_REQUEST['article_title'];
			$article['article_text'] = $_REQUEST['article_text'];

			$data = $this->model->get_data('ArticleModel', 'createArticle', $article);
			// If article created
			if ($data != false) {
				echo View::$twig->render('createArticleView.php', array('message' => $data));	
			}
			// If article did not created
			else {
				echo View::$twig->render('createArticleView.php', array('message' => "Article can't created"));	
			}
		}
		// Show createArticle form
		else {
			echo View::$twig->render('createArticleView.php', array('message' => ''));	
		}
	}
	public function readArticleAction()
	{
		// Number of page 
		if (isset($_REQUEST['pageNumber'])) {
			$article['pageNumber'] = $_REQUEST['pageNumber'];	
		}
		// Range of articles 
		if (isset($_REQUEST['rangeRows'])) {
			$article['rangeRows'] = $_REQUEST['rangeRows'];	
		}
		// Name of data base table
		$article['tableName'] = "articles";

		$data = $this->model->get_data('ArticleModel', 'readArticle', $article);
		echo View::$twig->render('readArticleView.php', array('articles' => $data['articles'], 'countPages' => $data['countPages']));
	}
	public function updateArticleAction()
	{
		if (isset($_REQUEST['showArticleForUpdate'])) {
			$article['id'] = $_REQUEST['id'];
			$data = $this->model->get_data('ArticleModel', 'updateArticle', $article);
			echo View::$twig->render('updateArticleView.php', array('article' => $data));
		}
		if (isset($_REQUEST['updateArticle'])) {
			// All arguments what we need to update article we taking from $_REQUEST
			$article = $_REQUEST;
	 		$data = $this->model->get_data('ArticleModel', 'updateArticle', $article);
			echo View::$twig->render('updateArticleView.php', array('article' => $data['article'], 'message' => $data['message']));
		 } 	
	}
	public function deleteArticleAction()
	{
		if (isset($_REQUEST['deleteArticle'])) {
			$article['id']= $_REQUEST['id'];
			$data = $this->model->get_data('ArticleModel', 'deleteArticle', $article);
			echo View::$twig->render('updateArticleView.php', array('message' => $data));
		}
	}
}