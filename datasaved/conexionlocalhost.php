<?php

$servidor = "localhost";
$usuario = "root";
$password = "root";
$nombreBD = "codecastle_datosformulario";
$conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conexion->connect_error)
{
    die("la conexión ha fallado" . $conexion->connect_error);
}
else
{
    echo "";
}

?>