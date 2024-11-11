<?php
session_start();
include "conexcion.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    if (isset($_SESSION['nombreU'])) {
      
        $nombreUsuario = $_SESSION['nombreU'];
        $comentario = $_POST['comentario'];
        $fecha = date("Y-m-d H:i:s"); 

       
        $consulta = "INSERT INTO reseñas (nombreU, comentario, fecha) VALUES ('$nombreUsuario', '$comentario', '$fecha')";

        // Ejecutar la consulta
        if (mysqli_query($conexion, $consulta)) {
            echo "success"; 
        } else {
            echo "Error: " . mysqli_error($conexion); 
        }
    } else {
        echo "Debes iniciar sesión para dejar un comentario."; 
    }
} else {
    echo "Método no permitido."; 
}
?>
