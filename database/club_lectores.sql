-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-12-2022 a las 16:20:35
-- Versión del servidor: 5.7.36
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `club_lectores`
--
CREATE DATABASE IF NOT EXISTS `club_lectores` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `club_lectores`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_games_categories` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id`, `title`, `category_id`, `author`, `active`) VALUES
(1, 'Colmillo Blanco', 3, 'Jack London', 1),
(2, 'La chica con el tatuaje del dragón', 2, 'Stieg Larsson', 1),
(3, 'The Atlantis Gene', 1, 'A.G. Riddle', 1),
(4, 'The Overdue Life of Amy Byler', 4, 'Kelly Harms', 0),
(5, 'Juego de tronos', 5, 'George R. R. Martin y Circe de Madeline Miller', 1),
(8, 'El despertar del leviatán', 1, 'James S. A. Corey', 1),
(9, 'El bosque oscuro', 1, 'Cixin Liu', 1),
(10, 'La última cripta', 3, 'Fernando Gamboa', 1),
(11, 'dsd', 2, 'sdsd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Ciencia ficción', 'Similar a la fantasía, este género explora temas e ideas futuristas o tecnológicas para abordar preguntas científicas \"qué pasaría si\"'),
(2, 'Thriller', 'este género también tiene elementos aterradores, pero su objetivo principal es mantener a su lector en un estado de suspenso hasta la resolución de la historia.'),
(3, 'Aventuras', 'Cualquier novela que se centra en una aventura emprendida por el personaje principal (con o sin ayuda) cae dentro del género de la aventura. '),
(4, 'Romántico', 'Cualquier novela donde la historia principal se centra en una relación romántica cae en esta categoría, que tiene varios subgéneros.'),
(5, 'Fantasía', 'El género de fantasía involucra la construcción del mundo y personajes que son sobrenaturales, mitológicos, mágicos o una combinación de estos.');
(6, 'Programación', 'Aprenderemos las tecnologías de programación web, escalar y mantener proyectos !!!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'prueba', 'prueba', '$2y$10$WpL4T2GARqGgNIedQcAsAOcp41/Nx7qL/jDlV80O.yReEGqC5d1Oy'),
(2, 'admin', 'admin', '$2y$10$VaYQqao.3LqMB4.UTPnVAum4MWFum.3gfi3SU6vrJpeMhWulW6gNS');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `games_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
