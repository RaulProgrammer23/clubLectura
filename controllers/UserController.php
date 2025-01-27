<?php 
require_once "models/user.php";

class UserController{
    public function login() {
        require_once "views/user/login.php";

        if(isset($_POST['login'])){
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = new User();
                $user->setUsername($username);
                $user->setPassword($password);
                $datos = $user->login();
                if($datos && is_object($datos)){
                    $_SESSION['logged'] = $datos;
                    if($datos->username == "admin"){
                        $_SESSION['admin'] = $datos;
                    }
                    header("Location: ".base_url. "book/index");
                }else{
                    $_SESSION['msg'] = "Fallo en la identificación!";
                    header("Location: ".base_url. "user/login");
                    
                }
            }
        }
    }

    public function registrar() {
        require_once "views/user/signup.php";
        if(isset($_POST['registrar'])){
            if( isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])){
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = new User();
                $user->setName($name);
                $user->setUsername($username);
                $user->setPassword($password);
                $registrado = $user->signUp();
                if($registrado){
                    $_SESSION['msg'] = "Registro completado correctamente!";
                    
                }else{
                    $_SESSION['msg'] = "Registro incompletado!";
                }
            }
            header("Location: ".base_url. "user/registrar");

        }

    }

    public function logout() {
        if(isset($_SESSION['logged'])) {
            Utils::borrarSesion('logged');
        }
        if(isset($_SESSION['admin'])) {
            Utils::borrarSesion('admin');
        }
        header("Location: ".base_url);
    }
}


?>