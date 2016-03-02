<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <title>
    Liste des aptitudes
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
		<h1>Liste des aptitudes</h1>
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
            <li>Debourer: <?php if($articleDetails[0]['debourer'] == 1) { echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Dressage : <?php if($articleDetails[0]['dressage'] == 1) { echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Saut d'obstacle : <?php if($articleDetails[0]['saut_obstacle'] == 1) { echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Cross obstacle : <?php if($articleDetails[0]['cross_obstacle'] == 1) { echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Balade : <?php if($articleDetails[0]['balade'] == 1) { echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Horse ball : <?php if($articleDetails[0]['horse_ball'] == 1) { echo "Oui"; } else { echo "Non"; } ?></li>
            <li>Mere : <?php echo $articleDetails[0]['prenom_mere'];?></li>
            <li>Pere : <?php echo $articleDetails[0]['prenom_pere'];?></li>
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