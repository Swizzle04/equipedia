<?php
session_start();
$controller = "";
$action = "";
if(!empty($_GET['c']) && !empty($_GET['a'])) {
	$controller = $_GET['c'];
	$action = $_GET['a'];
}

if($controller== "admins" && $action == "article"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/articleadmin.php");
	$controller_article = new Controller_Article();
	$controller_article->listArticle();
} elseif ($controller == "admins" && $action == "viewart") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/articleadmin.php");
		$controller_article = new Controller_Article();
		$controller_article->viewArticle($idProduit);
	}
} elseif($controller== "articleadmins" && $action == "add"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/articleadmin.php");
	$controller_article = new Controller_Article();
	$controller_article->addArticle();
} elseif ($controller == "admins" && $action == "connect") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/admins.php");
	$controller_utilisateur = new Controller_Admins();
	$controller_utilisateur->connectAdmins();
} elseif ($controller == "utilisateur" && $action == "disconnect") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->disconnectUtilisateur();
}elseif ($controller == "equipementadmin" && $action == "add"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipementadmin.php");
	$controller_equipementadmin = new Controller_Equipement();
	$controller_equipementadmin->addEquipement();
} elseif($controller== "admins" && $action == "equipement"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipementadmin.php");
	$controller_equipement = new Controller_Equipement();
	$controller_equipement->listEquipement();
} elseif ($controller == "admins" && $action == "view_equip") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipementadmin.php");
		$controller_equipement = new Controller_Equipement();
		$controller_equipement->viewEquipement($idProduit);
	}
} elseif ($controller == "equipementadmin" && $action == "modify"){
	if(!isset($_GET['id_equip']) || $_GET['id_equip'] < 0) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id_equip']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipementadmin.php");
		$controller_equipement = new Controller_Equipement();
		$controller_equipement->modifyEquipement($idProduit);
	}
} elseif ($controller == "articleadmin" && $action == "modify"){
	if(!isset($_GET['id_art']) || $_GET['id_art'] < 0) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id_art']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/articleadmin.php");
		$controller_article = new Controller_Article();
		$controller_article->modifyArticle($idProduit);
	}
} elseif($controller== "admins" && $action == "client"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/client.php");
	$controller_client = new Controller_Client();
	$controller_client->listClient();
} elseif ($controller == "admins" && $action == "viewclient") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/client.php");
		$controller_client = new Controller_Client();
		$controller_client->viewClient($idProduit);
	}
} elseif($controller== "admins" && $action == "commande"){
	require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/controllers/command.php");
	$controller_commande = new Controller_Commande();
	$controller_commande->listCommande();
} elseif ($controller == "admins" && $action == "viewcommande") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/command.php");
		$controller_commande = new Controller_Commande();
		$controller_commande->viewCommande($idProduit);
	}
} elseif ($controller == "admins" && $action == "confirm"){
	if(!isset($_GET['id_art']) || $_GET['id_art'] < 0) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$id_art = intval($_GET['id_art']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/articleadmin.php");
		$controller_article = new Controller_Article();
		$controller_article->confirmDelete($id_art);
	}
} elseif ($controller == "admins" && $action == "delete"){
	if(!isset($_GET['id_art']) || $_GET['id_art'] < 0) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$id_art = intval($_GET['id_art']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/articleadmin.php");
		$controller_article = new Controller_Article();
		$controller_article->deleteArticle($id_art);
	}
}  elseif ($controller == "admins" && $action == "confirmEquipement"){
	if(!isset($_GET['id_equip']) || $_GET['id_equip'] < 0) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$id_equip = intval($_GET['id_equip']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipementadmin.php");
		$controller_equipement = new Controller_Equipement();
		$controller_equipement->confirmDeleteequip($id_equip);
	}
} elseif ($controller == "admins" && $action == "deleteEquipement"){
	if(!isset($_GET['id_equip']) || $_GET['id_equip'] < 0) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$id_art = intval($_GET['id_equip']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipementadmin.php");
		$controller_equipement = new Controller_Equipement();
		$controller_equipement->deleteEquipement($id_equip);
	}
}

?>