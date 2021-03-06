<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <title>
    Liste de nos chevaux
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="assets/img/horse-1091932_960_720.jpg" alt="horse" width="100%">
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
						  <?php echo '<p><img src="assets/img/'.$article['prenom'].'.jpg"></p>'; ?>
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
            <li>Disponible : <?php echo $article['disponible'];?></li>
          </ul>
          </div>
            <a class="info" href="/IMIE/Equipedia/index.php?c=article&a=viewAptitude&id=<?= $article['id_art']; ?>">
            Cliquer pour plus d'information</a><br/>
            <a class="panier" href="/IMIE/Equipedia/index.php?c=article&a=viewArticle&id=<?= $article['id_art']; ?>">
            Commander </a>
				</div>
			</div>
		</div>
  </div>
		<?php
		}
		?>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>