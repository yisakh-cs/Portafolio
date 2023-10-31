-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 12:43:22
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_empleos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `categoria` varchar(80) NOT NULL,
  `vacantes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_curriculum`
--

CREATE TABLE `tbl_curriculum` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `idUsuario` bigint(3) UNSIGNED NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_experiencias`
--

CREATE TABLE `tbl_experiencias` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `idCurriculum` bigint(20) UNSIGNED NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `fechaInicio` varchar(15) NOT NULL,
  `fechaFinal` varchar(15) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formacionesacademicas`
--

CREATE TABLE `tbl_formacionesacademicas` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `idCurriculum` bigint(3) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  `fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_informacion`
--

CREATE TABLE `tbl_informacion` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `cedula` varchar(40) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ofertas`
--

CREATE TABLE `tbl_ofertas` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `idUsuario` bigint(3) UNSIGNED NOT NULL,
  `idCategoria` bigint(3) UNSIGNED NOT NULL,
  `nombrePuesto` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fechaOferta` varchar(15) NOT NULL,
  `duracionContrato` varchar(50) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `salario` varchar(50) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_postulados`
--

CREATE TABLE `tbl_postulados` (
  `id` bigint(3) NOT NULL,
  `idUsuario` bigint(3) NOT NULL,
  `idOferta` bigint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_requisitos`
--

CREATE TABLE `tbl_requisitos` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `idOferta` bigint(3) UNSIGNED NOT NULL,
  `gradoEstudio` varchar(40) NOT NULL,
  `experiencia` varchar(40) NOT NULL,
  `idioma` varchar(40) NOT NULL,
  `aspectosGenerales` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tbl_curriculum`
--
ALTER TABLE `tbl_curriculum`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idUsuario` (`idUsuario`) USING BTREE;

--
-- Indices de la tabla `tbl_experiencias`
--
ALTER TABLE `tbl_experiencias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idCurriculum` (`idCurriculum`);

--
-- Indices de la tabla `tbl_formacionesacademicas`
--
ALTER TABLE `tbl_formacionesacademicas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idCurriculum` (`idCurriculum`);

--
-- Indices de la tabla `tbl_informacion`
--
ALTER TABLE `tbl_informacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tbl_ofertas`
--
ALTER TABLE `tbl_ofertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idCategoria` (`idCategoria`) USING BTREE,
  ADD KEY `idUsuario` (`idUsuario`) USING BTREE;

--
-- Indices de la tabla `tbl_postulados`
--
ALTER TABLE `tbl_postulados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idOferta` (`idOferta`);

--
-- Indices de la tabla `tbl_requisitos`
--
ALTER TABLE `tbl_requisitos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `idCurriculum` (`idOferta`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_curriculum`
--
ALTER TABLE `tbl_curriculum`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_experiencias`
--
ALTER TABLE `tbl_experiencias`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_formacionesacademicas`
--
ALTER TABLE `tbl_formacionesacademicas`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_informacion`
--
ALTER TABLE `tbl_informacion`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_ofertas`
--
ALTER TABLE `tbl_ofertas`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_postulados`
--
ALTER TABLE `tbl_postulados`
  MODIFY `id` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_requisitos`
--
ALTER TABLE `tbl_requisitos`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_curriculum`
--
ALTER TABLE `tbl_curriculum`
  ADD CONSTRAINT `tbl_curriculum_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbl_informacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_experiencias`
--
ALTER TABLE `tbl_experiencias`
  ADD CONSTRAINT `tbl_experiencias_ibfk_1` FOREIGN KEY (`idCurriculum`) REFERENCES `tbl_curriculum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_formacionesacademicas`
--
ALTER TABLE `tbl_formacionesacademicas`
  ADD CONSTRAINT `tbl_formacionesAcademicas_ibfk_1` FOREIGN KEY (`idCurriculum`) REFERENCES `tbl_curriculum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_ofertas`
--
ALTER TABLE `tbl_ofertas`
  ADD CONSTRAINT `tbl_ofertas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbl_informacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_ofertas_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `tbl_categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_requisitos`
--
ALTER TABLE `tbl_requisitos`
  ADD CONSTRAINT `tbl_requisitos_ibfk_1` FOREIGN KEY (`idOferta`) REFERENCES `tbl_ofertas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
