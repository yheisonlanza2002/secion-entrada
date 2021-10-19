-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 00:40:02
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
-- Base de datos: `sesiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula_u` int(11) NOT NULL,
  `nombre_u` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_u` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono_u` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion_u` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email_u` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password_u` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo_u` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula_u`, `nombre_u`, `apellido_u`, `telefono_u`, `direccion_u`, `email_u`, `password_u`, `sexo_u`) VALUES
(1004033920, 'yheison', 'lanza', '3202786727', 'acevedo', 'yheslanza@gmail.co', 'yheisom123', 'masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cedula_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004033921;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
