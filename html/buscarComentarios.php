<?php
include "conexcion.php";

$username = isset($_POST['username']) ? $_POST['username'] : '';


$username = mysqli_real_escape_string($conexion, $username);

if (empty($username)) {
  
    $consulta = "
        SELECT r.*, u.imagen 
        FROM reseñas r
        JOIN user u ON r.nombreU = u.nombreU
        ORDER BY r.fecha DESC
    ";
} else {
    
    $consulta = "
        SELECT r.*, u.imagen 
        FROM reseñas r
        JOIN user u ON r.nombreU = u.nombreU
        WHERE u.nombreU LIKE '%$username%'
        ORDER BY r.fecha DESC
    ";
}

$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}

if (mysqli_num_rows($resultado) > 0) {
    while ($comentario = mysqli_fetch_assoc($resultado)) {
        echo '<div class="cajaC">';
        echo '<div class="stars">★ ★ ★ ★ ★</div>'; 
        
        if ($comentario['imagen']) {
            $imagen_base64 = base64_encode($comentario['imagen']);
            echo '<img class="perfil" src="data:image/jpeg;base64,' . $imagen_base64 . '" alt="Foto de Perfil">'; 
        } else {
            echo '<img class="perfil" src="/Imagenes/reseñas/perfil_placeholder.webp" alt="Foto de Perfil">'; 
        }

        echo '<div class="texto-comentario">';
        echo '<h3>' . htmlspecialchars($comentario['nombreU']) . '</h3>'; 
        echo '<h4>' . date('F j, Y, g:i a', strtotime($comentario['fecha'])) . '</h4>'; 
        echo '<p>' . htmlspecialchars($comentario['comentario']) . '</p>'; 
        echo '</div>';
        echo '</div>'; 
    }
} else {
    echo '<p>No hay comentarios para este usuario. ¡Sé el primero en comentar!</p>';
}
?>
