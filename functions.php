<?php 

function conexion($db_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=db_blog','root','');
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

?>