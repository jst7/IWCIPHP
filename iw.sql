-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2017 a las 14:13:43
-- Versión del servidor: 5.7.16-log
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `genero` varchar(500) NOT NULL,
  `lanzamiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`id`, `nombre`, `genero`, `lanzamiento`) VALUES
(1, 'yeee', 'malo', '2017-01-04'),
(2, 'Prueba', 'Rock', '2006-01-09'),
(3, 'Prueba', 'Rock', '2006-01-09'),
(4, 'yeee', 'malo', '2017-01-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `genero` varchar(500) NOT NULL,
  `web` varchar(500) DEFAULT NULL,
  `lanzamiento` date DEFAULT NULL,
  `descripcion` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`id`, `nombre`, `genero`, `web`, `lanzamiento`, `descripcion`) VALUES
(1, 'Fran Pereza', 'Pop', 'franperea.com', '2016-08-08', 'Uno muy moñas aunque hay a gente que le gusta'),
(2, 'Juanito', 'Requeton', 'franito-lokito.com', '2010-07-14', 'Cantante español to resulon'),
(3, 'pepe', 'rap', 'lalalala.com', '2017-01-02', 'uno muy falso'),
(6, 'jorge', 'malo', 'lalalala.com', '2017-01-10', 'jiji');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `duracion` int(11) NOT NULL,
  `lanzamiento` date NOT NULL,
  `reproducciones` int(11) NOT NULL,
  `artista` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id`, `nombre`, `duracion`, `lanzamiento`, `reproducciones`, `artista`, `url`, `album`) VALUES
(1, 'Faint', 3, '2006-01-09', 100654, 1, 'LYU-8IFcDPw', 2),
(2, 'in the end', 4, '2006-01-16', 3400, 1, 'eVTXPUF4Oz4', 0),
(5, 'in the endccc', 4, '2006-01-16', 3400, 3, 'eVTXPUF4Oz4', 0),
(6, 'Faint', 3, '2006-01-09', 100654, 3, 'LYU-8IFcDPw', 2),
(7, 'in the end', 4, '2006-01-16', 3400, 3, 'eVTXPUF4Oz4', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listareproducción`
--

CREATE TABLE `listareproducción` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `genero` varchar(500) NOT NULL,
  `lanzamiento` date NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listareproducción`
--

INSERT INTO `listareproducción` (`id`, `nombre`, `genero`, `lanzamiento`, `usuario`) VALUES
(1, 'yeee', 'malo', '2017-01-04', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nacimiento` date NOT NULL,
  `password` varchar(15) NOT NULL,
  `admin` bit(1) NOT NULL DEFAULT b'0',
  `Ciudad` varchar(20) DEFAULT NULL,
  `Calle` varchar(20) DEFAULT NULL,
  `CodPostal` int(10) DEFAULT NULL,
  `Sexo` bit(1) DEFAULT NULL,
  `Nacionalidad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `Apellidos`, `Login`, `email`, `nacimiento`, `password`, `admin`, `Ciudad`, `Calle`, `CodPostal`, `Sexo`, `Nacionalidad`) VALUES
(1, 'jorge', 'segovia', 'jorgest7', 'jorge@iw.com', '1994-01-07', 'jorgesegovia', b'0', NULL, NULL, NULL, NULL, NULL),
(2, 'javier', 'molpeceres', 'jamolpe', 'javier@iw.com', '1993-01-20', 'javiermolpecere', b'0', NULL, NULL, NULL, NULL, NULL),
(3, 'fran', 'macia', 'fmaes', 'fran@iw.com', '1993-01-12', 'franmacia', b'1', NULL, NULL, NULL, NULL, NULL),
(15, 'Juanito', 'Perez Lopez', 'Juanpe', 'juanpe@gmail.com', '2004-05-23', '1234', b'0', 'Torrevieja', 'Anestesia Calle', 2345, b'0', 'Europea'),
(16, 'jorge', 'segoviabbbb', 'jorgeghjk', 'test', '1990-12-09', 'test', b'1', 'elche', 'creu', 3202, b'0', 'español'),
(17, 'jorge', 'segoviabbbb', 'jorgeghjk', 'fghjklkjhg', '1990-12-09', '123456', b'0', 'elche', 'creu', 3202, b'0', 'español');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listareproducción`
--
ALTER TABLE `listareproducción`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
