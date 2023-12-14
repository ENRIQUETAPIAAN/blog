<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07702d4e25.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estiloss.css">
    <title>Blog | Inicio</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="#">Mi Primer Blog</a></p>
            </div>
            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar:">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#">Contacto  <i class="fa fa-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


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
                    <a href="#"><img src="<?php echo RUTA; ?>/img/1.png"></a>
                </div>
                <p class="extracto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, distinctio.</p>
                <a href="#" class="continuar">Continuar Leyendo...</a>
            </article>
        </div>
    </div>
</body>
</html>