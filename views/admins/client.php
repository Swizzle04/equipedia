<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/list.css">
    <title>
    Liste de nos clients
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="/IMIE/Equipedia/assets/img/seaside-1031450_960_720.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>
    <h1>Liste de nos clients</h1>
    <?php 
    foreach($listClient as $client) {
    ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="list">
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li>Nom :<?php echo $client['nom']; ?></li>
            <li>Prenom : <?php echo $client['prenom'];?></li>
            <li>Pseudo : <?php echo $client['pseudo'];?></li>
            <li>Email : <?php echo $client['email'];?></li>
            <li>Numéro de téléphone: <?php echo $client['numtel'];?></li>
            <li>Adresse : <?php echo $client['adresse'];?></li>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php
    }
    ?>