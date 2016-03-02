<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/library/db.php");
class Model_Article {
	private $db;

	public function __construct()
	{
		$this->db = DB::getInstance();
	}

	public function viewArticle($id_art)
	{
		$query = 'SELECT * FROM article WHERE id_art = '.$id_art.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listArticles()
	{
		$query = "SELECT * FROM article;";
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function viewAptitude($id)
	{
		$query = 'SELECT ar.id_art, ar.prenom, ar.prix, ar.age, ar.robe, ar.papier, ar.id_mere, ar.prenom_mere, ar.id_pere, ar.prenom_pere, 
		ap.debourer, ap.dressage, ap.saut_obstacle, ap.cross_obstacle, ap.balade, ap.horse_ball 
		FROM article ar, aptitude ap
		WHERE ar.id_art = ap.id_art
		AND ar.id_art = '.$id.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function addArticle($prenom, $description, $prix, $age, $robe, $info_race, $papier, $id_mere, $prenom_mere, $race, $id_pere, $prenom_pere, $race_pere)
	{
		$query = "INSERT INTO `article`(`prenom`, `description`, `prix`, `age`, `robe`, `info_race`, `papier`, `id_mere`, `prenom_mere`, `race`, `id_pere`, `prenom_pere`, `race_pere`) VALUES (:prenom,:description,:prix,:age,:robe,:info_race,:papier,:id_mere,:prenom_mere,:race,:id_pere,:prenom_pere,:race_pere);";
		$tab = array(
		'prenom' => $prenom,
		'description' => $description,
		'prix' => $prix,
		'age' => $age,
		'robe' => $robe,
		'info_race' => $info_race,
		'papier' => $papier,
		'id_mere' => $id_mere,
		'prenom_mere' => $prenom_mere,
		'race' => $race,
		'id_pere' => $id_pere,
		'prenom_pere' => $prenom_pere,
		'race_pere' => $race_pere,
		);
		$variable = $this->db->execute($query, $tab);
		echo $variable;
	}
	public function modifyArticle($id_art, $prenom, $description, $prix, $age, $robe, $info_race, $papier, $id_mere, $prenom_mere, $race, $id_pere, $prenom_pere, $race_pere)
	{
		$query = "UPDATE `article` SET `prenom`=:prenom,`description`=:description,`prix`=:prix,`age`=:age,`robe`=:robe,`info_race`=:info_race,`papier`=:papier,`id_mere`=:id_mere,`prenom_mere`=:prenom_mere,`race_pere`=:race_pere,`id_pere`=:id_pere,`prenom_pere`=:prenom_pere,`race_pere`=:race_pere WHERE id_art =".$id_art.";";
		$tab = array(
		'prenom' => $prenom,
		'description' => $description,
		'prix' => $prix,
		'age' => $age,
		'robe' => $robe,
		'info_race' => $info_race,
		'papier' => $papier,
		'id_mere' => $id_mere,
		'prenom_mere' => $prenom_mere,
		'race' => $race,
		'id_pere' => $id_pere,
		'prenom_pere' => $prenom_pere,
		'race_pere' => $race_pere,
		);
		$this->db->execute($query, $tab);
	}
		public function deleteArticle($id_art)
	{
		$query = "DELETE FROM `article` WHERE id_art = :id_art";
		$tab = array(
			'id_art' => $id_art
			);
		$resultat = $this->db->execute($query, $tab);
		return $resultat;
	}
}
?>