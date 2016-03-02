<?php
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/admins.php");

class Controller_Admins {
  public function connectAdmins()
  {
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
    {
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $mdp = htmlspecialchars($_POST['mdp']);

      $utilisateur = new Model_Admins();
      $connect = $utilisateur->connectAdmins($pseudo, $mdp);
      if (!empty($connect)){
        $_SESSION['pseudo'] = $connect[0]['pseudo'];
        header("Location: /IMIE/Equipedia/views/admins/home.php");
        die();
      }
    }
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/connect.php");
  }
  public function disconnectAdmins()
  {
    session_destroy();
    header("Location: /IMIE/Equipedia/");
  }
}
?>