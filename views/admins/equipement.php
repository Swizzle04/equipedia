<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/list.css">
    <title>
    Liste des équipement
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="/IMIE/Equipedia/assets/img/wampmanager.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>
	<h1>Liste des équipement en vente :</h1>
		<?php 
		foreach($listEquipements as $equipement) {
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="list">
           <div class="nom"><h1><?php echo $equipement['nom']; ?></h1></div>
           <div class="col-xs-12 col-sm-12 col-md-6">
						<?php echo '<p><img src="/IMIE/Equipedia/assets/img/'.$equipement['nom'].'.jpg"></p>'; ?>
					</div>
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li>Prix :<?php echo $equipement['prix']; ?> €</li>
            <li>Description :<?php echo $equipement['description'];?></li>
          </ul>
          </div>
            <a class="ajout" href="/IMIE/Equipedia/admin/index.php?c=equipementadmin&a=add">
            Ajouter un article </a><br/>
            <?php echo '<a class="modify" href="/IMIE/Equipedia/admin/index.php?c=equipementadmin&a=modify&id_equip='.$equipement["id_equip"].'">';?>Modifier l'équipement</a><br/>
				    <?php echo '<a class="sup" href="/IMIE/Equipedia/admin/index.php?c=admins&a=confirmEquipement&id_equip='.$equipement["id_equip"].'">';?>Suprimer cette equipement</a><br/>
        </div>
			</div>
		</div>
  </div>
		<?php
		}
		?>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>