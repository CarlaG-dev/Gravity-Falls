<?php
session_start();
include "conexcion.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST["email"];
    $clave = $_POST["password"];

    $consulta = "SELECT nombreU, correo, imagen FROM user WHERE correo = '$usuario' AND contrasena = '$clave'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        $usuarioData = mysqli_fetch_assoc($resultado);

        if ($usuarioData['imagen']) {
            $imagenBase64 = 'data:image/jpeg;base64,' . base64_encode($usuarioData['imagen']);
        } else {
            $imagenBase64 = '';  
        }

        $_SESSION['nombreU'] = $usuarioData['nombreU'];
        $_SESSION['imagenU'] = $imagenBase64;
        $_SESSION['email'] = $usuarioData['correo']; 
        echo json_encode(["success" => true]);
       
    } else {
        echo json_encode(["success" => false, "message" => "Credenciales incorrectas."]);
    }
    exit();
}
?>

