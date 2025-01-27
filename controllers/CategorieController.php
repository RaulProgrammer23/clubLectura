<?php 
require_once "models/Categorie.php";

class CategorieController{


    public function index() {
        $categorie = new Categorie();
        $categorias = $categorie->getAllCategories();
        //var_dump($categorias);
        require_once "views/categorie/index.php";
    }
    public function createCategory() {
        require_once "views/categorie/create.php";
        if( isset($_POST['create']) ){
            if( isset($_POST['name']) && isset($_POST['dscrp'])){
                $name = $_POST['name'];
                $dscrp = $_POST['dscrp'];
                $categorie = new Categorie();
                $categorie->setName($name);
                $categorie->setDescription($dscrp);
                $insertada = $categorie->addCategory();
                if($insertada){
                    $_SESSION['msg'] = "Categoria insertada correctamente!";
                    
                }else{
                    $_SESSION['msg'] = "Categoria no ha sido insertada!";
                }
                header("Location: ".base_url. "categorie/createCategory");
            }
        }
    }
}

?>