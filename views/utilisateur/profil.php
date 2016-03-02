<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <title>
    Profil
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="assets/img/horse-503619_960_720.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>
		<h1>Bienvenue sur votre profil</h1>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="list">
           <div class="nom"><h1><?php echo $_SESSION['nom']; ?></h1></div>
           <div class="prenom"><h1><?php echo $_SESSION['prenom']; ?></h1></div>
           <div class="col-xs-12 col-sm-12 col-md-6">
           </div>
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li>Pseudo :<?php echo $_SESSION['pseudo']; ?></li>
            <li>E-mail : <?php echo $_SESSION['email'];?></li>
            <li>Numéro de Telephone : <?php echo $_SESSION['numtel'];?></li>
            <li>Adresse : <?php echo $_SESSION['adresse'];?></li>
          </ul>
          </div>
          <?php echo '<a class="modify" href="/IMIE/Equipedia/index.php?c=utilisateur&a=modify&id='.$_SESSION["id"].'">';?>Modifier mon profil</a><br/>
        </div>
      </div>
    </div>
  </div>