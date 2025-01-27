<?php 
class User{
    private $id;
    private $name;
    private $username;
    private $password;
    private $db;

    public function __construct(){
        $this->db = Conexion::connect();
    }

    public function login(){
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->db->prepare($sql);
        $result = false;
        try{
            $stmt->bindParam(1,$this->username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_OBJ); 
            if($user) {
                if(password_verify($this->password , $user->password)) {
                    $result = $user;
                }
            }
            //var_dump($result);die();
            return $result;
        }catch (PDOException $ex) {
            echo "ERROR al logear: " . $ex->getMessage();
        }
    }

    public function signUp() {
        $sql = "INSERT INTO users(name,username,password) VALUES (?,?,?)";
        $pass = $this->getPassword();
        $stmt = $this->db->prepare($sql);
        $result = false;
        try{
            $stmt->bindParam(1,$this->name);
            $stmt->bindParam(2,$this->username);
            $stmt->bindParam(3,$pass);
            $result = $stmt->execute();
            var_dump($result);
            return $result;
        }catch (PDOException $ex) {
            echo "ERROR al logear: " . $ex->getMessage();
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
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return password_hash($this->password, PASSWORD_BCRYPT);
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}

?>