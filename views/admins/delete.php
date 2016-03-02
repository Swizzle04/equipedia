<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/list.css">
    <title>
    Supression chevaux
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
		<h1>Voulez vous vraiment supprimer cette article ?</h1>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="list">
           <div class="prenom"><h1><?php echo $viewArticle[0]['prenom']; ?></h1></div>
           <div class="col-xs-12 col-sm-12 col-md-6">
            <?php echo '<p><img src="/IMIE/Equipedia/assets/img/'.$viewArticle[0]['prenom'].'.jpg"></p>'; ?>
          </div>
          <div class"col-xs-12 col-sm-12 col-md-6">
          <ul>
            <li><?php echo $viewArticle[0]['description']; ?></li>
            <li>Prix : <?php echo $viewArticle[0]['prix'];?> €</li>
            <li>Age : <?php echo $viewArticle[0]['age'];?></li>
            <li>Robe : <?php echo $viewArticle[0]['robe'];?></li>
            <li>Information sur la race : <?php echo $viewArticle[0]['info_race'];?></li>
            <li>Papier : <?php echo $viewArticle[0]['papier'];?></li>
            <li>Mère : <?php echo $viewArticle[0]['prenom_mere'];?></li>
            <li>Race de la mère : <?php echo $viewArticle[0]['race'];?></li>
            <li>Père : <?php echo $viewArticle[0]['prenom_pere'];?></li>
            <li>Race du père : <?php echo $viewArticle[0]['race_pere'];?></li>
          </ul>
          </div>
            <?php echo '<a class="yes" href="/IMIE/Equipedia/admin/index.php?c=admins&a=delete&id_art='.$viewArticle[0]["id_art"].'">';?>Oui ?</a><br/>
            <a class="no" href="/IMIE/Equipedia/admin/index.php?c=admins&a=article">Non ?</a><br/>
        </div>
      </div>
    </div>
  </div>

<?php   
 require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>