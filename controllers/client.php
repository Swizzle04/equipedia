<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/client.php");
class Controller_Client {
	//Fonction permettant de lister les articles
	public function listClient() {
		$client = new Model_Client();
		$listClient = $client->listClient();
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/client.php");
	}

	public function viewClient($id)
	{
		$client = new Model_Client();
		$clientDetails = $client->loadClient($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/view_client.php");
	}
}



?>