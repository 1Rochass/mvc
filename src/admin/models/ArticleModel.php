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
	public function updateArticle($article)
	{
		// If $article contains only article id
		if (isset($article['updateArticle'])) {
			
			R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor');
			$updateArticle = R::dispense('articles');
			$updateArticle->article_title = $article['article_title'];
			$updateArticle->article_text = $article['article_text'];
			$updateArticle->id = $article['id'];
			$id = R::store($updateArticle);

			if ($id > 0) {
				$data['article'] = $article;
				$data['message'] = "Updated";
				return $data;
			}			
			else {
				return $data['message'] = "Something wrong with Update";;
			}
		}
		else {
			R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor');
			R::dispense('articles');
			return $data = R::load('articles', $article['id']);
		}
	}
	public function deleteArticle($article)
	{
		R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor');
		$deleteArticle = R::dispense('articles');
		// Signed id wich we must delete
		$deleteArticle->id = $article['id'];
		R::trash($deleteArticle);
		return "Article with id " . $article['id'] . " was deleted.";
	}
}