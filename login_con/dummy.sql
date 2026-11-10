-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-11-2026 a las 04:29:25
-- Versión del servidor: 8.4.7
-- Versión de PHP: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dummy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'Alan ', '$2y$10$0kL1UGjnelh34jjff6A4ieEvGAzrdY6OHT0upuIXNRhMGodg9PYeG'),
(2, 'ronaldo', '$2y$10$9J38fgIAsgJCvWijchTF/OoG39NVm/BgK2xD/w0qx8.MGd1RPWJuC'),
(3, 'Tomas', '$2y$10$cS3r8dGMlHPG88NSDOwY4unJ7/rPayefrs8OEV0fUIc05n9/OE0JG'),
(4, 'Juan', '$2y$10$K/oxC9.cw0R9D7RmOeI60usAGttq8cSn0fhr4LX0BBispmGpxfbU6'),
(5, 'Pablo', '$2y$10$LLrmYmNh7ZkGib62uHKnKeo2RhgvA..EqEOpbftj.DdsWC72H48BS'),
(6, 'Jaime', '$2y$10$zLymbHojU1UkoHJkjxZdi.iAlivXulBbmUvMKznAVNOjPzWWM3H7e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
