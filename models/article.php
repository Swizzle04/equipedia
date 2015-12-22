<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/library/db.php");
class Model_Article {
	private $db;

	public function __construct()
	{
		$this->db = DB::getInstance();
	}

	public function listArticles()
	{
		$query = "SELECT * FROM article;";
		$resultat = $this->db->get($query);
		return $resultat;
	}
	public function loadArticle($id)
	{
		return "CHARGEMENT DE L'ARTICLE ".$id;
	}
}

?>