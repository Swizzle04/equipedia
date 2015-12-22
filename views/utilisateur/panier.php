<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Boutique/views/include/header.php");
if(empty($_SESSION['pseudo']))
{
	echo "<h3>Vous devez être connecté pour allez sur le panier :</h3>";
	echo "<h2><a href='/IMIE/Boutique/index.php?c=utilisateur&a=connect'> Connectez vous</a></h2>";
} else {
	?>
<h1>Bienvenue dans votre panier :</h1>








	<?php
}
?>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Boutique/views/include/footer.php");
?>

