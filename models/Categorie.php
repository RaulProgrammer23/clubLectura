<?php 

class Categorie{
    private $id;
    private $name;
    private $description;
    private $db;

    public function __construct(){
        $this->db = Conexion::connect();
    }

    public function getAllCategories(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->query($sql,PDO::FETCH_OBJ);
        return $stmt->fetchAll();
    }
    public function addCategory() {
        $sql = "INSERT INTO categories(name,description) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        try{
            $stmt->bindParam(1,$this->name);
            $stmt->bindParam(2,$this->description);
            $result = $stmt->execute();
            return $result;
        }catch (PDOException $ex) {
            echo "ERROR al INSERTAR NUEVA Categoria: " . $ex->getMessage();
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
?>