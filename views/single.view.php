<?php require 'header.php';?>


    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['titulo_articulo'] ?></h2>
                <p class="fecha"><?php echo fecha($post['fecha_articulo']) ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb'] ?>" alt="<?php echo $post['titulo_articulo'] ?>">
                </div>
                <p class="extracto"><?php echo $post['texto_articulo'] ?></p>
            </article>
        </div>

    </div>

    <?php require 'footer.php'; ?>