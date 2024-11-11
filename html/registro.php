<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Merriweather:wght@300&display=swap" rel="stylesheet" />

    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="/Styles/registro.css" />
    <link rel="stylesheet" href="/Styles/header.css" />
    <link rel="stylesheet" href="/Styles/footer.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/846ca2fdf9.js" crossorigin="anonymous"></script>
</head>

<body>

<header>
        <?php include 'nav.php'; ?>
    </header>

    <!-- Formulario Registro -->
    <section class="login">
        <div class="login">
            <div class="loginr">
                <form class="login-form" id="registrationForm" enctype="multipart/form-data">
                    <h2>Registro</h2>
                    <div class="form-fields">
                        <label for="username">Nombre Usuario</label>
                        <input type="text" id="username" name="username" required placeholder="Usuario">

                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" required placeholder="Correo">

                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required placeholder="Contraseña">

                        <label for="confirm-password">Confirmar Contraseña</label>
                        <input type="password" id="confirm-password" name="confirm-password" required placeholder="Repetir Contraseña">

                        <label for="pic">Foto de Perfil:</label>
                        <div class="image-preview">
                            <img id="pic-preview" src="" alt="Vista previa de la imagen" style="display:none;" />
                            <input type="file" id="pic" name="pic" accept="image/*" onchange="previewImage(event)" hidden />
                            <button type="button" onclick="document.getElementById('pic').click()">Seleccionar Imagen</button>
                        </div>

                        <div id="errorMessages" style="color: red; margin-top: 10px;"></div>

                        <button type="submit">Registrar</button>
                        <div class="register-link">
                            <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
    <?php include('footer.php'); ?>
    </footer>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('pic-preview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }

        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            const formData = new FormData(this);

            fetch('registroC.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                const errorMessages = document.getElementById('errorMessages');
                errorMessages.innerHTML = ''; 

                if (data.success) {
                    alert(data.message); 
                    window.location.href = 'login.php'; 
                } else {
                    data.errors.forEach(error => {
                        const p = document.createElement('p');
                        p.textContent = error;
                        errorMessages.appendChild(p);
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const errorMessages = document.getElementById('errorMessages');
                errorMessages.innerHTML = '<p>Ha ocurrido un error al procesar el registro.</p>';
            });
        });
    </script>

</body>

</html>
