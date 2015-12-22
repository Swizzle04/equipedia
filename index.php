<?php
session_start();
$controller = "";
$action = "";
if(!empty($_GET['c']) && !empty($_GET['a'])) {
	$controller = $_GET['c'];
	$action = $_GET['a'];
}

if($controller== "article" && $action == "list"){
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/controllers/article.php");
	$controller_article = new Controller_Article();
	$controller_article->listArticle();
} elseif ($controller == "article" && $action == "view") {
	if(empty($_GET['id'])) {
		echo "<p>Il manque l'identifiant du produit </p>";
	} else {
		$idProduit = intval($_GET['id']);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->viewArticle($idProduit);
	}
} elseif ($controller == "" && $action == "") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/views/acceuil/view.php");
} elseif ($controller == "utilisateur" && $action == "add") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->addUtilisateur();
} elseif ($controller == "utilisateur" && $action == "connect") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->connectUtilisateur();
} elseif ($controller == "utilisateur" && $action == "disconnect") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->disconnectUtilisateur();
}elseif ($controller == "utilisateur" && $action == "panier") {
	require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/controllers/utilisateur.php");
	$controller_utilisateur = new Controller_Utilisateur();
	$controller_utilisateur->panierUtilisateur();
}
?>