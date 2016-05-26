-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 24-06-2014 a las 13:31:16
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `pony`
-- 
CREATE DATABASE `pony` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pony`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ocupacion`
-- 

CREATE TABLE `ocupacion` (
  `cod_ocup` int(1) default NULL,
  `ocup` varchar(40) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `ocupacion`
-- 

INSERT INTO `ocupacion` VALUES (1, 'Bibliotecaria');
INSERT INTO `ocupacion` VALUES (2, 'Granjera');
INSERT INTO `ocupacion` VALUES (3, 'Cuidar animalitos');
INSERT INTO `ocupacion` VALUES (4, 'Despejar el cielo de Ponyville');
INSERT INTO `ocupacion` VALUES (5, 'Organizadora de fiesta');
INSERT INTO `ocupacion` VALUES (6, 'Diseñadora de moda');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pony`
-- 

CREATE TABLE `pony` (
  `nombre` varchar(20) default NULL,
  `genero` varchar(1) default NULL,
  `elemento` varchar(20) default NULL,
  `cod_raza` int(1) default NULL,
  `cod_ocup` int(1) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `pony`
-- 

INSERT INTO `pony` VALUES ('Twilight Sparkle', 'f', 'Magia', 1, 1);
INSERT INTO `pony` VALUES ('Apple Jack', 'f', 'Honestidad', 2, 2);
INSERT INTO `pony` VALUES ('Flutthershy', 'f', 'Bondad', 3, 3);
INSERT INTO `pony` VALUES ('Rainbow Dash', 'f', 'Lealtad', 3, 4);
INSERT INTO `pony` VALUES ('Pinkie Pie', 'f', 'Diversion', 2, 5);
INSERT INTO `pony` VALUES ('Rarity', 'f', 'Generosidad', 4, 6);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `raza`
-- 

CREATE TABLE `raza` (
  `cod_raza` int(1) default NULL,
  `especie` varchar(40) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `raza`
-- 

INSERT INTO `raza` VALUES (1, 'Alicornio');
INSERT INTO `raza` VALUES (2, 'Pony');
INSERT INTO `raza` VALUES (3, 'Pegaso');
INSERT INTO `raza` VALUES (4, 'Unicornio');
