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

	}
	public function deleteArticleAction()
	{

	}
}