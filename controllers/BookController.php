<?php 
require_once "models/book.php";
require_once "models/Categorie.php";

class BookController{
    public function index(){
        if( isset($_SESSION['admin'])){
            $book = new Book();
            $books = $book->getAllLibros();
            require_once "views/admin/index.php";
        }else if( isset($_SESSION['logged']) ){
            $book = new Book();
            $books = $book->getLibrosActivos();
            require_once "views/user/index.php";
        }
    }

    public function createBook() {
        $categorie = new Categorie();
        $categorias = $categorie->getAllCategories();
        require_once "views/book/create.php";
        if( isset($_POST['create']) ){
            if( isset($_POST['title']) && isset($_POST['author']) && isset($_POST['category'])){
                $title = $_POST['title'];
                $author = $_POST['author'];
                $category = $_POST['category'];
                $book = new Book();
                $book->setTitle($title);
                $book->setAuthor($author);
                $book->setCat_id($category);
                $insertado = $book->addLibro();
                if($insertado){
                    $_SESSION['msg'] = "Libro insertado correctamente!";
                    
                }else{
                    $_SESSION['msg'] = "Libro no ha sido insertado!";
                }
                header("Location: ".base_url. "book/createBook");
            }
        }
    }
}



?>