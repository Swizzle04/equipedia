<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/add.css">
    <title>
    Connexion
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
	<title>Formulaire d'inscription</title>
</head>
<body>
<form class="form" action="" method="post">
	 	
	<h2 class="form__title">Inscription</h2>
		<table>
	 		<tr>
                 <td> <label class="form__label" for="firstname">Nom</label></td>
                 <td> <input class="form__input footer__input--text" id="nom" name="nom" type="text"></td>
            </tr> 
            <tr>  
                 <td> <label class="form__label" for="name">Prenom</label></td>
                 <td> <input class="form__input footer__input--text" id="prenom" name="prenom" type="text"></td>
            </tr>
            <tr>  
                 <td> <label class="form__label" for="pseudo">Pseudo</label></td>
                 <td> <input class="form__input footer__input--text" id="pseudo" name="pseudo" type="text"></td>
            </tr>
            <tr>  
                 <td> <label class="form__label" for="mdp">Mot De Passe</label></td>
                 <td> <input class="form__input footer__input--text" id="mdp" name="mdp" type="password"></td>
            </tr>
            <tr>   
                 <td> <label class="form__label" for="mail">Email</label></td>
                 <td> <input class="form__input footer__input--mail" id="email" name="email" type="mail"></td>
            </tr>
            <tr>
                 <td> <label class="form__label" for="tel">Telephone</label></td>
                 <td> <input class="form__input footer__input--tel" id="numtel" name="numtel" type="phone"></td>
            </tr>
            <tr> 
                 <td> <label class="form__label" for="adress">Adresse</label></td>
                 <td> <input class="form__input footer__input--adress" id="adresse" name="adresse" type="text"></td>
            </tr>
            <tr>
                 <td> <button class="form__button">Envoyer</button></td>
            </tr>
        </table>
     </form>
    <?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
?>
</body>
</html>