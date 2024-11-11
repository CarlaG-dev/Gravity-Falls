<?php
$conexion = new mysqli(
    "bgzpz4gvfmpha8dzv60g-mysql.services.clever-cloud.com", 
    "uvoh3o4fzqnmh7ni", 
    "QCnpDZZmBS8qlcneMfIq",
    "bgzpz4gvfmpha8dzv60g", 
    3306 
);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>
