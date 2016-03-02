<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/equipement.php");
class Controller_Equipement {
	//Fonction permettant de lister les articles
	public function listEquipement() {
		$equipements = new Model_Equipement();
		$listEquipements = $equipements->listEquipements();
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/articles/equipement.php");
	}

	public function viewEquipement($id)
	{
		$equipements = new Model_Equipement();
		$equipementDetails = $equipements->viewEquipement($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/articles/equipement2.php");
	}
}



?>