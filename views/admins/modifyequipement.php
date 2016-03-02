<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/accueil.css">
    <title>
    Modifier un equipement
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>

        <aside class="aside row">
          <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="col-xs-12">
              <div class="aside__content aside__content--form">
                  <h2 class="form__title">Modifier un equipement</h2>
                  <form class="form" action="" method="post">
                  <label class="form__label" for="firstname">Nom de l'équipement :</label>
                  <input class="form__input footer__input--text" id="prenom" name="nom" type="text" value="<?php echo $viewEquipement[0]['nom'];?>">
                  <label class="form__label" for="price">Prix :</label>
                  <input class="form__input footer__input--price" id="prix" name="prix" type="number" value="<?php echo $viewEquipement[0]['prix'];?>">
                  <label class="form__label" for="description">Description :</label>
                  <input class="form__input footer__input--text" id="description" name="description" type="text" value="<?php echo $viewEquipement[0]['description'];?>">
                  <button class="form__button">Envoyer</button>
                </form>
              </div>
            </div>
          </div>