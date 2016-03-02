<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/head.php");
?>
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/IMIE/Equipedia/assets/css/add.css">
    <title>
    Connexion Admin
    </title>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/header.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
	<title>Formulaire de connexion Admin</title>
</head>
<body>
<form class="form" action="" method="post">
	 	
	<h2 class="form__title">Connexion Admin</h2>
		<table>
	 		<tr>
                 <td> <label class="form__label" for="pseudo">Pseudo</label></td>
                 <td> <input class="form__input footer__input--text" id="pseudo" name="pseudo" type="text"></td>
            </tr> 
            <tr>  
                 <td> <label class="form__label" for="mdp">Mot De Passe</label></td>
                 <td> <input class="form__input footer__input--text" id="mdp" name="mdp" type="password"></td>
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