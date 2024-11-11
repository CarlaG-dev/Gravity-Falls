<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gravity Falls</title>

    <!-- ICONS FONTAWESOME -->
    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Merriweather:wght@300&display=swap" rel="stylesheet" />

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="/Styles/style.css" />
    <link rel="stylesheet" href="/Styles/header.css" />
    <link rel="stylesheet" href="/Styles/footer.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <!-- Header -->
    <header>
        <?php include 'nav.php'; ?>
    </header>

    <!-- Sección Encabezado -->
    <section class="encabezado-contenedor">
    <div class="encabezado-tags">
        <button class="ver-ahora" onclick="location.href='capitulos.html'">Comienza tu aventura</button>
        <h1>¡Te damos la Bievenida a la Cabaña del Misterio, <?php echo isset($_SESSION['nombreU']) ? $_SESSION['nombreU'] : 'explorador/a'; ?>!</h1>
        <h3>Explora un mundo lleno de misterios, personajes memorables y tramas envolventes</h3>
    </div>
</section>


    <!-- Descripción -->
    <section class="descripcion">
        <img src="/Imagenes/diario.webp" alt="Imagen del diario">
        <div>
            <h2>Descubre un Mundo Más Allá de la Imaginacción</h2>
            <p>En la Cabaña del Misterio, te invitamos a sumergirte en un universo donde las historias cobran vida, los personajes te acompañan en cada paso, y las aventuras están a la vuelta de cada esquina. Ya sea que estés buscando una trama apasionante o quieres conocer a héroes o villanos inolvidables, aquí encontrarás todo lo que necesitas para vivir experiencias únicas.</p>
        </div>
    </section>

    <!-- Por qué elegirnos -->
    <section class="por-que-elegirnos" id="por-que-elegirnos">
        <div class="contenido">
            <h2>¿Por qué elegirnos?</h2>
            <div class="cuadricula">
                <div class="cuadro">
                    <h3>Interactividad</h3>
                    <p>Nuestra plataforma permite una interacción dinámica, donde cada decisión que tomas influye en la historia.</p>
                </div>
                <div class="cuadro">
                    <h3>Calidad Gráfica</h3>
                    <p>Disfruta de imágenes y gráficos de alta resolución que te sumergirán aún más en la experiencia.</p>
                </div>
                <div class="cuadro">
                    <h3>Actualizaciones Constantes</h3>
                    <p>Recibe nuevos capítulos, personajes y eventos especiales periódicamente.</p>
                </div>
                <div class="cuadro">
                    <h3>Soporte Continuo</h3>
                    <p>Recibe asistencia y atención al cliente para resolver cualquier duda o problema de manera eficiente.</p>
                </div>
            </div>
        </div>
        <img src="/Imagenes/gnomo (2).png" alt="Imagen del diario">
    </section>

    <!-- Bienvenida -->
    <section class="bienvenida" id="bienvenida">
        <div class="des">
            <div class="texto">
                <p>Gravity Falls es un pequeño pueblo lleno de secretos. Acompaña a Dipper y Mabel Pines mientras desentrañan los misterios ocultos detrás de cada esquina. Esta página está diseñada para todos los fans, desde los más nuevos hasta los más veteranos. ¡Explora, descubre y adéntrate en la aventura!</p>
                <button>¡Bienvenidos!</button>
            </div>
            <img src="/Imagenes/personaje2.webp" alt="Imagen del diario">
        </div>
    </section>

    <!-- Contacto -->
    <section class="contacto">  
        <div class="contacto-contenido">
            <h2>Contáctanos</h2>
            <form action="contacto.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Correo" required>
                
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" placeholder="Mensaje" rows="4" required></textarea>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
    <?php include('footer.php'); ?>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
