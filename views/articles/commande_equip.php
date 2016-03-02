<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/accueil.css">
    <title>
    Commande
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>
<?php if(empty($_SESSION['pseudo']))
{
    echo "<h3>Vous devez être connecté pour commander :</h3>";
    echo "<h2><a href='/IMIE/Equipedia/index.php?c=utilisateur&a=connect'> Connectez vous</a></h2>";
} else {
    ?>
<h1>Votre commande à bien été passé, merci de votre confiance !</h1>
<?php 
}
?>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>