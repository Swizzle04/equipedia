<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/library/db.php");
class Model_Commande {
	private $db;

	public function __construct()
	{
		$this->db = DB::getInstance();
	}

	public function viewCommande($id_com)
	{
		$query = 'SELECT * FROM commande,users,article WHERE id_com = '.$id_com.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listCommande()
	{
		$query = "SELECT * FROM commande,users,article;";
		$resultat = $this->db->get($query);
		return $resultat;
	}
	public function loadCommande($id)
	{
		return "CHARGEMENT DE LA COMMANDE ".$id_com;
	}
}