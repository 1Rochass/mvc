<?php
//namespace admin\models;
//use app\modules;

class ArticleModel 
{
	public function createArticle($article)
	{
		$article_title = $article['article_title'];
		$article_text = $article['article_text'];

		R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor');
		 
		$article = R::dispense('articles');
		$article->article_title = $article_title;
		$article->article_text = $article_text;
		$id = R::store($article);

		if ($id > 0 ) {
			return "Article " . $article['article_title'] . " was created";
		}
		else {
			return false;
		}
	}
	public function readArticle($article)
	{
		Pagination::setTableName($article['tableName']);
		//Page number
		if (isset($article['pageNumber'])) {
			Pagination::setPageNumber($article['pageNumber']);
		}
		// rangeRows
		if (isset($article['rangeRows'])) {
			Pagination::setRangeRows($rangeRows);
		}
		
		return Pagination::showPages();
	}
	public function updateArticle()
	{

	}
	public function deleteArticle()
	{

	}
}