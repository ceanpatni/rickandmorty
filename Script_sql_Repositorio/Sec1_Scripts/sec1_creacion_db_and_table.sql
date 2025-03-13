CREATE DATABASE IF NOT EXISTS rickandmorty;
USE rickandmorty;
-- Crear la tabla characters
CREATE TABLE IF NOT EXISTS characters (
    id INT AUTO_INCREMENT PRIMARY KEY,          -- ID único generado automáticamente
    external_id INT NOT NULL UNIQUE,            -- ID del personaje en la API
    name VARCHAR(255) NOT NULL,                 -- Nombre del personaje
    status VARCHAR(50) NOT NULL,                -- Estado del personaje (vivo, muerto, etc.)
    species VARCHAR(100) NOT NULL,              -- Especie del personaje
    type VARCHAR(100),                          -- Tipo del personaje (puede ser nulo)
    gender VARCHAR(50) NOT NULL,                -- Género del personaje
    origin_name VARCHAR(255) NOT NULL,          -- Nombre del lugar de origen
    origin_url VARCHAR(255) NOT NULL,           -- URL del lugar de origen
    image VARCHAR(255) NOT NULL,                -- URL de la imagen del personaje
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Fecha de creación del registro
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Fecha de actualización
);