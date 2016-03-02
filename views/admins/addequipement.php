<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/accueil.css">
    <title>
    Ajouter un article
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>

        <aside class="aside row">
          <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="col-xs-12">
              <div class="aside__content aside__content--form">
                <form class="form" action="" method="post">
                  <h2 class="form__title">Ajouter un article</h2>
                  <label class="form__label" for="name">Nom de l'article :</label>
                  <input class="form__input footer__input--text" id="name" name="name" type="text">
                  <label class="form__label" for="price">Prix de l'article :</label>
                  <input class="form__input footer__inputt--price" id="price" name="price" type="number">
                  <label class="form__label" for="description">Description de l'article :</label>
                  <input class="form__input footer__input--text" id="description" name="description" type="text">
                  <button class="form__button">Envoyer</button>
                </form>
              </div>
            </div>
          </div>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>