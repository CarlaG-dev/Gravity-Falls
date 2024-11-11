<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
    <link rel="stylesheet" href="/Styles/personajes.css" />
    <link rel="stylesheet" href="/Styles/header.css" />
    <link rel="stylesheet" href="/Styles/footer.css" />
    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
        <?php include 'nav.php'; ?>
    </header>

    <section class="frase-seccion">
        <div class="rectangulo-negro">
            <h1>En esta categoria se encuentran todos los personajes de Gravity Falls: Un verano de Misterios</h1>
        </div>
        <div class="imagen-seccion">
            <img src="/Imagenes/personajes/fondo2.webp" alt="Imagen de Fondo">
        </div>
    </section>

    <section id="personajes">
        <h1>Galeria de Personajes</h1>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/diper.webp" alt="Dipper Pines">
            <h3>Dipper Pines</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/mabel.webp" alt="Mabel Pines">
            <h3>Mabel Pines</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/stan.webp" alt="Tio Stan">
            <h3>Tío Stan</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/sus.webp" alt="Sus">
            <h3>Soos Ramírez</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/w.webp" alt="Wendy">
            <h3>Wendy Corduroy</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/tio2.webp" alt="Stanford Pines">
            <h3>Stanford Pines</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/vM.webp" alt="McGucket">
            <h3>Fiddleford H. McGucket</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/rubia.webp" alt="Pacifica Noroeste">
            <h3>Pacífica Noroeste</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/bills.webp" alt="Bill Cipher">
            <h3>Bill Cipher</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/pato.webp" alt="Pato">
            <h3>Pato</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/pre.webp" alt="Gideon">
            <h3>Gideon Alegría</h3>
        </div>

        <div class="cajaPerso">
            <img src="/Imagenes/personajes/wn.png" alt="Robbie">
            <h3>Robbie Valentino</h3>
        </div>

        <div class="clearfix"></div>

        <div class="boton-container">
            <button class="boton">Ver más</button>
        </div>
    </section>

    <footer class="footer">
    <?php include('footer.php'); ?>
    </footer>


    <div id="personajeModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="" alt="Imagen del Personaje" id="modalImagen" class="modal-imagen">
            <h2 id="modalTitulo">Nombre del Personaje</h2>
            <p id="modalDescripcion">Descripción del personaje</p>
        </div>
    </div>

    <script>
       
        var modal = document.getElementById("personajeModal");
        
      
        var modalImg = document.getElementById("modalImagen");
        var modalTitle = document.getElementById("modalTitulo");
        var modalDescription = document.getElementById("modalDescripcion");
        
        
        var personajes = {
            "Dipper Pines": {
                img: "/Imagenes/personajes/diper.webp",
                description: "Dipper es un joven inteligente y determinado que siempre está en busca de respuestas. Con su diario misterioso en mano, explora lo desconocido y enfrenta los secretos oscuros que acechan en Gravity Falls."
            },
            "Mabel Pines": {
                img: "/Imagenes/personajes/mabel.webp",
                description: "Mabel es una joven alegre y optimista, conocida por su imaginación desbordante y su amor por la diversión. Siempre acompañada de su inquebrantable energía y extravagantes suéteres."
            },
            "Tío Stan": {
                img: "/Imagenes/personajes/stan.webp",
                description: "Tío Stan es el carismático y misterioso dueño de la Cabaña del Misterio. Aunque es un estafador de corazón, siempre está dispuesto a proteger a Dipper y Mabel. Con un pasado lleno de secretos, Stan oculta más de lo que muestra."
            },
            "Soos Ramírez": {
                img: "/Imagenes/personajes/sus.webp",
                description: "Soos es el fiel y simpático encargado de mantenimiento de la Cabaña del Misterio. Con su actitud despreocupada y su gran corazón, siempre está dispuesto a ayudar a Dipper y Mabel en sus aventuras."
            },
            "Wendy Corduroy": {
                img: "/Imagenes/personajes/w.webp",
                description: "Wendy es la relajada y valiente trabajadora de la Cabaña del Misterio. Con su actitud despreocupada y su estilo cool, se convierte en una aliada confiable para Dipper y Mabel, siempre lista para la aventura."
            },
            "Stanford Pines": {
                img: "/Imagenes/personajes/tio2.webp",
                description: "Stanford es el brillante pero reservado hermano de Tío Stan, un genio obsesionado con desentrañar los secretos de Gravity Falls. Tras años de investigación en otros mundos, Ford regresa con un vasto conocimiento de lo paranormal."
            },
            "Fiddleford H. McGucket": {
                img: "/Imagenes/personajes/vM.webp",
                description: "Fiddleford, conocido como el viejo McGucket, es un inventor brillante que, tras perder parte de su memoria, se convirtió en un excéntrico y algo desquiciado residente de Gravity Falls."
            },
            "Pacífica Noroeste": {
                img: "/Imagenes/personajes/rubia.webp",
                description: "Pacífica es la chica más rica y popular de Gravity Falls, descendiente de la familia fundadora del pueblo. Aunque inicialmente arrogante y superficial, a lo largo de las aventuras con Dipper y Mabel, demuestra que puede ser mucho más que la heredera mimada."
            },
            "Bill Cipher": {
                img: "/Imagenes/personajes/bills.webp",
                description: "Bill Cipher es un demonio interdimensional con forma de pirámide que posee un poder inmenso y un siniestro sentido del humor. Manipulador y despiadado, Bill disfruta causando caos y controlando las mentes de los habitantes de Gravity Falls."
            },
            "Pato": {
                img: "/Imagenes/personajes/pato.webp",
                description: "Pato es una figura enigmática que, a primera vista, puede parecer inofensivo, pero esconde una profundidad oscura. Su naturaleza ambigua lo convierte en un aliado incierto y un adversario intrigante."
            },
            "Gideon Alegría": {
                img: "/Imagenes/personajes/pre.webp",
                description: "Gideon es un joven carismático y astuto que parece tener todo bajo control. Con una ambición desmedida y una habilidad innata para manipular a los demás, busca apoderarse de Gravity Falls y desafiar a los protagonistas."
            },
            "Robbie Valentino": {
                img: "/Imagenes/personajes/wn.png",
                description: "Robbie es el típico adolescente rebelde con una actitud desafiante y un estilo rockero. Con una inclinación por la música y una actitud de desdén hacia la autoridad, a menudo se encuentra en conflicto con los protagonistas."
            }
        };
        
      
        var personajesDivs = document.querySelectorAll(".cajaPerso");
        
        personajesDivs.forEach(function(div) {
            div.addEventListener("click", function() {
       
                var personajeNombre = this.querySelector("h3").textContent;
                
              
                modalImg.src = personajes[personajeNombre].img;
                modalTitle.textContent = personajeNombre;
                modalDescription.textContent = personajes[personajeNombre].description;
                
             
                modal.style.display = "flex";
            });
        });
        
     
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() { 
            modal.style.display = "none";
        }
        
       
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        



</body>
</html>
