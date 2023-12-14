<?php require 'header.php';?>


    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Titulo del articulo</h2>
                <p class="fecha">miércoles, 14 de diciembre del 2023</p>
                <div class="thumb">
                    <a href="#"><img src="<?php echo RUTA; ?>/img/1.png"></a>
                </div>
                <p class="extracto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, distinctio.</p>
                <a href="#" class="continuar">Continuar Leyendo...</a>
            </article>
        </div>
        <div class="post">
            <article>
                <h2 class="titulo">Titulo del articulo</h2>
                <p class="fecha">miércoles, 14 de diciembre del 2023</p>
                <div class="thumb">
                    <a href="#"><img src="<?php echo RUTA; ?>/img/2.png"></a>
                </div>
                <p class="extracto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, distinctio.</p>
                <a href="#" class="continuar">Continuar Leyendo...</a>
            </article>
        </div>

        <?php require 'paginacion.php'; ?>

    </div>

    <?php require 'footer.php'; ?>