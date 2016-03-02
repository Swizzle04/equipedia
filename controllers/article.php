<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/article.php");
class Controller_Article {
	//Fonction permettant de lister les articles
	public function listArticle() {
		$articles = new Model_Article();
		$listArticles = $articles->listArticles();
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/articles/list.php");
		}

	public function viewArticle($id)
	{
		$articles = new Model_Article();
		$articleDetails = $articles->viewArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/articles/commande.php");
	}

	public function viewAptitude($id)
	{
		$aptitude = new Model_Article();
		$articleDetails = $aptitude->viewAptitude($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/articles/listaptitude.php");
	}
}



?>