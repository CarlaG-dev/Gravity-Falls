<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca De</title>
    <link rel="stylesheet" href="/Styles/acerca.css" />
    <link rel="stylesheet" href="/Styles/header.css" />
    <link rel="stylesheet" href="/Styles/footer.css" />
    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <?php include 'nav.php'; ?>
    </header>

    <section class="reg"></section>

    <!-- Primera Sección: Carta -->
    <section class="fr">
        <div class="carta-contenedor">
            <h3 class="carta-titulo">Conoce el equipo detrás de la Cabaña del Misterio</h3>
            <div class="carta-grid">
                <p class="carta-texto">   
                    En Gravity Falls, cada personaje cobra vida gracias al trabajo apasionado y talentoso del equipo de actores de voz. 
                    Estos artistas no solo dan voz a los personajes,
                    sino que también aportan una gama de emociones y matices que enriquecen la narrativa.<br><br> 
                    En cada sección, te invitamos a conocer a los profesionales que prestan su voz, corazón y alma para hacer de cada episodio una experiencia inolvidable. </p>
                <img src="/Imagenes/acerca/bill.webp" alt="Nuevo Sello" class="sello-imagen">
            </div>
        </div>
    </section>
    

    <!-- Segunda Sección: Tarjetas sobre Kristen Schaal, Jason Ritter y Alex Hirsch -->
    <section class="contenido-principal">
        <h2 class="seccion-titulo">Conoce a los actores detrás de los personajes</h2>
        
        <div class="tarjeta tarjeta-invertida">
            <div class="tarjeta-texto">
                <h3>Kirsten Schaal</h3>
                <p>Kristen Schaal es la actriz de doblaje detrás de Mabel Pines. Conocida por su distintiva voz y su habilidad para interpretar personajes con gran energía y carisma, Kristen Schaal ha aportado un toque único al papel de Mabel. Además de su trabajo en Gravity Falls, Schaal ha ganado reconocimiento por sus papeles en series como Bob’s Burgers y The Last Man on Earth. Su habilidad para combinar humor y emotividad hace que sus interpretaciones sean memorables y queridas por los fans.</p>
            </div>
            <img src="/Imagenes/acerca/1.webp" alt="Kristen Schaal" class="tarjeta-imagen">
        </div>
    
        <div class="tarjeta">
            <img src="/Imagenes/acerca/2.webp" alt="Jason Ritter" class="tarjeta-imagen">
            <div class="tarjeta-texto">
                <h3>Jason Ritter</h3>
                <p>Es el actor de doblaje detrás de Dipper Pines. Con su habilidad para capturar la curiosidad y la determinación del joven aventurero, Ritter ha dado vida al personaje de Dipper con gran autenticidad. Su interpretación aporta una mezcla de vulnerabilidad y valentía que resuena profundamente con los espectadores. Además de su papel en Gravity Falls, Jason Ritter ha participado en una variedad de proyectos televisivos y cinematográficos, incluyendo Parenthood y The Defenders.</p>
            </div>
        </div>
    
        <div class="tarjeta tarjeta-invertida">
            <div class="tarjeta-texto">
                <h3>Alex Hirsch</h3>
                <p>El creador de Gravity Falls, también es la voz detrás de Tío Stan. Con su talento para dar vida a personajes con personalidades distintivas y su habilidad para aportar un humor característico, Hirsch ha interpretado a Tío Stan con gran destreza. Su interpretación del astuto y enigmático propietario de la Cabaña del Misterio añade una capa de carisma y complejidad al personaje. Además de su trabajo en Gravity Falls, Alex Hirsch ha sido reconocido por su trabajo en Big Mouth y otras producciones de animación, mostrando su versatilidad en la industria.</p>
            </div>
            <img src="/Imagenes/acerca/3.webp" alt="Alex Hirsch" class="tarjeta-imagen">
        </div>
    
        <button>Ver más</button>
    </section>
s    
    <!-- Tercera Sección: Tarjeta y imagen adicional -->
    <section class="tercera-seccion">
        <h2 class="seccion-titulo">Más sobre la serie</h2> <!-- Encabezado aquí -->
        <div class="tercera-contenedor">
            <img src="/Imagenes/acerca/4.webp" alt="Imagen adicional" class="imagen-adicional">
            <div class="tarjeta-rectangular">
                <p>La serie Gravity Falls fue creada por Alex Hirsch y nació a partir de su propia infancia y experiencias personales. Hirsch se inspiró en los veranos que pasaba con su hermana gemela en su niñez, lo cual se refleja en los personajes de Dipper y Mabel Pines.
                    La idea de la serie surgió cuando Hirsch estaba en la escuela de animación del California Institute of the Arts (CalArts). Le intrigaba la idea de combinar los misterios sobrenaturales y el humor, mientras mantenía una narrativa coherente y emocionante. Quería que Gravity Falls capturara esa sensación de misterio y descubrimiento que los niños experimentan al explorar lo desconocido.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
    <?php include('footer.php'); ?>
    </footer>

</body>
</html>
