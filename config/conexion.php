<?php
class Conexion{
    public static function connect(){
        try {
            //abrimos la conexión
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8mb4");
            $bd = new PDO("mysql:host=localhost;dbname=club_lectores","raul","rm2223",$opciones); // root , rm2223
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $p) {
            echo "Error ".$p->getMessage()."<br />";
            exit;
        }
        return $bd;
    }
}
