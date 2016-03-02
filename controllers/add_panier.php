<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/addpanier.php");
class Panier {
	public function __construct(){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}

	
	}
?>
