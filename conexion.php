
<?php

$host = "localhost";
$baseDatos = "evolucion_web";
$usuario = "root";
$contrasena = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$baseDatos;charset=$charset";

$opciones = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

try {
    $conexion = new PDO(
        $dsn,
        $usuario,
        $contrasena,
        $opciones
    );
} catch (PDOException $e) {
    die("No se pudo conectar con la base de datos. Verifica XAMPP.");
}

?>
