-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2021 a las 17:45:04
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
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id_clases` int(11) NOT NULL,
  `temaClase` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `pago` varchar(2) NOT NULL,
  `comentClase` text NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_estud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id_clases`, `temaClase`, `fecha`, `pago`, `comentClase`, `id_usu`, `id_estud`) VALUES
(1, 'MRU', '2021-07-23', 'no', 'hacer tabla', 1, 1),
(2, 'MRUV', '2021-07-27', 'si', 'prepara x', 1, 2),
(3, 'dinamica', '2021-07-20', 'no', 'hla', 2, 3),
(4, 'sada', '2021-07-14', '', '', 2, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id_clases`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `id_clases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
