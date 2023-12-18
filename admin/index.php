<?php session_start();

#ARCHIVO INDEX DEL ADMIN

require 'config.php';
require '../functions.php';

$conexion = conexion($db_config);

comprobar_sesion();

if(!$conexion){
    header('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);


require '../views/admin_index.view.php';
?>