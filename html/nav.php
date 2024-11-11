<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location:index.php");
    exit();  
}
?>

<?php if (isset($_SESSION['nombreU'])): ?>

    <style>
        .user-info {
            display: flex;
            align-items: center;
            position: relative; 
        }
        .user-info .user-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
            border: 2px solid white;
        }
        .user-info .user-name {
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .logout-popup {
            display: none;
            position: absolute;
            top: 50px;
            right: 0;
            margin-right: 10px;
            background-color: #242424;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }
        .logout-popup a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 5px;
        }
        .logout-popup a:hover {
            text-decoration: underline;
        }
    </style>

    <header>
        <a href="index.php" class="logo">
            <img src="/Imagenes/Gravity_Falls_logo.svg" alt="logo" class="logo" />
        </a>
        <nav>
            <ul class="navigation">
                <li><a href="capitulos.php">Trama principal</a></li>
                <li><a href="personajes.php">Personajes</a></li>
                <li><a href="acerca.php">Acerca de</a></li>
                <li><a href="reseñas.php">Reseñas</a></li>
            </ul>

            <div class="user-info">
                <img src="<?php echo isset($_SESSION['imagenU']) ? $_SESSION['imagenU'] : '/path/to/default-image.png'; ?>" alt="Imagen del usuario" class="user-image">
                <span class="user-name" onclick="toggleLogoutPopup()"><?php echo $_SESSION['nombreU']; ?></span>
                
                <div id="logout-popup" class="logout-popup">
                    <a href="?logout=true">Cerrar sesión</a>
                </div>
            </div>
        </nav>
    </header>

    <script>
        function toggleLogoutPopup() {
            var popup = document.getElementById("logout-popup");
            popup.style.display = (popup.style.display === "block") ? "none" : "block";
        }
        window.onclick = function(event) {
            if (!event.target.closest('.user-info')) {
                var popup = document.getElementById("logout-popup");
                popup.style.display = "none";
            }
        }
    </script>

<?php else: ?>
    <header>
        <a href="index.php" class="logo">
            <img src="/Imagenes/Gravity_Falls_logo.svg" alt="logo" />
        </a>
        <nav>
            <ul class="navigation">
                <li><a href="capitulos.php">Trama principal</a></li>
                <li><a href="personajes.php">Personajes</a></li>  
                <li><a href="acerca.php">Acerca de</a></li>
                <li><a href="reseñas.php">Reseñas</a></li>
                <li><a href="login.php" class="login-link"><i class="fas fa-user"></i> Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>
<?php endif; ?>
