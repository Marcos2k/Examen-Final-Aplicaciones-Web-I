-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2015 a las 13:41:02
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `instituto2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
`Id_Alumno` int(11) NOT NULL,
  `Nombre_Alumno` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Id_Alumno`, `Nombre_Alumno`) VALUES
(1, 'Pedro Gonzales'),
(2, 'Dana Gomez'),
(3, 'Mariano Bruera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE IF NOT EXISTS `inscripciones` (
  `Id_Permiso` int(11) NOT NULL,
  `Id_Materia` int(11) NOT NULL,
  `Id_Alumno` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Condicion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`Id_Permiso`, `Id_Materia`, `Id_Alumno`, `Fecha`, `Hora`, `Condicion`) VALUES
(1, 1, 1, '2004-05-05', '09:00:00', 'Regular'),
(2, 1, 2, '2004-05-06', '11:30:00', 'Libre'),
(3, 1, 3, '2004-06-06', '09:00:00', 'Regular'),
(4, 2, 1, '2004-04-06', '09:00:00', 'Regular'),
(5, 2, 2, '2004-04-07', '11:30:00', 'Libre'),
(6, 3, 3, '2004-04-12', '11:30:00', 'Regular'),
(55, 2, 2, '2014-12-12', '09:00:00', 'Libre'),
(67, 1, 1, '2014-12-12', '09:00:00', 'Regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
`Id_Materia` int(11) NOT NULL,
  `Nombre_Materia` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`Id_Materia`, `Nombre_Materia`) VALUES
(1, 'Matematica'),
(2, 'Etica'),
(3, 'Aplicaciones Web I'),
(4, 'Analisis de sistemas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD PRIMARY KEY (`Id_Alumno`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
 ADD PRIMARY KEY (`Id_Permiso`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
 ADD PRIMARY KEY (`Id_Materia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
MODIFY `Id_Alumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
MODIFY `Id_Materia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
