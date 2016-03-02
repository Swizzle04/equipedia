<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/list.css">
    <title>
    Liste de nos chevaux
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="/IMIE/Equipedia/assets/img/horse-1091932_960_720.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>
		<h1>Liste des chevaux en vente</h1>
		<?php 
		foreach($listArticles as $article) {
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="list">
           <div class="prenom"><h1><?php echo $article['prenom']; ?></h1></div>
           <div class="col-xs-12 col-sm-12 col-md-6">
						<?php echo '<p><img src="/IMIE/Equipedia/assets/img/'.$article['prenom'].'.jpg"></p>'; ?>
					</div>
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li><?php echo $article['description']; ?></li>
            <li>Prix : <?php echo $article['prix'];?> €</li>
            <li>Age : <?php echo $article['age'];?></li>
            <li>Robe : <?php echo $article['robe'];?></li>
            <li>Information sur la race : <?php echo $article['info_race'];?></li>
            <li>Papier : <?php if($article['papier'] == 1) {
              echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Mère : <?php echo $article['prenom_mere'];?></li>
            <li>Race de la mère : <?php echo $article['race'];?></li>
            <li>Père : <?php echo $article['prenom_pere'];?></li>
            <li>Race du père : <?php echo $article['race_pere'];?></li>
          </ul>
          </div>
            <a class="ajout" href="/IMIE/Equipedia/admin/index.php?c=articleadmins&a=add">Ajouter un article à la page</a><br/>
            <?php echo '<a class="modify" href="/IMIE/Equipedia/admin/index.php?c=articleadmin&a=modify&id_art='.$article["id_art"].'">';?>Modifier l'article</a><br/>
            <?php echo '<a class="sup" href="/IMIE/Equipedia/admin/index.php?c=admins&a=confirm&id_art='.$article["id_art"].'">';?>Suprimer cette article</a><br/>
				</div>
			</div>
		</div>
  </div>
		<?php
		}
		?>