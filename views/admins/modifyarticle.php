<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/accueil.css">
    <title>
    Modifier un article
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/admins/header.php");
?>

        <aside class="aside row">
          <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="col-xs-12">
              <div class="aside__content aside__content--form">
                  <h2 class="form__title">Modifier un article</h2>
                        <form class="form" action="" method="post">
                  <label class="form__label" for="firstname">Prenom de l\'équidé :</label>
                  <input class="form__input footer__input--text" id="prenom" name="prenom" type="text" value="<?php echo $viewArticle[0]['prenom'];?>">
                  <label class="form__label" for="name">Description :</label>
                  <input class="form__input footer__input--text" id="description" name="description" type="text" value="<?php echo $viewArticle[0]['description'];?>">
                  <label class="form__label" for="price">Prix :</label>
                  <input class="form__input footer__input--price" id="prix" name="prix" type="number" value="<?php echo $viewArticle[0]['prix']?>">
                  <label class="form__label" for="age">Age :</label>
                  <input class="form__input footer__input--age" id="age" name="age" type="number" min="0" max="30" value="<?php echo $viewArticle[0]['age'];?>">
                  <label class="form__label" for="robe">Robe :</label>
                  <input class="form__input footer__input--text" id="robe" name="robe" type="text" value="<?php echo $viewArticle[0]['robe'];?>">
                  <label class="form__label" for="info_race">Information sur la Race :</label>
                  <textarea class="form__input footer__input--textarea" id="info_race" name="info_race" rows="5" ><?php echo $viewArticle[0]['info_race'];?></textarea>
                  <label class="form__label" for="paper">Papier (1=OUI/0=NON) :</label>
                  <input class="form__input footer__input--paper" id="papier" name="papier" type="number" min="0" max="1" value="<?php echo $viewArticle[0]['papier'];?>">
                  <label class="form__label" for="id_mere">Identifiant de la mère :</label>
                  <input class="form__input footer__input--id" id="id_mere" name="id_mere" type="number" value="<?php echo $viewArticle[0]['id_mere'];?>">
                  <label class="form__label" for="name_mere">Prenom de la mère :</label>
                  <input class="form__input footer__input--text" id="prenom_mere" name="prenom_mere" type="text" value="<?php echo $viewArticle[0]['prenom_mere'];?>">
                  <label class="form__label" for="race_mere">Race de la mère</label>
                  <input class="form__input footer__input--text" id="race" name="race" type="text" value="<?php echo $viewArticle[0]['race'];?>">
                  <label class="form__label" for="id_pere">Identifiant du père :</label>
                  <input class="form__input footer__input--text" id="id_pere" name="id_pere" type="text" value="<?php echo $viewArticle[0]['id_pere'];?>">
                  <label class="form__label" for="name_pere">Prenom du père :</label>
                  <input class="form__input footer__input--text" id="prenom_pere" name="prenom_pere" type="text" value="<?php echo $viewArticle[0]['prenom_pere'];?>">
                  <label class="form__label" for="race_pere">Race du père :</label>
                  <input class="form__input footer__input--text" id="race_pere" name="race_pere" type="text" value="<?php echo $viewArticle[0]['race_pere'];?>">
                  <button class="form__button">Envoyer</button>
                </form>
              </div>
            </div>
          </div>