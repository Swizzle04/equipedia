<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <title>
    Liste des équipement
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="assets/img/wampmanager.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>
  <h1>Liste des équipement en vente :</h1>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="list">
           <div class="nom"><h1><?php echo $equipementDetails[0]['nom']; ?></h1></div>
           <div class="col-xs-12 col-sm-12 col-md-6">
            <?php echo '<p><img src="assets/img/'.$equipementDetails[0]['nom'].'.jpg"></p>'; ?>
          </div>
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li>Prix :<?php echo $equipementDetails[0]['prix']; ?> €</li>
            <li>Description :<?php echo $equipementDetails[0]['description'];?></li>
          </ul>
          </div>
          <a class="panier" href="/IMIE/Equipedia/index.php?c=equipement&a=commande">
            Commander </a>
        </div>
      </div>
    </div>
  </div>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>