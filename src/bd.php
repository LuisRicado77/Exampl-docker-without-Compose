<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = new mysqli(
    "mysql-server",  // Nombre del contenedor MySQL
    "root",          // Usuario
    "rootpassword",  // Contraseña
    "mydb"           // Nombre de la base de datos
);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo "¡Conexión a MySQL establecida correctamente!";
?>
