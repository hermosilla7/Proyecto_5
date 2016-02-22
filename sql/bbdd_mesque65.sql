-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2016 a las 12:03:17
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

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
-- Estructura de tabla para la tabla `tbl_actividad`
--

CREATE TABLE IF NOT EXISTS `tbl_actividad` (
  `act_id` int(3) NOT NULL,
  `act_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `act_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `act_plazas` int(3) NOT NULL,
  `act_fecha` datetime NOT NULL,
  `act_ubicacion_lat` float NOT NULL,
  `act_ubicacion_lon` float NOT NULL,
  `tip_id` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_actividad`
--

INSERT INTO `tbl_actividad` (`act_id`, `act_nombre`, `act_descripcion`, `act_plazas`, `act_fecha`, `act_ubicacion_lat`, `act_ubicacion_lon`, `tip_id`) VALUES
(1, 'Paseo por la montaña', 'Paseo por el pirineo egipcio', 30, '0000-00-00 00:00:00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asistente`
--

CREATE TABLE IF NOT EXISTS `tbl_asistente` (
  `asi_id` int(4) NOT NULL,
  `usu_id` int(3) NOT NULL,
  `act_id` int(3) NOT NULL,
  `asi_fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_colaborador`
--

CREATE TABLE IF NOT EXISTS `tbl_colaborador` (
  `col_id` int(3) NOT NULL,
  `usu_id` int(3) NOT NULL,
  `act_id` int(3) NOT NULL,
  `col_fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_actividad`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_actividad` (
  `tip_id` int(2) NOT NULL,
  `tip_nombre` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tipo_actividad`
--

INSERT INTO `tbl_tipo_actividad` (`tip_id`, `tip_nombre`) VALUES
(1, 'Paseo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `usu_id` int(3) NOT NULL,
  `usu_nombre` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `usu_mail` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `usu_passwd` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `usu_nivel` int(1) NOT NULL,
  `usu_imagen` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_mail`, `usu_passwd`, `usu_nivel`, `usu_imagen`) VALUES
(2, 'Raul', 'raul.perez@gmail.com', 'c2f004a05fffa487f826003604b87de1', 2, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  ADD PRIMARY KEY (`act_id`);

--
-- Indices de la tabla `tbl_asistente`
--
ALTER TABLE `tbl_asistente`
  ADD PRIMARY KEY (`asi_id`);

--
-- Indices de la tabla `tbl_colaborador`
--
ALTER TABLE `tbl_colaborador`
  ADD PRIMARY KEY (`col_id`);

--
-- Indices de la tabla `tbl_tipo_actividad`
--
ALTER TABLE `tbl_tipo_actividad`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  MODIFY `act_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_asistente`
--
ALTER TABLE `tbl_asistente`
  MODIFY `asi_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_colaborador`
--
ALTER TABLE `tbl_colaborador`
  MODIFY `col_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_actividad`
--
ALTER TABLE `tbl_tipo_actividad`
  MODIFY `tip_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
