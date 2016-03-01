-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2016 a las 08:25:42
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_mesde65`
--
CREATE DATABASE IF NOT EXISTS `bbdd_mesde65` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bbdd_mesde65`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion_lat` double NOT NULL,
  `ubicacion_lon` double NOT NULL,
  `id_tipo_actividad` int(2) NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `peticion` tinyint(1) NOT NULL,
  `id_usuario` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `nombre`, `descripcion`, `fecha`, `img`, `ubicacion_lat`, `ubicacion_lon`, `id_tipo_actividad`, `direccion`, `peticion`, `id_usuario`) VALUES
(1, 'Paseo por la montaña', 'Paseo por el pirineo egipcio', '2016-02-26 05:38:00', '', 41.513162, 2.113968, 1, '', 0, 1),
(2, 'Curso cocina', 'Recetas de cocina fáciles y originales: aperitivos, primeros platos, platos principales, postres, recetas saludables, consejos de cocina.', '2016-03-02 09:00:00', 'tallercocina.jpg', 41.348451, 2.1158357, 2, '', 0, 1),
(3, 'Taller patchwork', 'Crea originales diseños con la técnica del patchwork. Crea colchas de patchwork, bolsos, ropa para bebés.', '2016-03-15 10:00:00', 'tapetepoker.jpg', 41.349791, 2.107665, 3, '', 0, 2),
(4, 'Bailes de Salon', ' La actividad consiste en tres clases semanales donde se impartirán distintas modalidades de baile, desde Tango, Rumba, Bailes Latinos y, por supuesto, Pasodoble.', '2016-03-09 10:00:00', 'bailes.jpg', 41.349806, 2.107635, 4, '', 0, 1),
(5, 'Curso ingles', 'Nada mejor que el inglés, que requiere tiempo y dedicación, y además lo podemos luego usar para otras muchas cosas relacionadas con el tiempo libre: viajar, leer, ver películas o conocer gente. ', '2016-03-01 09:00:00', 'ingles.jpg', 41.349911, 2.107528, 5, '', 0, 2),
(6, 'Curso Informática', '	\r\nEn este curso os ayudamos a manejar el correo electrónico, encontrar por Internet una pieza de la máquina de coser o de su coche de toda la vida, reservar entradas de teatro, chatear con personas de vuestra edad que residen en otros lugares… o incluso buscar ofertas de viajes para jubilados', '2016-02-07 11:00:00', 'infor.jpg', 41.349911, 2.107528, 6, '', 0, 1),
(11, 'asd', 'asd', '1212-12-12 09:00:00', '', 41, 41, 0, 'asd', 0, 3),
(12, 'asd', 'fes', '1545-12-12 12:12:00', '', 84, 84, 6, 'sdf', 1, 3),
(13, 'raul', 'asd', '1212-12-12 12:12:00', '', 54, 54, 7, 'adf', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE IF NOT EXISTS `donacion` (
  `id` int(5) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`id`, `cantidad`, `id_usuario`, `fecha`) VALUES
(1, 200, 0, '0000-00-00 00:00:00'),
(2, 3000, 0, '0000-00-00 00:00:00'),
(3, 150, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_actividad`
--

CREATE TABLE IF NOT EXISTS `tipo_actividad` (
  `id` int(2) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_actividad`
--

INSERT INTO `tipo_actividad` (`id`, `nombre`) VALUES
(1, 'Paseo'),
(2, 'Electronica'),
(3, 'Informática'),
(4, 'Manualidades'),
(5, 'Alimentación'),
(6, 'Mecánica'),
(7, 'Compañia'),
(8, 'Deporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trueque`
--

CREATE TABLE IF NOT EXISTS `trueque` (
  `id` int(5) NOT NULL,
  `id_creador` int(3) NOT NULL,
  `id_usuario_realiza` int(3) NOT NULL,
  `valoracion_usuario` decimal(8,2) NOT NULL,
  `id_actividad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(3) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_bin NOT NULL,
  `img` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(75) COLLATE utf8_bin NOT NULL,
  `pass` varchar(50) COLLATE utf8_bin NOT NULL,
  `nivel` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `telefono` int(9) NOT NULL,
  `monedas` int(11) NOT NULL,
  `dni` varchar(9) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `img`, `correo`, `pass`, `nivel`, `activo`, `telefono`, `monedas`, `dni`) VALUES
(1, 'David ', 'Marin Salvador', '5.jpg', 'david.marin@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, 933367898, 0, '33789876A'),
(2, 'Ignasi', 'Romero Sanjuan', '3.jpg', 'ignasi.romero@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1, 654678987, 0, '33567987B'),
(3, 'Armand', 'Gutierrez Arumi', '4.jpg', 'armand.gutierrez@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 1, 634789867, 0, '44567908B'),
(4, 'prueba', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_actividad` (`id_tipo_actividad`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `trueque`
--
ALTER TABLE `trueque`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_creador_2` (`id_creador`,`id_usuario_realiza`),
  ADD KEY `id_actividad` (`id_actividad`),
  ADD KEY `id_creador` (`id_creador`,`id_usuario_realiza`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `trueque`
--
ALTER TABLE `trueque`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `trueque`
--
ALTER TABLE `trueque`
  ADD CONSTRAINT `trueque_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
