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
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="list">
           <div class="prenom"><h1><?php echo $articleDetails[0]['prenom']; ?></h1></div>
           <div class="col-xs-12 col-sm-12 col-md-6">
						  <?php echo '<p><img src="assets/img/'.$articleDetails[0]['prenom'].'.jpg"></p>'; ?>
					 </div>
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li><?php echo $articleDetails[0]['description']; ?></li>
            <li>Prix : <?php echo $articleDetails[0]['prix'];?> €</li>
            <li>Age : <?php echo $articleDetails[0]['age'];?></li>
            <li>Robe : <?php echo $articleDetails[0]['robe'];?></li>
            <li>Information sur la race : <?php echo $articleDetails[0]['info_race'];?></li>
            <li>Papier : <?php if($articleDetails[0]['papier'] == 1) {
              echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Mère : <?php echo $articleDetails[0]['prenom_mere'];?></li>
            <li>Race de la mère : <?php echo $articleDetails[0]['race'];?></li>
            <li>Père : <?php echo $articleDetails[0]['prenom_pere'];?></li>
            <li>Race du père : <?php echo $articleDetails[0]['race_pere'];?></li>
          </ul>
          </div>
          <a class="panier" href="/IMIE/Equipedia/index.php?c=article&a=commande">
            Commander </a>
        </div>
      </div>
    </div>
  </div>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>