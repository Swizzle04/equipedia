<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/library/db.php");
class Model_Equipement {
	private $db;

	public function __construct()
	{
		$this->db = DB::getInstance();
	}

	public function viewEquipement($id_equip)
	{
		$query = 'SELECT * FROM equipement WHERE id_equip = '.$id_equip.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}
	
	public function listEquipements()
	{
		$query = "SELECT * FROM equipement;";
		$resultat = $this->db->get($query);
		return $resultat;
	}
	public function addEquipement($nom, $prix, $description)
	{
		$query = "INSERT INTO `equipement`( `nom`, `prix`, `description`) VALUES (:nom,:prix,:description) ";
		$tab = array(
		'nom' => $nom,
		'prix' => $prix,
		'description' => $description,
		);
		$this->db->execute($query, $tab);
	}
		public function modifyEquipement($id_equip, $nom, $prix, $description)
	{
		$query = "UPDATE `equipement` SET `nom`=:nom,`prix`=:prix,`description`=:description WHERE id_equip =".$id_equip.";";
		$tab = array(
		'nom' => $nom,
		'prix' => $prix,
		'description' => $description,
		);
		$this->db->execute($query, $tab);
	}
	public function deleteEquipement($id_equip)
	{
		$query = "DELETE FROM `equipement` WHERE id_equip = :id_equip";
		$tab = array(
			'id_equip' => $id_equip
			);
		$resultat = $this->db->execute($query, $tab);
		return $resultat;
	}

}

?>