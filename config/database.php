<?php
declare(strict_types=1);

// Configuración local para XAMPP. Cambia estos valores si tu instalación es distinta.
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'evolucion_web');
define('DB_USER', 'root');
define('DB_PASS', '');

function obtenerConexion(): PDO {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
    return new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
}
