<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/list.css">
    <title>
    Supression equipements
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="/IMIE/Equipedia/assets/img/horse-1091932_960_720.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>
		<h1>Voulez vous vraiment supprimer cette equipement ?</h1>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="list">
           <div class="prenom"><h1><?php echo $viewEquipement[0]['nom']; ?></h1></div>
           <div class="col-xs-12 col-sm-12 col-md-6">
            <?php echo '<p><img src="/IMIE/Equipedia/assets/img/'.$viewEquipement[0]['nom'].'.jpg"></p>'; ?>
          </div>
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li>Prix :<?php echo $viewEquipement[0]['prix']; ?> €</li>
            <li>Description : <?php echo $viewEquipement[0]['description'];?></li>
          </ul>
          </div>
            <?php echo '<a class="yes" href="/IMIE/Equipedia/admin/index.php?c=admins&a=deleteEquipement&id_equip='.$viewEquipement[0]["id_equip"].'">';?>Oui ?</a><br/>
            <a class="no" href="/IMIE/Equipedia/admin/index.php?c=admins&a=equipement">Non ?</a><br/>
        </div>
      </div>
    </div>
  </div>

<?php   
 require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>