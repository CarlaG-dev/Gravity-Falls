<?php

include 'conexcion.php'; 

$nombreU = $_POST['nombre'];
$correo = $_POST['email'];
$mensajeC = $_POST['mensaje'];

$stmt = $conexion->prepare("INSERT INTO contactanos (nombreU, correo, texto) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombreU, $correo, $mensajeC);

if ($stmt->execute()) {
    header("location:index.php"); 
    exit(); 
} else {
    echo "Error al registrar: " . $stmt->error;
}

$stmt->close();
$conexion->close(); 
?>