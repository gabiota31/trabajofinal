-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2021 a las 17:44:42
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
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `apellido` varchar(11) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `telefono` int(14) NOT NULL,
  `avatar` varchar(13) NOT NULL,
  `id_estud` int(11) NOT NULL,
  `id_clases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre`, `apellido`, `correo`, `pass`, `telefono`, `avatar`, `id_estud`, `id_clases`) VALUES
(1, 'Gabo', 'Martinez', 'gm@gmail.com', '1234', 888888, 'gm123', 0, 0),
(2, 'Martin', 'Borges', 'mb@hotmail.com', '123456a', 1178765423, '555', 0, 0),
(3, 'Facundo', 'Menea', 'mf@gmail.com', '654321a', 1177654562, '123', 0, 0),
(4, 'Ayelen', 'Vargas', 'ayevargas@ggmail.com', '1029384', 1178655434, '334', 0, 0),
(5, 'MArta', 'Salazar', 'dsaas@gmail.com', 'e12732', 123312, 'marta123', 0, 0),
(6, 'gato', 'pardo', '', '', 0, '', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
