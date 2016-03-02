<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/equipement.php");
class Controller_Equipement {
	//Fonction permettant de lister les articles
	public function listEquipement() {
		$equipements = new Model_Equipement();
		$listEquipements = $equipements->listEquipements();
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/equipement.php");
	}

	public function viewEquipement($id)
	{
		$equipements = new Model_Equipement();
		$equipementDetails = $equipements->loadEquipement($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/view_equip.php");
	}
	public function addEquipement()
	{
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/addequipement.php");
		var_dump($_POST);
	 if(!empty($_POST))
     {
        $name = htmlspecialchars($_POST['name']);
        $price = htmlspecialchars($_POST['price']);
        $description = htmlspecialchars($_POST['description']);
	$equipement = new Model_Equipement();
	$addEquipement = $equipement->addEquipement($name, $price, $description);
	}
}
	public function modifyEquipement($id_equip)
	{
		$equipement = new Model_Equipement();
		$viewEquipement = $equipement->viewEquipement($id_equip);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/modifyequipement.php");
		require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
		
		if(!empty($_POST))
     {
        $nom = htmlspecialchars($_POST['nom']);
        $prix = htmlspecialchars($_POST['prix']);
        $description = htmlspecialchars($_POST['description']);
	$equipement = new Model_Equipement();
	$modifyEquipement = $equipement->modifyEquipement($id_equip, $nom, $prix, $description);
	}
}
  public function deleteEquipement($id_equip)
  {
    $equipements = new Model_Equipement();
    $deleteEquipement = $equipements->deleteEquipement($id_equip);
    if(!empty($deleteEquipement)){
        header('Location: /IMIE/Equipedia/admin/index.php?c=admins&a=equipement');
    } else {
        var_dump($deleteEquipement);
    }
  }

 public function confirmDeleteequip($id_equip)
  {
    $equipements = new Model_Equipement();
    $viewEquipement = $equipements->viewEquipement($id_equip);
    if(!empty($viewEquipement))
    {
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/deleteequipement.php");
    }
   }
}

?>