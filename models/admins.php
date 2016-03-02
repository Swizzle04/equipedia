<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/library/db.php");
class Model_Admins {
	private $db;

	public function __construct()
	{
		$this->db = DB::getInstance();
	}
	public function connectAdmins($pseudo, $mdp)
	{
		$query = 'SELECT * FROM admins WHERE pseudo="'.$pseudo.'" AND mdp="'.$mdp.'"';
		$result = $this->db->get($query);
		return $result;
	}
}

?>