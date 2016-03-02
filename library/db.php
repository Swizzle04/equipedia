<?php
class DB {
		private static $_instance = null;
		public $connexionBDD = null;

		private function __construct() {
			$this->connexionBDD = new PDO("mysql:host=localhost;dbname=equipedia", "root","");
			$this->connexionBDD->exec('SET NAMES UTF8');
		}

		public static function getInstance(){
			if(is_null(self::$_instance)) {
				self::$_instance = new DB();
			}
			return self::$_instance;
		}

	public function get($query) {
		$response = self::$_instance->connexionBDD->query($query);
		$resultat = $response->fetchAll();
		return $resultat;
	}

	public function execute($query, $tab) {
		$prepare = self::$_instance->connexionBDD->prepare($query);
		$result = $prepare->execute($tab);
		return $result;
	}
}
?>