-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2021 a las 17:44:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estud` int(11) NOT NULL,
  `nomEstud` varchar(11) NOT NULL,
  `apeEstud` varchar(11) NOT NULL,
  `correoEstud` varchar(20) NOT NULL,
  `telEstud` int(15) NOT NULL,
  `comentEstud` text NOT NULL,
  `clase` varchar(20) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estud`, `nomEstud`, `apeEstud`, `correoEstud`, `telEstud`, `comentEstud`, `clase`, `id_usu`) VALUES
(1, 'Bernardita', 'Janneti', 'berni@yahoo.com.ar', 1134435663, 'Todo bien', 'dinamica', 1),
(2, 'Felix', 'Elias', 'fe@gmail.com', 1123786544, 'No estudio nada', '', 1),
(3, 'Roberto', 'Piazza', 'piazza@hotmai.com', 112345, 'Todo bien', 'mru', 2),
(4, 'Miranda', 'Pritsley', 'mp@gmail.com', 4444444, '', 'optica', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estud`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
