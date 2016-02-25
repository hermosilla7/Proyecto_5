-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2016 a las 11:34:18
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_mesque65`
--
CREATE DATABASE IF NOT EXISTS `bbdd_mesque65` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bbdd_mesque65`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `plazas` int(3) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion_lat` double NOT NULL,
  `ubicacion_lon` double NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `id_tipo_actividad` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `nombre`, `descripcion`, `plazas`, `fecha_inicio`, `fecha_fin`, `img`, `ubicacion_lat`, `ubicacion_lon`, `estado`, `id_tipo_actividad`) VALUES
(1, 'Paseo por la montaña', 'Paseo por el pirineo egipcio', 30, '2016-02-26 05:38:00', '0000-00-00 00:00:00', '', 41.513162, 2.113968, 0, 1),
(2, 'Curso cocina', 'Recetas de cocina fáciles y originales: aperitivos, primeros platos, platos principales, postres, recetas saludables, consejos de cocina.', 20, '2016-03-02 09:00:00', '2016-03-10 13:00:00', 'tallercocina.jpg', 41.348451, 2.1158357, 1, 2),
(3, 'Taller patchwork', 'Crea originales diseños con la técnica del patchwork. Crea colchas de patchwork, bolsos, ropa para bebés.', 10, '2016-03-15 10:00:00', '2016-03-29 13:00:00', 'tapetepoker.jpg', 41.349791, 2.107665, 1, 3),
(4, 'Bailes de Salon', ' La actividad consiste en tres clases semanales donde se impartirán distintas modalidades de baile, desde Tango, Rumba, Bailes Latinos y, por supuesto, Pasodoble.', 30, '2016-03-09 10:00:00', '2016-03-30 00:00:00', 'bailes.jpg', 41.349806, 2.107635, 2, 4),
(5, 'Curso ingles', 'Nada mejor que el inglés, que requiere tiempo y dedicación, y además lo podemos luego usar para otras muchas cosas relacionadas con el tiempo libre: viajar, leer, ver películas o conocer gente. ', 10, '2016-03-01 09:00:00', '2016-02-29 12:00:00', 'ingles.jpg', 41.349911, 2.107528, 1, 5),
(6, 'Curso Informática', '	\r\nEn este curso os ayudamos a manejar el correo electrónico, encontrar por Internet una pieza de la máquina de coser o de su coche de toda la vida, reservar entradas de teatro, chatear con personas de vuestra edad que residen en otros lugares… o incluso buscar ofertas de viajes para jubilados', 15, '2016-02-07 11:00:00', '2016-02-25 13:00:00', 'infor.jpg', 41.349911, 2.107528, 2, 6),
(7, 'Canta y sé feliz', 'En este curso de canto aprenderás los primeros pasos para cantar.', 20, '2016-03-01 10:00:00', '0000-00-00 00:00:00', 'canta.jpg', 41.349911, 2.107528, 2, 7),
(8, 'Pilates', 'Taller de Pilates es un método de ejercicio y movimiento físico diseñado para estirar, fortalecer y equilibrar el cuerpo. ', 10, '2016-03-13 11:00:00', '2016-03-18 12:00:00', 'pilates.jpg', 41.349911, 2.107528, 2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

CREATE TABLE IF NOT EXISTS `asistente` (
  `id` int(4) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_actividad` int(3) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE IF NOT EXISTS `colaborador` (
  `id` int(3) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_actividad` int(3) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_actividad`
--

CREATE TABLE IF NOT EXISTS `tipo_actividad` (
  `id` int(2) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_actividad`
--

INSERT INTO `tipo_actividad` (`id`, `nombre`) VALUES
(1, 'Paseo');

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
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `img`, `correo`, `pass`, `nivel`, `activo`) VALUES
(1, 'David ', 'Marin Salvador', '5.jpg', 'david.marin@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1),
(2, 'Ignasi', 'Romero Sanjuan', '3.jpg', 'ignasi.romero@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(3, 'Armand', 'Gutierrez Arumi', '4.jpg', 'armand.gutierrez@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistente`
--
ALTER TABLE `asistente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `asistente`
--
ALTER TABLE `asistente`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
