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
-- Estructura para la tabla afiliado
--
CREATE TABLE afiliado (
    afil_id INT AUTO_INCREMENT PRIMARY KEY,
    afil_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    afil_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    afil_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    afil_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    afil_seccion VARCHAR(50) DEFAULT '00000',
    afil_direccion TEXT,
    afil_cp VARCHAR(50) DEFAULT '00000',
    afil_tel_celular VARCHAR(255) DEFAULT '0000000000',
    afil_tel_alterno VARCHAR(255) DEFAULT '0000000000',
    afil_correo VARCHAR(255) DEFAULT 'DEFAULT',
    afil_comentario TEXT,
    afil_visible TINYINT(1) DEFAULT 0,
    afil_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    afil_motivo_movimiento TEXT NOT NULL,
    afil_fk_usuario_movimiento INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Estructura para la tabla afiliado
--
CREATE TABLE log_afiliado (
    log_afil_id INT AUTO_INCREMENT PRIMARY KEY,
    log_afil_nombre VARCHAR(255) DEFAULT 'DEFAULT',
    log_afil_apaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_afil_amaterno VARCHAR(255) DEFAULT 'DEFAULT',
    log_afil_localidad VARCHAR(255) DEFAULT 'DEFAULT',
    log_afil_seccion VARCHAR(50) DEFAULT '00000',
    log_afil_direccion TEXT,
    log_afil_cp VARCHAR(50) DEFAULT '00000',
    log_afil_tel_celular VARCHAR(255) DEFAULT '0000000000',
    log_afil_tel_alterno VARCHAR(255) DEFAULT '0000000000',
    log_afil_correo VARCHAR(255) DEFAULT 'DEFAULT',
    log_afil_comentario TEXT,
    log_afil_visible TINYINT(1) DEFAULT 0,
    log_afil_visible_log TINYINT(1) DEFAULT 0,
    log_afil_fecha_movimiento DATETIME DEFAULT '2001-01-01 01:01:01',
    log_afil_motivo_movimiento TEXT NOT NULL,
    log_afil_tipo_movimiento VARCHAR(50),
    log_afil_fk_usuario_movimiento INT,
    log_afil_fk_afiliado INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
    ('juanmanuel.delucio',MD5('juanmanuel.delucio'),'Juan Manuel','De Lucio','Ramírez','juanmanuel_delucio@yahoo.com','Sistemas','A',1,NOW(),'Nuevo Registro',1,1);


ALTER TABLE usuario
ADD CONSTRAINT usuario_fs_catalogo_estatus FOREIGN KEY (usua_fs_cata_estatus) REFERENCES catalogo(cata_id),
ADD CONSTRAINT usuario_fk_usuario_movimiento FOREIGN KEY (usua_fk_usuario_movimiento) REFERENCES usuario(usua_id);

ALTER TABLE afiliado
ADD CONSTRAINT afiliado_fk_usuario_movimiento FOREIGN KEY (afil_fk_usuario_movimiento) REFERENCES usuario(usua_id);

ALTER TABLE log_afiliado
ADD CONSTRAINT log_afiliado_fk_usuario_movimiento FOREIGN KEY (log_afil_fk_usuario_movimiento) REFERENCES usuario(usua_id),
ADD CONSTRAINT log_afiliado_fk_afiliado FOREIGN KEY (log_afil_fk_afiliado) REFERENCES afiliado(afil_id);


INSERT INTO afiliado (
    afil_nombre, 
    afil_apaterno, 
    afil_amaterno,
    afil_localidad,
    afil_seccion, 
    afil_direccion, 
    afil_cp, 
    afil_tel_celular, 
    afil_tel_alterno, 
    afil_correo, 
    afil_comentario, 
    afil_visible, 
    afil_fecha_movimiento, 
    afil_motivo_movimiento, 
    afil_fk_usuario_movimiento) 
VALUES 
    ('Juan Manuel', 'De Lucio', 'Ramirez', 'San Salvador Atenco', '0236', 'Privada de Libertad #7', '56300', '5531220199', '0000000000', 'juanmanuel_delucio@yahoo.com', 'Sin Comentarios',1, NOW(), 'Nuevo Registro',1);


-- VIEW
CREATE VIEW view_afiliados AS
SELECT 
	afil_id, 
	afil_nombre, 
	afil_apaterno, 
	afil_amaterno,
	CONCAT(afil_nombre,' ',afil_apaterno,' ',afil_amaterno) AS afil_nombre_completo, 
	afil_localidad, 
	afil_seccion, 
	afil_direccion, 
	afil_cp, 
	afil_tel_celular, 
	afil_tel_alterno, 
	afil_correo, 
	afil_comentario, 
	afil_visible, 
	afil_fecha_movimiento, 
	afil_motivo_movimiento, 
	afil_fk_usuario_movimiento 
FROM afiliado;

INSERT INTO usuario (usua_login, usua_contrasena, usua_nombre, usua_apaterno, usua_amaterno, usua_correo, usua_puesto, usua_tipo, usua_visible, usua_fecha_movimiento, usua_motivo_movimiento, usua_fs_cata_estatus, usua_fk_usuario_movimiento) VALUES ('ricardo.rosado', MD5('ricardo.rosado'), 'Ricardo', 'Rosado', 'De la Rosa', 'ricardo@gmail.com', 'Administrador', 'A', '1', NOW(), 'Nuevo Registro', '1', '1');