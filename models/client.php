<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/library/db.php");
class Model_Client {
	private $db;

	public function __construct()
	{
		$this->db = DB::getInstance();
	}

	public function viewClient($id)
	{
		$query = 'SELECT * FROM users WHERE id = '.$id.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listClient()
	{
		$query = "SELECT * FROM users;";
		$resultat = $this->db->get($query);
		return $resultat;
	}
	public function loadClient($id)
	{
		return "CHARGEMENT DU CLIENT ".$id;
	}
}