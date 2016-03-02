<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/command.php");
class Controller_Commande {
	//Fonction permettant de lister les articles
	public function listCommande() {
		$commande = new Model_Commande();
		$listCommande = $commande->listCommande();
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/command.php");
	}

	public function viewCommande($id)
	{
		$commande = new Model_Commande();
		$commandeDetails = $commande->loadCommande($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/view_commande.php");
	}
}



?>