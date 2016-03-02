<!DOCTYPE html>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
  <body>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <ul class="menu">
              <li><a href="/IMIE/Equipedia/">Home</a></li>
              <li><a href="/IMIE/Equipedia/index.php?c=article&a=list">Nos Chevaux</a></li>
              <li><a href="/IMIE/Equipedia/index.php?c=equipement&a=equipement">Equipements</a></li>
              <li><a href="/IMIE/Equipedia/index.php?c=utilisateur&a=panier">Panier</a></li>
            <?php
            if (!empty($_SESSION['pseudo']))
            {?>
              <li><a href="/IMIE/Equipedia/index.php?c=utilisateur&a=list">Profil</a></li>
              <li><a href="/IMIE/Equipedia/index.php?c=utilisateur&a=disconnect">Deconnexion</a></li>
            <?php
            }else {
            ?>
            <li><a href="/IMIE/Equipedia/index.php?c=utilisateur&a=add">Inscription</a></li>
            <li><a href="/IMIE/Equipedia/index.php?c=utilisateur&a=connect">Connexion</a></li>
            <?php
            }
            ?>
            </ul>
           <?php 
           if (!empty($_SESSION['pseudo'])) { ?>
           <h1 class="header"><?php echo "Bienvenue ".$_SESSION['pseudo'];?></h1>
           <?php
            }
           ?>
          </div>
        </div>
      </div>
    </header>