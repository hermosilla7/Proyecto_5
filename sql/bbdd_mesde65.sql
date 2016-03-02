-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2016 a las 13:40:10
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

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
  `direccion` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `peticion` tinyint(1) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id`, `nombre`, `descripcion`, `fecha`, `img`, `ubicacion_lat`, `ubicacion_lon`, `id_tipo_actividad`, `direccion`, `peticion`, `id_usuario`, `estado`) VALUES
(1, 'Paseo por la montaña', 'Me ofrezco para dar un paseo por el rio LLobregat.', '2016-04-14 05:38:00', 'riollobregat.jpg', 41.340078, 2.096054, 1, 'Camí Ribera, 6 Hospitalet de LLobregat', 0, 1, 0),
(2, 'Curso cocina', 'Me ofrezco para realizar aprendizaje en recetas de cocina fáciles y originales: aperitivos, primeros platos, platos principales, postres, recetas saludables, consejos de cocina.', '2016-05-19 09:00:00', 'tallercocina.jpg', 41.364519, 2.110524, 5, 'av Josep Tarradellas i Joan nº89 Hospitalet de Llobregat', 0, 1, 0),
(3, 'Taller patchwork', 'Me ofrezco para enseñar originales diseños con la técnica del patchwork. Crea colchas de patchwork, bolsos, ropa para bebés..', '2016-05-19 10:00:00', 'tapetepoker.jpg', 41.356229, 2.11424, 4, 'Av Europan nº164 7º2 Hospitalet de LLobregat', 0, 2, 0),
(4, 'Bailes de Salon', 'Me ofrezco para el aprendizaje de distintas modalidades de baile, desde Tango, Rumba, Bailes Latinos y, por supuesto, Pasodoble.', '2016-05-12 10:00:00', 'bailes.jpg', 41.3747849, 2.1322064, 8, 'C/De Cáceres nº22 Barcelona', 0, 1, 0),
(5, 'Curso ingles', 'Me ofrezco para dar clases de ingles. ', '2016-05-12 09:00:00', 'ingles.jpg', 41.3727298, 2.1284286, 9, 'C/Bacardi nº21-25 Barcelona', 0, 2, 0),
(6, 'Curso Informática', 'Me ofrezco para dar clases de informatica te puedo ayudar  a manejar el correo electrónico, encontrar por Internet una pieza de la máquina de coser o de su coche de toda la vida, reservar entradas de teatro, chatear con personas de vuestra edad que residen en otros lugares… o incluso buscar ofertas de viajes para jubilados', '2016-05-12 11:00:00', 'infor.jpg', 41.3628815, 2.1102299, 3, 'C/Enric Prat de la Riba nº106 Hospitalet de LLobregat', 0, 1, 0),
(7, 'Instalacion home cinema', 'Me ofrezco para enseñar a realizar cualquier instalación de un home cinema.', '2016-06-08 09:00:00', 'electronica1.jpg', 41.3728971, 2.1212168, 2, 'C/Paris nº14 6º1 Hospitalet de LLobregat\r\n', 0, 3, 0),
(8, 'Mantenimiento de un vehículo.', 'Me ofrezco para enseñar como llevar el mantenimiento de un vehículo. ', '2016-07-12 12:12:00', 'mecanica1.jpg', 41.3762342, 2.1390416, 6, 'C/de Premia nº18 ent Barcelona', 0, 3, 0),
(9, 'Compañia', 'Me ofrezco para dar compañia durante un dia a la semana.', '2016-05-18 00:00:00', 'compa.jpg', 41.3726882, 2.1131448, 7, 'C/Torrente Gornal nº 59 Hospitalet de Llobregat', 0, 1, 0),
(10, 'Compañia para ir a correr.', 'Necesito compañia para ir a correr y que me enseñe como debo hacer los estiramientos.', '2016-05-15 09:00:00', 'correr1.jpg', 41.3563355, 2.0857301, 8, 'Carretera Hospitalet nº 137 Cornella de LLobregat', 1, 0, 0),
(11, 'Arreglar pc', 'Necesito a una persona que me ayude arreglar mi pc.', '2016-05-25 12:00:00', 'mipc.jpg', 41.372627, 2.119982, 3, 'Calle Llobregat nº89 3º2 Hospitalet de LLobregat', 1, 0, 1),
(12, 'Coser', 'Necesito que me enseñen a coser.', '2016-05-26 11:00:00', 'coser.jpg', 41.3535911, 2.1082485, 4, 'C/Portugal nº 42 Hospitalet de llobregat', 1, 0, 0),
(13, 'aaa', 'dfdfd', '2016-05-09 00:00:00', 'correr1jpg', 0, 0, 0, '', 1, 0, 0),
(14, 'gggg', 'fdfd', '2016-05-13 09:00:00', 'coser.jpg', 0, 0, 0, '', 1, 0, 0);

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
  `nombre` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `compensacion` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_actividad`
--

INSERT INTO `tipo_actividad` (`id`, `nombre`, `compensacion`) VALUES
(1, 'Paseo', 100),
(2, 'Electronica', 50),
(3, 'Informática', 30),
(4, 'Manualidades', 10),
(5, 'Alimentación', 0),
(6, 'Mecánica', 0),
(7, 'Compañia', 0),
(8, 'Deporte', 0),
(9, 'Idiomas', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `img`, `correo`, `pass`, `nivel`, `activo`, `telefono`, `monedas`, `dni`) VALUES
(1, 'David ', 'Marin Salvador', '5.jpg', 'david.marin@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, 933367898, 0, '33789876A'),
(2, 'Ignasi', 'Romero Sanjuan', '3.jpg', 'ignasi.romero@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1, 654678987, 0, '33567987B'),
(3, 'Armand', 'Gutierrez Arumi', '4.jpg', 'armand.gutierrez@fje.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 1, 634789867, 0, '44567908B'),
(4, 'prueba', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, 0, ''),
(5, 'german', 'luque sanchez', '', 'fasion4@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 1, 0, 0, '');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `trueque`
--
ALTER TABLE `trueque`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
