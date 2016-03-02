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
                <form class="form" method="post">
                  <h2 class="form__title">Ajouter un article</h2>
                  <label class="form__label" for="firstname">Prenom de l'équidé :</label>
                  <input class="form__input footer__input--text" id="firstname" name="prenom" type="text">
                  <label class="form__label" for="name">Description :</label>
                  <input class="form__input footer__input--text" id="name" name="description" type="text">
                  <label class="form__label" for="price">Prix :</label>
                  <input class="form__input footer__input--price" id="price" name="prix" type="number">
                  <label class="form__label" for="age">Age :</label>
                  <input class="form__input footer__input--age" id="age" name="age" type="number" min="0" max="30">
                  <label class="form__label" for="robe">Robe :</label>
                  <input class="form__input footer__input--text" id="robe" name="robe" type="text">
                  <label class="form__label" for="info_race">Information sur la Race :</label>
                  <textarea class="form__input footer__input--textarea" id="info_race" name="info_race" rows="5" placeholder="Ajouter les informations içi..."></textarea>
                  <label class="form__label" for="paper">Papier (1=OUI/0=NON) :</label>
                  <input class="form__input footer__input--paper" id="paper" name="papier" type="number" min="0" max="1">
                  <label class="form__label" for="id_mere">Identifiant de la mère :</label>
                  <input class="form__input footer__input--id" id="id_mere" name="id_mere" type="number">
                  <label class="form__label" for="name_mere">Prenom de la mère :</label>
                  <input class="form__input footer__input--text" id="name_mere" name="prenom_mere" type="text">
                  <label class="form__label" for="race_mere">Race de la mère</label>
                  <input class="form__input footer__input--text" id="race_mere" name="race" type="text">
                  <label class="form__label" for="id_pere">Identifiant du père :</label>
                  <input class="form__input footer__input--text" id="id_pere" name="id_pere" type="text">
                  <label class="form__label" for="name_pere">Prenom du père :</label>
                  <input class="form__input footer__input--text" id="name_pere" name="prenom_pere" type="text">
                  <label class="form__label" for="race_pere">Race du père :</label>
                  <input class="form__input footer__input--text" id="race_pere" name="race_pere" type="text">
                  <button class="form__button">Envoyer</button>
                </form>
              </div>
            </div>
          </div>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>
