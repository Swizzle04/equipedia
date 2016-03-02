<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/accueil.css">
    <title>
    Modifier mon profil
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>

        <aside class="aside row">
          <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="col-xs-12">
              <div class="aside__content aside__content--form">
                  <h2 class="form__title">Modifier mon profil</h2>
                  <form class="form" action="" method="post">
                  <label class="form__label" for="firstname">Nom :</label>
                  <input class="form__input footer__input--text" id="nom" name="nom" type="text" value="<?php echo $viewUtilisateurs[0]['nom'];?>">
                  <label class="form__label" for="secondname">Prenom :</label>
                  <input class="form__input footer__input--price" id="prenom" name="prenom" type="text" value="<?php echo $viewUtilisateurs[0]['prenom'];?>">
                  <label class="form__label" for="pseudo">Pseudo :</label>
                  <input class="form__input footer__input--text" id="pseudo" name="pseudo" type="text" value="<?php echo $viewUtilisateurs[0]['pseudo'];?>">
                   <label class="form__label" for="mdp">mdp :</label>
                  <input class="form__input footer__input--text" id="mdp" name="mdp" type="password" value="<?php echo $viewUtilisateurs[0]['mdp'];?>">
                  <label class="form__label" for="email">E-mail :</label>
                  <input class="form__input footer__input--text" id="email" name="email" type="text" value="<?php echo $viewUtilisateurs[0]['email'];?>">
                  <label class="form__label" for="numtel">Numéro de Téléphone :</label>
                  <input class="form__input footer__input--text" id="numtel" name="numtel" type="text" value="<?php echo $viewUtilisateurs[0]['numtel'];?>">
                  <label class="form__label" for="adresse">Adresse :</label>
                  <input class="form__input footer__input--text" id="adresse" name="adresse" type="text" value="<?php echo $viewUtilisateurs[0]['adresse'];?>">
                  <button class="form__button">Envoyer</button>
                </form>
              </div>
            </div>
          </div>