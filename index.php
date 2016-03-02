<?php
session_start();
$controller = "";
$action = "";
if(!empty($_GET['c']) && !empty($_GET['a'])) {
	$controller = $_GET['c'];
	$action = $_GET['a'];
}

if($controller== "article" && $action == "list"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/article.php");
	$controller_article = new Controller_Article();
	$controller_article->listArticle();
} elseif ($controller == "article" && $action == "view") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->viewArticle($idProduit);
	}
} elseif ($controller == "article" && $action == "viewAptitude") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->viewAptitude($idProduit);
	}
}  elseif ($controller == "article" && $action == "viewArticle") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->viewArticle($idProduit);
	}
} elseif ($controller == "" && $action == "") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/acceuil/view.php");
} elseif ($controller == "utilisateur" && $action == "add") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->addUtilisateur();
} elseif ($controller == "utilisateur" && $action == "connect") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->connectUtilisateur();
} elseif ($controller == "utilisateur" && $action == "disconnect") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->disconnectUtilisateur();
}elseif($controller== "utilisateur" && $action == "list"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->listUtilisateurs();
} elseif ($controller == "utilisateur" && $action == "view") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
		$controller_utilisateur = new Controller_Utilisateur();
		$controller_utilisateur->viewUtilisateur($idProduit);
	}
}elseif ($controller == "utilisateur" && $action == "panier") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->panierUtilisateur();
} elseif($controller== "equipement" && $action == "equipement"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipement.php");
	$controller_equipement = new Controller_Equipement();
	$controller_equipement->listEquipement();
} elseif ($controller == "equipement" && $action == "view_equip") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/equipement.php");
		$controller_equipement = new Controller_Equipement();
		$controller_equipement->viewEquipement($idProduit);
	}
} elseif ($controller == "utilisateur" && $action == "modify"){
	if(!isset($_GET['id']) || $_GET['id'] < 0) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/controllers/utilisateur.php");
		$controller_utilisateur = new Controller_Utilisateur();
		$controller_utilisateur->modifyUtilisateur($idProduit);
	}
}elseif ($controller == "article" && $action == "commande") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/articles/commande2.php");
}elseif ($controller == "equipement" && $action == "commande") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/articles/commande_equip.php");
}
?>