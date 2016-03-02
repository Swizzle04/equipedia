<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/library/db.php");
class Model_Utilisateur {
	private $db;

	public function __construct()
	{
		$this->db = DB::getInstance();
	}
		public function viewUtilisateurs($id)
	{
		$query = 'SELECT * FROM users WHERE id = '.$id.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function listUtilisateurs()
	{
		$query = "SELECT * FROM users;";
		$resultat = $this->db->get($query);
		return $resultat;
	}
	public function addUtilisateur($nom, $prenom, $pseudo, $mdp, $email, $numtel, $adresse)
	{
		$query = "INSERT INTO users (nom, prenom, pseudo, mdp, email, numtel, adresse) VALUES (:nom, :prenom, :pseudo, :mdp, :email, :numtel, :adresse);";
		$tab = array(
		'nom' => $nom,
		'prenom' => $prenom,
		'pseudo' => $pseudo,
		'mdp' => $mdp,
		'email' => $email,
		'numtel' => $numtel,
		'adresse' => $adresse,
		);
		$this->db->execute($query, $tab);
	}
	public function connectUtilisateur($pseudo, $mdp)
	{
		$query = 'SELECT * FROM users WHERE pseudo="'.$pseudo.'" AND mdp="'.$mdp.'"';
		$result = $this->db->get($query);
		return $result;
	}
		public function modifyUtilisateur($id, $nom, $prenom, $pseudo, $mdp, $email, $numtel, $adresse)
	{
		$query = "UPDATE `users` SET `nom`=:nom,`prenom`=:prenom,`pseudo`=:pseudo,`mdp`=:mdp,`email`=:email,`numtel`=:numtel,`adresse`=:adresse WHERE id =".$id.";";
		$tab = array(
		'nom' => $nom,
		'prenom' => $prenom,
		'pseudo' => $pseudo,
		'mdp' => $mdp,
		'email' => $email,
		'numtel' => $numtel,
		'adresse' => $adresse,
		);
		$this->db->execute($query, $tab);
	}
} 


?>