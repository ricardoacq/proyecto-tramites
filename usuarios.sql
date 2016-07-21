-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2016 a las 20:13:29
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tramites`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(19) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidop` varchar(50) NOT NULL,
  `apellidom` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fechanac` datetime NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numerocasa` varchar(10) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `cp` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `contraseña`, `nombre`, `apellidop`, `apellidom`, `correo`, `fechanac`, `sexo`, `calle`, `numerocasa`, `colonia`, `cp`, `tipo`, `created_at`, `updated_at`) VALUES
('5hg6f7d8gii338rfm49', '12345', 'Juan', 'Lopez', 'Rodriguez', '', '1970-02-01 00:00:00', 'M', '', '', '', 0, 'Usuario', '2016-07-14 16:49:18', '0000-00-00 00:00:00'),
('HEMJ930302HJCRNL07', '12345', 'Julio Francisco', 'Hernández', 'Manjarrez', '', '1993-03-02 00:00:00', '', 'Cerro de Efrain', '3212', 'Buenos Aires', 80112, 'Administrador', '2016-07-21 18:12:53', '2016-07-22 00:12:53'),
('HEMJ939203HJCRNL08', '12345', 'Julio Negro', 'Con', 'Dedos', 'julionegro@tucola', '1993-02-03 00:00:00', 'M', 'Calle', '1254', 'Babilonia', 80120, NULL, '2016-07-21 18:08:04', '2016-07-21 23:32:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
