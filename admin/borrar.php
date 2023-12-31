<?php session_start();

require 'config.php';
require '../functions.php';

comprobar_sesion();

$conexion = conexion($db_config);
if(!$conexion){
    header('Location: error.php');
}

$id = limpiarDatos($_GET['id']);

if(!$id){
    hedaer('Location: ' . RUTA . 'admin');
}

$statement = $conexion->prepare('DELETE FROM tb_articulos WHERE id_articulo = :id');
$statement->execute(array(':id' => $id));

header('Location: ' . RUTA . 'admin');

?>