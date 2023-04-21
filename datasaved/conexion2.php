<?php

Class Conexion{

public static function Conectar(){
    

define ('servidor', 'localhost');
define ('nombre_bd', 'codecastle_datosformulario');
define ('usuario', 'root');
define ('password', 'root');

$opciones = array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try{

    $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
    return $conexion;
   }
   catch (Exception $e){
    die("El error de conexión es: ". $e->getMessage());
   }
    


}

}

?>