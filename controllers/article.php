<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/models/article.php");
class Controller_Article {
	//Fonction permettant de lister les articles
	public function listArticle() {
		$articles = new Model_Article();
		$listArticles = $articles->listArticles();
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/views/articles/list.php");
	}

	public function viewArticle($id)
	{
		$articles = new Model_Article();
		$articleDetails = $articles->loadArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/views/articles/view.php");
	}
}



?>