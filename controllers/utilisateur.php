<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/models/utilisateur.php");

class Controller_Utilisateur {
  public function addUtilisateur()
  {
    if(!empty($_POST))
      {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $email = htmlspecialchars($_POST['email']);
        $numtel = htmlspecialchars($_POST['numtel']);
        $adresse = htmlspecialchars($_POST['adresse']);

        $utilisateur = new Model_Utilisateur();
        $utilisateurDetails = $utilisateur->addUtilisateur($nom, $prenom, $pseudo, $mdp, $email, $numtel, $adresse);
      } else {
        require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/views/utilisateur/add.php");
      }
  }
  public function connectUtilisateur()
  {
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
    {
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $mdp = htmlspecialchars($_POST['mdp']);

      $utilisateur = new Model_Utilisateur();
      $connect = $utilisateur->connectUtilisateur($pseudo, $mdp);
      if (!empty($connect)){
        $_SESSION['pseudo'] = $connect[0]['pseudo'];
        header("Location: /IMIE/Boutique/");
        die();
      }
    }
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/views/utilisateur/connect.php");
  }
  public function disconnectUtilisateur()
  {
    session_destroy();
    header("Location: /IMIE/Boutique/");
  }
  public function panierUtilisateur()
  {
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Boutique/views/utilisateur/panier.php");
  }
}

?>
