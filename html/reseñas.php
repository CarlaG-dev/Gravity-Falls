<?php
session_start();

if (isset($_GET['logout'])) {
    session_unset();  
    session_destroy();  
    header("Location: /html/index.php"); 
    exit();  
}


$isLoggedIn = isset($_SESSION['nombreU']) && !empty($_SESSION['nombreU']);
$nombreUsuario = $isLoggedIn ? $_SESSION['nombreU'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas</title>
    <link rel="stylesheet" href="/Styles/header.css" />
    <link rel="stylesheet" href="/Styles/footer.css" />
    <link rel="stylesheet" href="/Styles/reseñas.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMGx5sO9aM4BIdy7/7Uj3mFZK/1D6F5eLw2u4" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #comentarios {
            flex: 1;
            margin-bottom: 20px;
        }

        footer {
            margin-top: auto;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .barra-busqueda {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .barra-busqueda input {
            padding: 12px 20px;
            border: 2px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            width: 400px;
            margin-right: 15px;
            outline: none;
            transition: all 0.3s ease;
            background-color: #ffffff;
        }

        .barra-busqueda input:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #f0f8ff;
        }

        .barra-busqueda button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 12px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }

        .barra-busqueda button:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.4);
        }

        .barra-busqueda button:active {
            transform: translateY(0);
            box-shadow: 0 2px 10px rgba(0, 123, 255, 0.3);
        }

        #comentario {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 10px;
            resize: none;
            min-height: 150px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        #comentario:focus {
            border-color: #007BFF;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
            background-color: #f0f8ff;
        }

        button[type="submit"] {
            display: block;
            margin: 20px auto 0;
            background-color: #007BFF;
            color: white;
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        button[type="submit"]:active {
            transform: translateY(0);
        }

        .comentario-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .comentario-container img {
            width: 200px;
            height: auto;
            margin-right: 20px;
            border-radius: 10px;
        }

        .comentario-container .texto {
            flex: 1;
        }

        .comentario-container .texto h1 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }

        .comentario-container .texto a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .comentario-container .texto a:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .comentario-container .texto a:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>

<header>
    <?php include 'nav.php'; ?>
</header>

<section class="encabezado">
    <h1>Lo que los Fans opinan</h1>
</section>

<section class="comentario">
    <div class="comentario-contenido">
        <?php if ($isLoggedIn): ?>
            <h2>¡Hola, <?php echo htmlspecialchars($nombreUsuario); ?>! ¿Qué tienes para contarnos hoy?</h2> <!-- Mensaje personalizado -->
            <div id="mensaje-error" style="color: red;"></div> <!-- Aquí mostraremos el mensaje de error -->
            <form id="comentario-form" action="guardarComentario.php" method="post"> 
                <label for="comentario">Comentario</label> 
                <textarea id="comentario" name="comentario" placeholder="Comentario" rows="4" required></textarea>
                <button type="submit">Comentar</button>
            </form>
        <?php else: ?>
            <div class="comentario-container">
                <img src="/Imagenes/reseñas/nosesion.webp" alt="dipper" /> <!-- Coloca la ruta de la imagen aquí -->
                <div class="texto">
                    <h1>¿Quieres dejar una reseña? Inicia sesión</h1>
                    <a href="login.php">Iniciar sesión</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<div class="barra-busqueda">
    <input type="text" placeholder="Buscar por Usuario..." id="buscador" />
    <button type="button" id="buscar-btn">
        <i class="fas fa-search"></i> 
    </button>
</div>

<section id="comentarios">
    <h2>Descubre lo que los otros fans opinan sobre Gravity Falls y comparte tu experiencia</h2>
    <?php include 'comentarios.php'; ?> 
</section>

<footer>
    <?php include('footer.php'); ?>
</footer>

<script>
$(document).ready(function() {
    $('#comentario-form').submit(function(event) {
        event.preventDefault(); 

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'), 
            data: $(this).serialize(), 
            success: function(response) {
                if (response === "success") {
                    location.reload(); 
                } else {
                    $('#mensaje-error').text(response); 
                }
            },
            error: function() {
                $('#mensaje-error').text("Error al enviar tu comentario"); 
            }
        });
    });

    $('#buscar-btn').click(function() {
        var username = $('#buscador').val(); 
        if (username.trim() === "") {
            $('#comentarios').load('comentarios.php');
        } else {
            $.ajax({
                type: 'POST',
                url: 'buscarComentarios.php',
                data: { username: username },
                success: function(response) {
                    $('#comentarios').html(response);
                },
                error: function() {
                    alert("Error al buscar comentarios.");
                }
            });
        }
    });
});
</script>

</body>
</html>
