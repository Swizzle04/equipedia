<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/list.css">
    <title>
    Liste des commandes
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="/IMIE/Equipedia/assets/img/boxes_ranch_pre_chenes_pension_cheval.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>
    <h1>Liste des commandes</h1>
    <?php 
    foreach($listCommande as $commande) {
    ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="list">
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li>Date :<?php echo $commande['date_com']; ?></li>
            <li>Client : <?php echo $commande['id'];?></li>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php
    }
    ?>