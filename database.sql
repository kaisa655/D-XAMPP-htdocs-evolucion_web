-- Crear esta base de datos desde phpMyAdmin o importar este archivo.
CREATE DATABASE IF NOT EXISTS sitio_web
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE sitio_web;

CREATE TABLE IF NOT EXISTS mensajes (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(150) NOT NULL,
  fecha_visita DATE NOT NULL,
  tema ENUM('historia', 'tecnologias', 'diseno', 'futuro') NOT NULL,
  recomendacion ENUM('si', 'no') NOT NULL,
  comentarios VARCHAR(500) NULL,
  fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
