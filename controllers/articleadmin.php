<?php 
require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/models/article.php");
class Controller_Article {
	//Fonction permettant de lister les articles
	public function listArticle() {
		$articles = new Model_Article();
		$listArticles = $articles->listArticles();
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/article.php");
	}

	public function viewArticle($id)
	{
		$articles = new Model_Article();
		$articleDetails = $articles->loadArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/viewart.php");
	}

	public function addArticle()
	{
		require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/addarticle.php");
	 if(!empty($_POST))
     {
        $prenom = htmlspecialchars($_POST['prenom']);
        $description = htmlspecialchars($_POST['description']);
        $prix = htmlspecialchars($_POST['prix']);
        $age = htmlspecialchars($_POST['age']);
        $robe = htmlspecialchars($_POST['robe']);
        $info_race = htmlspecialchars($_POST['info_race']);
        $papier = htmlspecialchars($_POST['papier']);
        $id_mere = htmlspecialchars($_POST['id_mere']);
        $prenom_mere = htmlspecialchars($_POST['prenom_mere']);
        $race = htmlspecialchars($_POST['race']);
        $id_pere = htmlspecialchars($_POST['id_pere']);
        $prenom_pere = htmlspecialchars($_POST['prenom_pere']);
        $race_pere = htmlspecialchars($_POST['race_pere']);
	$articles = new Model_Article();
	$addArticle = $articles->addArticle($prenom, $description, $prix, $age, $robe, $info_race, $papier, $id_mere, $prenom_mere, $race, $id_pere, $prenom_pere, $race_pere);
	}
}

	public function modifyArticle($id_art)
	{
		$articles = new Model_Article();
		$viewArticle = $articles->viewArticle($id_art);
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/modifyarticle.php");
		require_once($_SERVER['DOCUMENT_ROOT']."/IMIE/Equipedia/views/include/footer.php");
		
		if(!empty($_POST))
     {
        $prenom = htmlspecialchars($_POST['prenom']);
        $description = htmlspecialchars($_POST['description']);
        $prix = htmlspecialchars($_POST['prix']);
        $age = htmlspecialchars($_POST['age']);
        $robe = htmlspecialchars($_POST['robe']);
        $info_race = htmlspecialchars($_POST['info_race']);
        $papier = htmlspecialchars($_POST['papier']);
        $id_mere = htmlspecialchars($_POST['id_mere']);
        $prenom_mere = htmlspecialchars($_POST['prenom_mere']);
        $race = htmlspecialchars($_POST['race']);
        $id_pere = htmlspecialchars($_POST['id_pere']);
        $prenom_pere = htmlspecialchars($_POST['prenom_pere']);
        $race_pere = htmlspecialchars($_POST['race_pere']);
	$articles = new Model_Article();
	$modifyArticle = $articles->modifyArticle($id_art, $prenom, $description, $prix, $age, $robe, $info_race, $papier, $id_mere, $prenom_mere, $race, $id_pere, $prenom_pere, $race_pere);
	   }
  }

  public function deleteArticle($id_art)
  {
    $articles = new Model_Article();
    $deleteArticle = $articles->deleteArticle($id_art);
    if(!empty($deleteArticle)){
        header('Location: /IMIE/Equipedia/admin/index.php?c=admins&a=article');
    } else {
        var_dump($deleteArticle);
    }
  }

 public function confirmDelete($id_art)
  {
    $articles = new Model_Article();
    $viewArticle = $articles->viewArticle($id_art);
    if(!empty($viewArticle))
    {
    require_once($_SERVER['DOCUMENT_ROOT']."IMIE/Equipedia/views/admins/delete.php");
    }
   }
}
?>
