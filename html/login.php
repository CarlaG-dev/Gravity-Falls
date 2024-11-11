<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Merriweather:wght@300&display=swap"
        rel="stylesheet" />
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="/Styles/loginStyle.css" />
    <link rel="stylesheet" href="/Styles/header.css" />
    <link rel="stylesheet" href="/Styles/footer.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
<header>
        <?php include 'nav.php'; ?>
    </header>

    <!-- Formulario de Inicio de Sesión -->
    <section class="login">
        <div class="loginr">
            <div class="login-form">
                <h2>Inicio de Sesión</h2>
                <form id="loginForm">
                    <div class="form-content">
                        <div class="form-fields">
                            <label for="email">Correo</label>
                            <input type="email" id="email" name="email" placeholder="Correo" required>

                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" placeholder="Contraseña" required>

                            
                            <p id="error-message" style="color: red; display: none;"></p>

                            <button type="button" onclick="login()">Iniciar Sesión</button>

                            <p class="register-link">¿Aún no tienes cuenta? <a href="registro.php">Regístrate</a></p>
                        </div>
                        <div class="form-image">
                            <img src="/Imagenes/inicioS.webp" alt="Imagen de Inicio de Sesión">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>x

    <footer class="footer">
    <?php include('footer.php'); ?>
    </footer>

    <!-- Script envío de inicio de sesión -->
    <script>
        function login() {
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const errorMessage = document.getElementById("error-message");

         
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "loginC.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);

                    if (response.success) {
                        window.location.href = "index.php";
                    } else {
                        errorMessage.style.display = "block";
                        errorMessage.textContent = response.message;
                    }
                }
            };

            xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
        }
    </script>
</body>
</html>
