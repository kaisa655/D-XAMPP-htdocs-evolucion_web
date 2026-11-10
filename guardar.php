
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}

require_once "conexion.php";

// Recibir los datos
$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$fecha = trim($_POST["fecha"] ?? "");
$tema = trim($_POST["tema"] ?? "");
$recomendacion = trim($_POST["recomendacion"] ?? "");
$comentarios = trim($_POST["comentarios"] ?? "");
$acepto = isset($_POST["acepto"]);

// Validar la fecha
$fechaObjeto = DateTime::createFromFormat("!Y-m-d", $fecha);

// Validar los datos
$datosValidos =
    mb_strlen($nombre) >= 2 &&
    filter_var($correo, FILTER_VALIDATE_EMAIL) &&
    $fechaObjeto !== false &&
    $fechaObjeto->format("Y-m-d") === $fecha &&
    in_array($tema, ["historia", "tecnologias", "diseno", "futuro"], true) &&
    in_array($recomendacion, ["si", "no"], true) &&
    $acepto &&
    mb_strlen($comentarios) <= 500;

// Si los datos son incorrectos
if (!$datosValidos) {
    header("Location: contacto.php?estado=error");
    exit;
}

// Guardar en MySQL
try {

    $sql = "INSERT INTO mensajes
    (nombre, correo, fecha_visita, tema, recomendacion, comentarios)
    VALUES (?, ?, ?, ?, ?, ?)";

    $consulta = $conexion->prepare($sql);

    $consulta->execute([
        $nombre,
        $correo,
        $fecha,
        $tema,
        $recomendacion,
        $comentarios
    ]);

    // Regresar a la misma página
    header("Location: contacto.php?estado=ok");
    exit;

} catch (PDOException $e) {

    error_log($e->getMessage());

    header("Location: contacto.php?estado=error");
    exit;
}

?>
