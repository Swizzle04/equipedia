<!DOCTYPE html>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Boutique/views/include/head.php");
?>
  <body>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul class="menu">
              <li><a href="/IMIE/Boutique/">Home</a></li>
              <li><a href="/IMIE/Boutique/index.php?c=article&a=list">Nos Chevaux</a></li>
              <li><a href="/IMIE/Boutique/index.php?c=utilisateur&a=panier">Panier</a></li>
            <?php
            if (!empty($_SESSION['pseudo']))
            {?>
              <li><a href="/IMIE/Boutique/index.php?c=utilisateur&a=disconnect">Deconnexion</a></li>
            <?php
            }else {
            ?>
            <li><a href="/IMIE/Boutique/index.php?c=utilisateur&a=add">Inscription</a></li>
            <li><a href="/IMIE/Boutique/index.php?c=utilisateur&a=connect">Connexion</a></li>
            <?php
            }
            ?>
            </ul>
           <?php 
           if (!empty($_SESSION['pseudo'])) 
           {
           echo "Bonjour ".$_SESSION['pseudo']; 
            }
           ?>
          </div>
        </div>
      </div>
    </header>