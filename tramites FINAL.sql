-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2016 a las 02:59:21
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
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `id` int(11) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidop` varchar(20) NOT NULL,
  `apellidom` varchar(20) NOT NULL,
  `fechanacimiento` datetime NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`id`, `curp`, `nombre`, `apellidop`, `apellidom`, `fechanacimiento`, `lugar`, `created_at`, `updated_at`) VALUES
(1, 'HEMJ930302HJCRNL07', 'Yayi', 'De antartida', 'Cromagnon', '1990-06-03 00:00:00', '', '2016-07-20 17:17:05', '2016-07-14 23:40:20'),
(2, 'HEMJ930302HJCRNL07', 'Yayison', 'De antartida', 'Cromagnon', '1990-06-03 00:00:00', '', '2016-07-20 17:17:19', '2016-07-14 23:41:09'),
(3, 'HEMJ930302HJCRNL07', 'barba', 'del flujo', 'grasoso', '1912-12-12 00:00:00', '', '2016-07-20 17:17:29', '2016-07-14 23:44:51'),
(4, 'HEMJ939203HJCRNL09', 'Juan', 'Perez', 'Gonzales', '1990-09-02 00:00:00', 'Su Culo', '2016-07-28 22:03:21', '2016-07-28 23:46:15'),
(5, 'HEMJ930302HJCRNL10', 'Rodrigo', 'Ramirez', 'Del ASDF', '1492-12-12 00:00:00', 'Tu Ano', '2016-07-28 22:03:14', '2016-07-28 23:50:59'),
(6, 'HEMJ930302HJCRNL11', 'Juan Pablo', 'Rivera', 'Montes', '1810-02-03 00:00:00', 'Ayuntamiento', '2016-07-29 05:57:18', '2016-07-29 05:57:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beca`
--

CREATE TABLE `beca` (
  `id` int(11) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `beca` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `beca`
--

INSERT INTO `beca` (`id`, `curp`, `beca`, `created_at`, `updated_at`) VALUES
(1, 'HEMJ930302HJCRNL09', 'T___T', '2016-07-29 05:25:00', '2016-07-29 05:25:00'),
(2, 'HEMJ930302HJCRNL09', 'T___T', '2016-07-29 05:25:40', '2016-07-29 05:25:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE `licencia` (
  `id` int(11) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `licencia`
--

INSERT INTO `licencia` (`id`, `curp`, `created_at`, `updated_at`) VALUES
(1, 'HEMJ930302HJCRNL09', '2016-07-29 00:46:03', '2016-07-29 06:34:18'),
(4, 'HEMJ930302HJCRNL09', '2016-07-29 06:50:21', '2016-07-29 06:50:21'),
(8, 'HEMJ930302HJCRNL09', '2016-07-29 06:55:19', '2016-07-29 06:55:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE `tramites` (
  `id` int(11) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `tramite` varchar(20) NOT NULL,
  `id_tramite` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`id`, `curp`, `tramite`, `id_tramite`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'HEMJ930302HJCRNL07', 'Beca', 1, 'Aprobado', '2016-07-28 18:07:45', '0000-00-00 00:00:00'),
(2, 'HEMJ939203HJCRNL09', 'Acta de nacimiento', 4, 'Pendiente', '2016-07-28 22:51:42', '2016-07-29 04:51:06'),
(3, 'HEMJ930302HJCRNL10', 'Acta de nacimiento', 5, 'Pendiente', '2016-07-28 22:51:52', '2016-07-29 04:51:16'),
(4, 'HEMJ930302HJCRNL09', 'Beca', 2, 'Pendiente', '2016-07-28 23:55:29', '2016-07-29 05:55:04'),
(5, 'HEMJ930302HJCRNL11', 'Acta de nacimiento', 6, 'Pendiente', '2016-07-29 05:57:18', '2016-07-29 05:57:18'),
(6, 'HEMJ930302HJCRNL09', 'Visa', 2, 'Pendiente', '2016-07-29 00:20:10', '2016-07-29 06:19:45'),
(7, 'HEMJ930302HJCRNL09', 'Licencia', 1, 'Aprobado', '2016-07-29 00:46:21', '2016-07-29 06:44:16'),
(9, 'HEMJ930302HJCRNL09', 'Licencia', 4, 'Rechazado', '2016-07-29 00:57:34', '2016-07-29 06:57:34'),
(11, 'HEMJ930302HJCRNL09', 'Licencia', 8, 'Pendiente', '2016-07-29 06:55:20', '2016-07-29 06:55:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `curp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellidop`, `apellidom`, `curp`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julio No Joto', 'No', 'Joto', 'HEMJ930302HJCRNL09', 'juliofhm@hotmail.com', '$2y$10$EnnmohiRH7K/Jehp9ZlM..14MTFkaXBN3YqHc5gpwsmOaB6SL/jli', 'zV9RvBZw3dkiPA37jvfoJkJWMNPgEUarWuS47zOgedknfpnuWxn8lRXrMchZ', '2016-07-27 02:30:04', '2016-07-29 06:58:22');

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
('HEMJ930302HJCRNL07', '12345', 'Julio Francisco', 'Hernández', 'Manjarrez', 'juliofhm@hotmail.com', '1993-03-02 00:00:00', 'M', 'Cerro de Efrain', '3212', 'Buenos Aires', 80112, 'Administrador', '2016-07-24 23:23:03', '2016-07-22 00:12:53'),
('HEMJ939203HJCRNL08', '12345', 'Julio Negro', 'Con', 'Dedos', 'julionegro@tucola.com', '1993-02-03 00:00:00', 'M', 'Calle', '1254', 'Babilonia', 80120, NULL, '2016-07-24 23:23:14', '2016-07-21 23:32:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_beca`
--

CREATE TABLE `usuarios_beca` (
  `id` int(11) NOT NULL,
  `curp_usuario` varchar(19) NOT NULL,
  `beca` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visa`
--

CREATE TABLE `visa` (
  `id` int(11) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visa`
--

INSERT INTO `visa` (`id`, `curp`, `created_at`, `updated_at`) VALUES
(2, 'HEMJ930302HJCRNL09', '2016-07-29 06:15:36', '2016-07-29 06:15:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `beca`
--
ALTER TABLE `beca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `tramites`
--
ALTER TABLE `tramites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_curp_unique` (`curp`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_beca`
--
ALTER TABLE `usuarios_beca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visa`
--
ALTER TABLE `visa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curp` (`curp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `beca`
--
ALTER TABLE `beca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tramites`
--
ALTER TABLE `tramites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios_beca`
--
ALTER TABLE `usuarios_beca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `visa`
--
ALTER TABLE `visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
