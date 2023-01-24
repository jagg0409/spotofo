-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2022 a las 06:32:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redes_sociales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `red`
--

CREATE TABLE `red` (
  `id2` int(2) NOT NULL,
  `Nombre` varchar(55) NOT NULL,
  `Contraseña` text NOT NULL,
  `Fecha_Nacimiento` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `red`
--

INSERT INTO `red` (`id2`, `Nombre`, `Contraseña`, `Fecha_Nacimiento`) VALUES
(1, 'jagg@', '#434121414', ''),
(2, 'jagg@', '#43412141', ''),
(3, '@juan', '#873921', ''),
(4, '@nico', '#3333', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes sociales`
--

CREATE TABLE `redes sociales` (
  `ID` int(50) NOT NULL,
  `Nombre` varchar(55) NOT NULL,
  `Contraseña` text NOT NULL,
  `Fecha_Nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `redes sociales`
--

INSERT INTO `redes sociales` (`ID`, `Nombre`, `Contraseña`, `Fecha_Nacimiento`) VALUES
(1, 'Camilo', 'gato123', '0000-00-00'),
(2, 'Camilo', 'gato123', '2022-10-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `red`
--
ALTER TABLE `red`
  ADD PRIMARY KEY (`id2`);

--
-- Indices de la tabla `redes sociales`
--
ALTER TABLE `redes sociales`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `red`
--
ALTER TABLE `red`
  MODIFY `id2` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `redes sociales`
--
ALTER TABLE `redes sociales`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
