<?php require 'header.php';?>


    <div class="contenedor">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['id_articulo']; ?>"><?php echo $post['titulo_articulo']; ?></a></h2>
                    <p class="fecha"><?php echo $post['fecha_articulo']; ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['id_articulo']; ?>"><img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb']; ?>"></a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto_articulo']; ?></p>
                    <a href="single.php?id=<?php echo $post['id_articulo']; ?>" class="continuar">Continuar Leyendo...</a>
                </article>
            </div>
        <?php endforeach; ?>
    
        <?php require 'paginacion.php'; ?>

    </div>

    <?php require 'footer.php'; ?>