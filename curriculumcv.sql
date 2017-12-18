-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2017 a las 18:05:52
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curriculumcv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `passad` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `passad`) VALUES
(1, 'alfredo', 'alfredo'),
(2, 'felix', 'felix'),
(3, 'pepe', 'pepe'),
(4, 'miguel', 'miguel'),
(5, 'fran', 'fran');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `alumnoid` int(11) NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `nombreal` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `puntuacion` int(100) DEFAULT NULL,
  `passal` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `validado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE `habilidad` (
  `habilidadid` int(11) NOT NULL,
  `nombreha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `alumnoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idiomaid` int(11) NOT NULL,
  `nombreid` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`idiomaid`, `nombreid`) VALUES
(1, 'ingles'),
(2, 'frances'),
(3, 'italiano'),
(4, 'aleman'),
(5, 'arabe'),
(6, 'ruso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomaalumno`
--

CREATE TABLE `idiomaalumno` (
  `alumnoid` int(11) NOT NULL,
  `idiomaid` int(11) NOT NULL,
  `nivelid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `nivelid` int(11) NOT NULL,
  `nombreni` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`nivelid`, `nombreni`) VALUES
(1, 'a1'),
(2, 'a2'),
(3, 'b1'),
(4, 'b2'),
(5, 'c1'),
(6, 'c2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros`
--

CREATE TABLE `otros` (
  `otrosid` int(11) NOT NULL,
  `nombreot` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `otros`
--

INSERT INTO `otros` (`otrosid`, `nombreot`) VALUES
(1, 'conducir'),
(2, 'incorporacion'),
(3, 'vehiculo'),
(4, 'flexibilidad'),
(5, 'geografica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otrosalumno`
--

CREATE TABLE `otrosalumno` (
  `alumnoid` int(11) NOT NULL,
  `otrosid` int(11) NOT NULL,
  `asignado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `tituloid` int(11) NOT NULL,
  `nombreti` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `centro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechafin` date NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `alumnoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`alumnoid`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  ADD PRIMARY KEY (`habilidadid`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idiomaid`);

--
-- Indices de la tabla `idiomaalumno`
--
ALTER TABLE `idiomaalumno`
  ADD PRIMARY KEY (`alumnoid`,`idiomaid`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`nivelid`);

--
-- Indices de la tabla `otros`
--
ALTER TABLE `otros`
  ADD PRIMARY KEY (`otrosid`);

--
-- Indices de la tabla `otrosalumno`
--
ALTER TABLE `otrosalumno`
  ADD PRIMARY KEY (`alumnoid`,`otrosid`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`tituloid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `alumnoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  MODIFY `habilidadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idiomaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `nivelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `otros`
--
ALTER TABLE `otros`
  MODIFY `otrosid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `tituloid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
