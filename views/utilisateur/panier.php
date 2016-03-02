<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <title>
    Votre Panier
    </title>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
if(empty($_SESSION['pseudo']))
{
	echo "<h3>Vous devez être connecté pour allez sur le panier :</h3>";
	echo "<h2><a href='/IMIE/Equipedia/index.php?c=utilisateur&a=connect'> Connectez vous</a></h2>";
} else {
	?>
<h1>Bienvenue dans votre panier :</h1>









	<?php
}
?>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>

