<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Boutique/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <title>
    Liste de nos chevaux
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Boutique/views/include/header.php");
?>
		<h1>Liste des chevaux en vente :</h1>
		<?php 
		foreach($listArticles as $article) {
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="list">
						<div class="prenom"><h1><?php echo $article['prenom']; ?></h1></div>
						<?php echo '<p><img src="assets/img/'.$article['id_art'].'.jpg"></p>'; ?>
						<p><?php echo $article['description']; ?></p>
						<p>Prix : <?php echo $article['prix'];?></p>
						<p>Age : <?php echo $article['age'];?></p>
						<p>Robe : <?php echo $article['robe'];?></p>
						<p>Information sur la race : <?php echo $article['info_race'];?></p>
						<p>Papier : <?php echo $article['papier'];?></p>
						<p>Mère : <?php echo $article['prenom_mere'];?></p>
						<p>Race de la mère : <?php echo $article['race'];?></p>
						<p>Père : <?php echo $article['prenom_pere'];?></p>
						<p>Race du père : <?php echo $article['race_pere'];?></p>
            <input class="ajouter_panier" type="button" value="Ajouter Au Panier">
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		?>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Boutique/views/include/footer.php");
?>