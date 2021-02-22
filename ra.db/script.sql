-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 23-12-2020 a las 12:00:00
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: ra_independiente
--
CREATE DATABASE ra_independiente DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE ra_independiente;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla catalogo
--

CREATE TABLE catalogo (
    cata_id INT PRIMARY KEY AUTO_INCREMENT,
    cata_nombre VARCHAR(50) DEFAULT 'DEFAULT',
    cata_descripcion VARCHAR(100)  DEFAULT 'DEFAULT',
    cata_visible TINYINT(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


--
-- Estructura para la tabla usuario
--
CREATE TABLE usuario (
    usua_id INT AUTO_INCREMENT PRIMARY KEY,
    usua_login VARCHAR(255) NOT NULL,
    usua_contrasena VARCHAR(255) NOT NULL,
    usua_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    usua_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    usua_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    usua_correo VARCHAR(255) DEFAULT 'DEFAULT',
    usua_puesto VARCHAR(255) DEFAULT 'DEFAULT',
    usua_tipo CHAR(1) NOT NULL,
    usua_visible TINYINT(1) DEFAULT 0,
    usua_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    usua_motivo_movimiento TEXT NOT NULL,
    usua_fs_cata_estatus INT,
    usua_fk_usuario_movimiento INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla directivo
--
CREATE TABLE directivo (
    dire_id INT AUTO_INCREMENT PRIMARY KEY,
    dire_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    dire_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    dire_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    dire_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    dire_seccion VARCHAR(50) DEFAULT '00000',
    dire_direccion TEXT,
    dire_cp VARCHAR(50) DEFAULT '00000',
    dire_tel_celular VARCHAR(255) DEFAULT '0000000000',
    dire_correo VARCHAR(255) DEFAULT 'DEFAULT',
    dire_comentario TEXT,
    dire_visible TINYINT(1) DEFAULT 0,
    dire_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    dire_motivo_movimiento TEXT NOT NULL,
    dire_fk_usuario_movimiento INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla lider
--
CREATE TABLE lider (
    lide_id INT AUTO_INCREMENT PRIMARY KEY,
    lide_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    lide_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    lide_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    lide_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    lide_seccion VARCHAR(50) DEFAULT '00000',
    lide_direccion TEXT,
    lide_cp VARCHAR(50) DEFAULT '00000',
    lide_tel_celular VARCHAR(255) DEFAULT '0000000000',
    lide_comentario TEXT,
    lide_visible TINYINT(1) DEFAULT 0,
    lide_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    lide_motivo_movimiento TEXT NOT NULL,
    lide_fk_directivo INT,
    lide_fk_usuario_movimiento INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla coordinador
--
CREATE TABLE coordinador (
    coor_id INT AUTO_INCREMENT PRIMARY KEY,
    coor_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    coor_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    coor_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    coor_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    coor_seccion VARCHAR(50) DEFAULT '00000',
    coor_direccion TEXT,
    coor_cp VARCHAR(50) DEFAULT '00000',
    coor_tel_celular VARCHAR(255) DEFAULT '0000000000',
    coor_comentario TEXT,
    coor_visible TINYINT(1) DEFAULT 0,
    coor_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    coor_motivo_movimiento TEXT NOT NULL,
    coor_fk_directivo INT,
    coor_fk_lider INT,
    coor_fk_usuario_movimiento INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla simpatizante
--
CREATE TABLE simpatizante (
    simp_id INT AUTO_INCREMENT PRIMARY KEY,
    simp_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    simp_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    simp_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    simp_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    simp_seccion VARCHAR(50) DEFAULT '00000',
    simp_direccion TEXT,
    simp_cp VARCHAR(50) DEFAULT '00000',
    simp_tel_celular VARCHAR(255) DEFAULT '0000000000',
    simp_comentario TEXT,
    simp_visible TINYINT(1) DEFAULT 0,
    simp_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    simp_motivo_movimiento TEXT NOT NULL,
    simp_fk_directivo INT,
    simp_fk_lider INT,
    simp_fk_coordinador INT,
    simp_fk_usuario_movimiento INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla log_directivo
--
CREATE TABLE log_directivo (
    log_dire_id INT AUTO_INCREMENT PRIMARY KEY,
    log_dire_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    log_dire_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_dire_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_dire_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    log_dire_seccion VARCHAR(50) DEFAULT '00000',
    log_dire_direccion TEXT,
    log_dire_cp VARCHAR(50) DEFAULT '00000',
    log_dire_tel_celular VARCHAR(255) DEFAULT '0000000000',
    log_dire_correo VARCHAR(255) DEFAULT 'DEFAULT',
    log_dire_comentario TEXT,
    log_dire_visible TINYINT(1) DEFAULT 0,
    log_dire_visible_log TINYINT(1) DEFAULT 0,
    log_dire_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    log_dire_motivo_movimiento TEXT NOT NULL,
    log_dire_tipo_movimiento VARCHAR(50),
    log_dire_fk_usuario_movimiento INT,
    log_dire_fk_directivo INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla log_lider
--
CREATE TABLE log_lider (
    log_lide_id INT AUTO_INCREMENT PRIMARY KEY,
    log_lide_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    log_lide_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_lide_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_lide_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    log_lide_seccion VARCHAR(50) DEFAULT '00000',
    log_lide_direccion TEXT,
    log_lide_cp VARCHAR(50) DEFAULT '00000',
    log_lide_tel_celular VARCHAR(255) DEFAULT '0000000000',
    log_lide_comentario TEXT,
    log_lide_visible TINYINT(1) DEFAULT 0,
    log_lide_visible_log TINYINT(1) DEFAULT 0,
    log_lide_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    log_lide_motivo_movimiento TEXT NOT NULL,
    log_lide_tipo_movimiento VARCHAR(50),
    log_lide_fk_usuario_movimiento INT,
    log_lide_fk_directivo INT,
    log_lide_fk_lider INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla log_coordinador
--
CREATE TABLE log_coordinador (
    log_coor_id INT AUTO_INCREMENT PRIMARY KEY,
    log_coor_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    log_coor_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_coor_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_coor_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    log_coor_seccion VARCHAR(50) DEFAULT '00000',
    log_coor_direccion TEXT,
    log_coor_cp VARCHAR(50) DEFAULT '00000',
    log_coor_tel_celular VARCHAR(255) DEFAULT '0000000000',
    log_coor_comentario TEXT,
    log_coor_visible TINYINT(1) DEFAULT 0,
    log_coor_visible_log TINYINT(1) DEFAULT 0,
    log_coor_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    log_coor_motivo_movimiento TEXT NOT NULL,
    log_coor_tipo_movimiento VARCHAR(50),
    log_coor_fk_usuario_movimiento INT,
    log_coor_fk_directivo INT,
    log_coor_fk_lider INT,
    log_coor_fk_coordinador INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla log_simpatizante
--
CREATE TABLE log_simpatizante (
    log_simp_id INT AUTO_INCREMENT PRIMARY KEY,
    log_simp_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    log_simp_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_simp_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_simp_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    log_simp_seccion VARCHAR(50) DEFAULT '00000',
    log_simp_direccion TEXT,
    log_simp_cp VARCHAR(50) DEFAULT '00000',
    log_simp_tel_celular VARCHAR(255) DEFAULT '0000000000',
    log_simp_comentario TEXT,
    log_simp_visible TINYINT(1) DEFAULT 0,
    log_simp_visible_log TINYINT(1) DEFAULT 0,
    log_simp_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    log_simp_motivo_movimiento TEXT NOT NULL,
    log_simp_tipo_movimiento VARCHAR(50),
    log_simp_fk_usuario_movimiento INT,
    log_simp_fk_directivo INT,
    log_simp_fk_lider INT,
    log_simp_fk_coordinador INT,
    log_simp_fk_simpatizante INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- 
-- Insert del catalogo 
-- 
INSERT INTO catalogo(
    cata_id,
    cata_nombre,
    cata_descripcion,
    cata_visible) VALUES 
    (1,'usua_status','Activo',1),
    (2,'usua_status','Inactivo',1);

INSERT INTO usuario(
    usua_login, 
    usua_contrasena, 
    usua_nombre, 
    usua_apaterno, 
    usua_amaterno, 
    usua_correo, 
    usua_puesto, 
    usua_tipo,
    usua_visible, 
    usua_fecha_movimiento, 
    usua_motivo_movimiento,
    usua_fs_cata_estatus,
    usua_fk_usuario_movimiento) 
VALUES 
    ('Sistemas',MD5('Sistemas'),'Sistemas','Sistemas','Sistemas','Sistemas','Sistemas','A',1,NOW(),'Nuevo Registro',1,1),
    ('juanmanuel.delucio',MD5('juanmanuel.delucio'),'Juan Manuel','De Lucio','Ramírez','juanmanuel_delucio@yahoo.com','Sistemas','A',1,NOW(),'Nuevo Registro',1,1),
    ('ricardo.rosado', MD5('ricardo.rosado'), 'Ricardo', 'Rosado', 'De la Rosa', 'ricardo@gmail.com', 'Administrador', 'A', '1', NOW(), 'Nuevo Registro',1,1);

ALTER TABLE usuario
ADD CONSTRAINT usuario_fs_catalogo_estatus FOREIGN KEY (usua_fs_cata_estatus) REFERENCES catalogo(cata_id),
ADD CONSTRAINT usuario_fk_usuario_movimiento FOREIGN KEY (usua_fk_usuario_movimiento) REFERENCES usuario(usua_id);

ALTER TABLE directivo
ADD CONSTRAINT directivo_fk_usuario_movimiento FOREIGN KEY (dire_fk_usuario_movimiento) REFERENCES usuario(usua_id);

ALTER TABLE lider
ADD CONSTRAINT lider_fk_directivo FOREIGN KEY (lide_fk_directivo) REFERENCES directivo(dire_id),
ADD CONSTRAINT lider_fk_usuario_movimiento FOREIGN KEY (lide_fk_usuario_movimiento) REFERENCES usuario(usua_id);

ALTER TABLE coordinador
ADD CONSTRAINT coordinador_fk_directivo FOREIGN KEY (coor_fk_directivo) REFERENCES directivo(dire_id),
ADD CONSTRAINT coordinador_fk_lider FOREIGN KEY (coor_fk_lider) REFERENCES lider(lide_id),
ADD CONSTRAINT coordinador_fk_usuario_movimiento FOREIGN KEY (coor_fk_usuario_movimiento) REFERENCES usuario(usua_id);

ALTER TABLE simpatizante
ADD CONSTRAINT simpatizante_fk_directivo FOREIGN KEY (simp_fk_directivo) REFERENCES directivo(dire_id),
ADD CONSTRAINT simpatizante_fk_lider FOREIGN KEY (simp_fk_lider) REFERENCES lider(lide_id),
ADD CONSTRAINT simpatizante_fk_coordinador FOREIGN KEY (simp_fk_coordinador) REFERENCES coordinador(coor_id),
ADD CONSTRAINT simpatizante_fk_usuario_movimiento FOREIGN KEY (simp_fk_usuario_movimiento) REFERENCES usuario(usua_id);

INSERT INTO directivo(
    dire_nombre, 
    dire_apaterno, 
    dire_amaterno, 
    dire_localidad, 
    dire_seccion, 
    dire_direccion, 
    dire_cp, 
    dire_tel_celular, 
    dire_correo, 
    dire_comentario, 
    dire_visible, 
    dire_fecha_movimiento, 
    dire_motivo_movimiento, 
    dire_fk_usuario_movimiento) 
VALUES (
    "Sin Directivo", 
    " ",
    " ",
    "Sin Directivo",
    "0000",
    "Sin Directivo",
    "00000",
    "000000000",
    "Sin correo",
    "Sin comentarios",
    1,NOW(),"Sin motivo",
    1);

INSERT INTO lider(
    lide_nombre, 
    lide_apaterno, 
    lide_amaterno, 
    lide_localidad, 
    lide_seccion, 
    lide_direccion,
    lide_cp, 
    lide_tel_celular, 
    lide_comentario, 
    lide_visible, 
    lide_fecha_movimiento, 
    lide_motivo_movimiento, 
    lide_fk_directivo, 
    lide_fk_usuario_movimiento) 
    VALUES (
        "Sin lider",
        " ",
        " ",
        "Sin localidad",
        "0000",
        "Sin dirección",
        "00000",
        "0000000000",
        "Sin comentario",
        1,NOW(),"Sin motivo",
        1,1);

INSERT INTO coordinador(
    coor_nombre, 
    coor_apaterno, 
    coor_amaterno, 
    coor_localidad, 
    coor_seccion, 
    coor_direccion, 
    coor_cp, 
    coor_tel_celular, 
    coor_comentario, 
    coor_visible, 
    coor_fecha_movimiento, 
    coor_motivo_movimiento, 
    coor_fk_directivo, 
    coor_fk_lider, 
    coor_fk_usuario_movimiento) 
VALUES (
    "Sin coordinador",
    " ",
    " ",
    "Sin localidad",
    "0000",
    "Sin dirección",
    "00000",
    "0000000000",
    "Sin comentarios",
    1,NOW(),"Sin motivo",
    1,1,1);

CREATE VIEW view_directores_nombre_completo AS 
SELECT 
    dire_id,
    CONCAT(dire_nombre," ",dire_apaterno," ",dire_amaterno) AS dire_nombre_completo 
FROM directivo WHERE dire_visible=1;

CREATE VIEW view_lideres_nombre_completo AS 
SELECT 
    lide_id,
    CONCAT(lide_nombre," ", lide_apaterno," ", lide_amaterno) AS lide_nombre_completo 
FROM lider WHERE lide_visible=1;

CREATE VIEW view_coordinador_nombre_completo AS 
SELECT 
    coor_id,
    CONCAT(coor_nombre," ", coor_apaterno," ", coor_amaterno) AS coor_nombre_completo 
FROM coordinador WHERE coor_visible=1;