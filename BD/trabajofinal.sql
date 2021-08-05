-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2021 a las 02:15:11
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
  `id_clase` int(11) NOT NULL,
  `temaClase` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `precioClase` int(5) NOT NULL,
  `pago` varchar(2) NOT NULL,
  `comentClase` text NOT NULL,
  `usu_id` int(11) NOT NULL,
  `estud_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`id_clase`, `temaClase`, `fecha`, `hora`, `precioClase`, `pago`, `comentClase`, `usu_id`, `estud_id`) VALUES
(111, 'MRU', '2021-07-23', '00:00:00', 0, 'no', 'usuarie 1 estudiante 1 clase 1', 1, 11),
(121, 'MRUV', '2021-07-27', '00:00:00', 0, 'si', 'usuarie 1 estudiante 2  la clase 1 ', 1, 12),
(211, 'dinamica', '2021-07-20', '10:01:00', 750, 'no', 'preparar diagrama de cuerpo libre y de leyes de N', 2, 21),
(215, 'mruv', '2021-08-10', '15:30:00', 700, 'si', 'dos horas', 2, 21),
(222, 'Circuitos', '2021-08-10', '17:00:00', 750, 'no', 'llevar modelo', 2, 22),
(231, 'Historia de la cienc', '2021-08-20', '00:00:00', 800, 'no', 'preparar apuntes, confirmar un dia antes', 2, 23),
(233, 'epistemología', '2021-08-23', '09:30:00', 800, 'si', '', 2, 23);

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
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estud`, `nomEstud`, `apeEstud`, `correoEstud`, `telEstud`, `comentEstud`, `usu_id`) VALUES
(11, 'Bernardita', 'Janneti', 'berni@yahoo.com.ar', 1134435663, 'usuarie 1 estudiante 1', 1),
(12, 'Felix', 'Elias', 'fe@gmail.com', 1123786544, 'usuarie 1 estudiante 2', 1),
(21, 'Roberto', 'Piazza', 'piazza@hotmail.com', 11234533, '', 2),
(22, 'Miranda', 'Pritsley ', 'mp@gmail.com', 44444444, 'muy trabajadora', 2),
(23, 'Robin', 'Pluchenko ', 'rp@gmail.com', 3333333, 'por ahora nada', 2),
(24, 'Carlos', 'Miterio', 'cm@gmail.com', 1234564, '', 2),
(71, 'Petra', 'Santa', 'ps@gmail.com', 4444444, 'usuarie 7 estudiante 1', 7),
(72, 'fgh', 'ghf', 'gf', 66666, '', 7);

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
  `avatar` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre`, `apellido`, `correo`, `pass`, `telefono`, `avatar`) VALUES
(1, 'Gabo', 'peluche', 'gp@gmail.com', '1234', 888888, 'gm123'),
(2, 'Martin', 'Borges', 'mb@hotmail.com', '1123', 1178765423, '555'),
(3, 'Facundo', 'Menea', 'mf@gmail.com', '1123', 1177654562, '123'),
(4, 'Ayelen', 'Vargas', 'ayevargas@ggmail.com', '1123', 1178655434, '334'),
(5, 'MArta', 'Salazar', 'dsaas@gmail.com', '1123', 123312, 'marta123'),
(6, 'gato', 'pardo', '', '1123', 0, ''),
(7, 'Tito', 'Cosa', 'tc@gmail.com', '1111', 222222222, 'tc2000'),
(8, 'Pirata', 'veintemil', 'p20000@gmial.com', '12344', 33333333, 'pirata20000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id_clase`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `estud_id` (`estud_id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estud`),
  ADD KEY `usu_id` (`usu_id`);

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
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`estud_id`) REFERENCES `estudiante` (`id_estud`),
  ADD CONSTRAINT `clase_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`id_usu`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`id_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
