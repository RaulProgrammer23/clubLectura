<?php 

class Book{
    private $id;
    private $title;
    private $cat_id;
    private $author;
    private $active;
    private $db;

    public function __construct(){
        $this->db = Conexion::connect();
    }

    public function getLibrosActivos() {
        $sql = "SELECT b.id, b.title, b.author, c.name  FROM books b INNER JOIN categories c on b.category_id = c.id WHERE b.active = 1;";
        $stmt = $this->db->query($sql,PDO::FETCH_OBJ);
        $books = $stmt->fetchAll(); 
        //var_dump($books);die();
        return $books;
    }
    
    public function getAllLibros() {
        $sql = "SELECT * FROM books";
        $stmt = $this->db->query($sql);
        $books = $stmt->fetchAll(PDO::FETCH_OBJ); 
        //var_dump($books);die();
        return $books;
    }

    public function addLibro(){
        $sql = "INSERT INTO books(title,category_id,author) VALUES (?,?,?)";
        $stmt = $this->db->prepare($sql);
        try{
            $stmt->bindParam(1,$this->title);
            $stmt->bindParam(2,$this->cat_id);
            $stmt->bindParam(3,$this->author);
            $result = $stmt->execute();
            return $result;
        }catch (PDOException $ex) {
            echo "ERROR al INSERTAR NUEVO LIBRO: " . $ex->getMessage();
        }
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of cat_id
     */ 
    public function getCat_id()
    {
        return $this->cat_id;
    }

    /**
     * Set the value of cat_id
     *
     * @return  self
     */ 
    public function setCat_id($cat_id)
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of active
     */ 
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @return  self
     */ 
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}

?>