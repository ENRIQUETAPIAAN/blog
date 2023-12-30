<?php session_start();

require 'config.php';
require '../functions.php';

comprobar_sesion();

$conexion = conexion($db_config);

if(!$conexion){
    header('Location: error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $id = limpiarDatos($_POST['id']);
    $thumb_gardada = $_POST['thumb-gardada'];
    $thumb = $_FILES['thumb'];

    if(empty($humb['name'])){
        $thumb = $thumb_gardada;
    } else{
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];  
        move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $conexion->prepare('UPDATE tb_articulos SET titulo_articulo = :titulo, extracto_articulo = :extracto, texto_articulo = :texto, thumb = :thumb WHERE id_articulo = :id');
    $statement->execute(array(':titulo' => $titulo,':extracto' => $extracto, ':texto' => $texto, ':thumb' => $thumb, ':id' => $id));

    header('Location: ' . RUTA . 'admin');

} else{
    $id_articulo = id_articulo($_GET['id']);

    if(empty($id_articulo)){
        header('Location: ' . RUTA . 'admin');
    }

    $post = obtener_post_por_id($conexion, $id_articulo);

    if(!$post){
        header('Location: ' . RUTA . 'admin');
    }

    $post = $post[0];
}

require '../views/editar.view.php';
?>