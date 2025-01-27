<?php 
class Utils{
    public static function borrarSesion($name) {
        if(isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
    }
}
?>