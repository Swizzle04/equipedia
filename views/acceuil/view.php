<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/accueil.css">
    <title>
    Accueil
    </title>
 <?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>
    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-12 col-md-12">

          <div class="banner">
            <div class="banner__transform">
              <img src="assets/img/elusive-and-free-wild-horses1.jpg" alt="horse" width="100%">
            </div>
          </div>
        </main>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <main class="main col-xs-12 col-sm-6 col-md-8">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <section class="story">
                <img style="z-index:1" src="assets/img/horse-logo-5.jpg" alt="Horse" height="65">
                <h1 class="story__title">Bienvenue</h1>
                <p class="story__description">
                  Vous êtes sur le site du Haras du Pin, içi vous pourrez acheter toute nos proposition
                  de chevaux que nous avons en vente au Haras. Pour pouvoir acheter un de nos chevaux,
                  il vous faut vous inscrire sur notre site et être connecté. Après votre commande passé
                  nous reviendrons vers vous pour réaliser le transfert. Nous précisons que nous sommes
                  situé dans le calvados, et que si vous voulez acheter un de nos équidés il vous faudra
                  vous déplacer.
                  Içi vous pourrez aussi avoir des informations sur les races que nous mettons en vente.
                </p>
              </section>
            </div>
          </div>

          <div class="list">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2 class="horse__title">Nos Races possibles :</h2>
                <div class="row horses">
                  <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/Arabe.jpg" alt="horse">
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/Quarter Horse.jpg" alt="horse">
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/Percheron.jpg" alt="horse">
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/Pur Sang.jpg" alt="horse">
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/Mustang2.jpg" alt="horse">
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/Frison.jpg" alt="horse">
                  </div>
                </div>
                    
                    
                    
                    
                    
            </div>
          </div>
        </main>

        <aside class="aside row">
          <div class="col-xs-12 col-sm-6 col-md-4">
             <div class="col-xs-12">
              <div class="aside__content aside__content--form">
                <form class="form" action="mailto:elenaledouxf@gmail.com" method="post">
                  <h2 class="form__title">Nous contacter</h2>
                  <label class="form__label" for="firstname">Prénom</label>
                  <input class="form__input footer__input--text" id="firstname" name="firstname" type="text">
                  <label class="form__label" for="name">Nom</label>
                  <input class="form__input footer__input--text" id="name" name="name" type="text">
                  <label class="form__label" for="message">Message</label>
                  <textarea class="form__input footer__input--textarea" id="message" name="message" rows="5"></textarea>
                  <button class="form__button">Envoyer</button>
                </form>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="aside__content">
                <img src="assets/img/horse-logo-5.jpg" alt="horse" height="65">
                <h2 class="aside__title">Suivez nous!</h2>
                <img src="assets\img\logo-twitter.png" alt="twitter" width="20%">
                <img src="assets\img\facebook logo vector.png" alt="facebook" width="20%">
              </div>
            </div>
        </aside>
      </div>
    </div>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>
