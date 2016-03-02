<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/utilisateur.php");

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
        header('Location: /IMIE/Equipedia/');
      } else {
        require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/utilisateur/add.php");
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
        $_SESSION['id'] = $connect[0]['id'];
        $_SESSION['nom'] = $connect[0]['nom'];
        $_SESSION['prenom'] = $connect[0]['prenom'];
        $_SESSION['pseudo'] = $connect[0]['pseudo'];
        $_SESSION['mdp'] = $connect[0]['mdp'];
        $_SESSION['email'] = $connect[0]['email'];
        $_SESSION['numtel'] = $connect[0]['numtel'];
        $_SESSION['adresse'] = $connect[0]['adresse'];
        header("Location: /IMIE/Equipedia/");
        die();
      }
    }
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/utilisateur/connect.php");
  }
  public function disconnectUtilisateur()
  {
    session_destroy();
    header("Location: /IMIE/Equipedia");
  }
  public function panierUtilisateur()
  {
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/utilisateur/panier.php");
  }

  public function listUtilisateurs() {
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/utilisateur/profil.php");
  }

  public function viewUtilisateurs($id)
  {
    $utilisateurs = new Model_Utilisateur();
    $utilisateurDetails = $utilisateurs->loadUtilisateur($id);
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/utilisateur/view.php");
  }
    public function modifyUtilisateur($id)
  {
    $utilisateurs = new Model_Utilisateur();
    $viewUtilisateurs = $utilisateurs->viewUtilisateurs($id);
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/utilisateur/modify.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
    
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
  $modifyUtilisateur = $utilisateur->modifyUtilisateur($id, $nom, $prenom, $pseudo, $mdp, $email, $numtel, $adresse);
  }
}
}

?>
