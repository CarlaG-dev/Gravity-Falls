<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitulos</title>
    <link rel="stylesheet" href="/Styles/capitulo.css" />
    <link rel="stylesheet" href="/Styles/header.css" />
    <link rel="stylesheet" href="/Styles/footer.css" />
    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>
</head>
<body>

<style>
    
  .capitulo-imagen {
    cursor: pointer;
}
</style>

<header>
    <?php include 'nav.php'; ?>
</header>

<section class="fr">
    <h2>Sumergete en la trama que cambia todo</h2>
    <h3>Descubre un relato épico donde cada decisión cuenta y cada personaje tiene un papel que desempeñar</h3>
    <div class="carta-contenedor">
        <img src="/Imagenes/capitulos/carta.webp" alt="La cabaña de Misterios" class="carta-imagen">
        <img src="/Imagenes/capitulos/sus.webp" alt="Sello" class="sello-imagen">
        <p class="carta-texto">En la Cabaña de Misterios, se habrán desatado los eventos más inusuales que cambiarán la vida de los personajes. Misterios, secretos y grandes descubrimientos están por revelarse.</p>
    </div>
</section>

<section class="contenido-principal">
    <h2 class="seccion-titulo">Capítulos Clave de la Historia</h2>

    <!-- Capítulo 1 -->
    <div class="capitulo" onclick="window.location.href='https://www.tokyvideo.com/es/video/gravity-falls-t1-cap-1-latino-juliancf'">
        <img src="/Imagenes/capitulos/turista atrapado.webp" alt="Turista atrapado" class="capitulo-imagen">
        <div class="capitulo-texto">
            <h3>Turista atrapado</h3>
            <p>Dipper y Mabel se enfrentan cara a cara con extraños secretos del pueblo.</p>
        </div>
    </div>

    <!-- Capítulo 2 -->
    <div class="capitulo" onclick="window.location.href='https://www.tokyvideo.com/es/video/gravity-falls-t1-cap-20-latino-juliancf-2'">
        <img src="/Imagenes/capitulos/monstruo.webp" alt="La leyenda del monstruo del lago" class="capitulo-imagen">
        <div class="capitulo-texto">
            <h3>La leyenda del monstruo del lago</h3>
            <p>Dipper y Mabel escuchan rumores acerca de las profundidades del lago y salen en busca de un monstruo marino.</p>
        </div>
    </div>

    <!-- Capítulo 3 -->
    <div class="capitulo" onclick="window.location.href='https://www.tokyvideo.com/es/video/gravity-falls-t1-cap-3-latino-juliancf'">
        <img src="/Imagenes/capitulos/cazadores.webp" alt="Los cazadores de cabezas" class="capitulo-imagen">
        <div class="capitulo-texto">
            <h3>Los cazadores de cabezas</h3>
            <p>Cuando la estatua de Mabel cobra vida, el misterio de los cazadores de cabezas se revela.</p>
        </div>
    </div>
    
    <button>Ver más</button>
</section>

<footer class="footer">
    <?php include('footer.php'); ?>
</footer>

</body>
</html> 