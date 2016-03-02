<!DOCTYPE html>
<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
  <body>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul class="menu">
              <li><a href="/IMIE/Equipedia/views/admins/home.php">Home</a></li>
              <li><a href="/IMIE/Equipedia/admin/index.php?c=admins&a=article">Article</a></li>
              <li><a href="/IMIE/Equipedia/admin/index.php?c=admins&a=equipement">Equipement</a></li>
              <li><a href="/IMIE/Equipedia/admin/index.php?c=admins&a=client">Client</a></li>
              <li><a href="/IMIE/Equipedia/admin/index.php?c=admins&a=commande">Commande</a></li>   
              <li><a href="/IMIE/Equipedia/admin/index.php?c=utilisateur&a=disconnect">Deconnexion</a></li>
          </div>
        </div>
      </div>
    </header>