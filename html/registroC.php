<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conexcion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nombreU = trim($_POST['username']);
    $correo = trim($_POST['email']);
    $contrasena = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $errors = [];

 
    if (empty($nombreU) || empty($correo) || empty($contrasena) || empty($confirmPassword)) {
        $errors[] = "Complete todos los campos.";
    }
    
    if ($contrasena !== $confirmPassword) {
        $errors[] = "Las contraseñas no coinciden.";
    }


    $stmt = $conexion->prepare("SELECT COUNT(*) FROM user WHERE nombreU = ? OR correo = ?");
    $stmt->bind_param("ss", $nombreU, $correo);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        $errors[] = "nombre de usuario o el correo en uso.";
    }

    $imagen = null;
    if (isset($_FILES['pic']) && $_FILES['pic']['error'] == UPLOAD_ERR_OK) {
        $imagen = file_get_contents($_FILES['pic']['tmp_name']);
    }

   
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }


    $stmt = $conexion->prepare("INSERT INTO user (nombreU, correo, contrasena, imagen) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssb", $nombreU, $correo, $contrasena, $null);
    $stmt->send_long_data(3, $imagen);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Registro exitoso.']);
    } else {
        echo json_encode(['success' => false, 'errors' => ["Error al registrar: " . $stmt->error]]);
    }

    $stmt->close();
    $conexion->close(); 
}
?>
