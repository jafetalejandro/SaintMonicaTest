-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-07-2020 a las 16:42:35
-- Versión del servidor: 10.1.44-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `CONDOMINIO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AURTORIZADOS`
--

CREATE TABLE `AURTORIZADOS` (
  `id_autorizado` int(2) NOT NULL,
  `atorizado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `AURTORIZADOS`
--

INSERT INTO `AURTORIZADOS` (`id_autorizado`, `atorizado`) VALUES
(1, 'AUTORIZADO'),
(2, 'NO AUTORIZADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CARGOS`
--

CREATE TABLE `CARGOS` (
  `id_cargo` int(2) NOT NULL,
  `cargo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `CARGOS`
--

INSERT INTO `CARGOS` (`id_cargo`, `cargo`) VALUES
(1, 'PRESIDENTE'),
(2, 'VICEPRESIDENTE'),
(3, 'TESORERO'),
(4, 'SECRETARIO'),
(5, 'PRESIDENTE SUPLENTE'),
(6, 'VICEPRESIDENTE SUPLENTE'),
(7, 'TESORERO SUPLENTE'),
(8, 'SECRETARIO SUPLENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CASAS`
--

CREATE TABLE `CASAS` (
  `id_casa` int(2) NOT NULL,
  `etapa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CONDICIONES`
--

CREATE TABLE `CONDICIONES` (
  `id_condicion` int(2) NOT NULL,
  `condicion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `CONDICIONES`
--

INSERT INTO `CONDICIONES` (`id_condicion`, `condicion`) VALUES
(1, 'PROPIETARIO'),
(2, 'COPROPIETARIO'),
(3, 'RESPONSABLE'),
(4, 'EXPROPIETARIO'),
(5, 'EXCOPROPIETARIO'),
(6, 'EXREPONSABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CUOTAS`
--

CREATE TABLE `CUOTAS` (
  `id_cuota` int(10) NOT NULL,
  `id_casa` int(2) NOT NULL,
  `id_tipo` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `vencimiento` date NOT NULL,
  `tasa_cambio` int(15) NOT NULL,
  `monto_dolares` int(5) NOT NULL,
  `monto_bolivares` int(15) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESTADO`
--

CREATE TABLE `ESTADO` (
  `id_estado` int(2) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ESTADO`
--

INSERT INTO `ESTADO` (`id_estado`, `estado`) VALUES
(1, 'PENDIENTE'),
(2, 'PAGADA PRONTO PAGO'),
(3, 'PAGADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESTATUS`
--

CREATE TABLE `ESTATUS` (
  `id_estatu` int(2) NOT NULL,
  `estatu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ESTATUS`
--

INSERT INTO `ESTATUS` (`id_estatu`, `estatu`) VALUES
(0, 'PREACTIVO'),
(1, 'ACTIVO'),
(2, 'CESANTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JUNTA`
--

CREATE TABLE `JUNTA` (
  `id_junta` int(2) NOT NULL,
  `id_persona` int(2) NOT NULL,
  `id_cargo` int(2) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_estatu` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_token`
--

CREATE TABLE `login_token` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PAGO_RECIB_BS`
--

CREATE TABLE `PAGO_RECIB_BS` (
  `id_pago_bs` int(10) NOT NULL,
  `id_casa` int(2) NOT NULL,
  `monto_bs` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `tasa_cambio` int(15) NOT NULL,
  `monto_dl` int(5) NOT NULL,
  `id_forma_pago` int(2) NOT NULL,
  `referencia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PAGO_RECIB_DL`
--

CREATE TABLE `PAGO_RECIB_DL` (
  `id_pago_dl` int(10) NOT NULL,
  `id_casa` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `monto_dl` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `casa_id` int(2) NOT NULL,
  `condicion_id` int(2) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `telefono1` varchar(15) NOT NULL,
  `telefono2` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `modificado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`user_id`, `casa_id`, `condicion_id`, `nombres`, `apellidos`, `telefono1`, `telefono2`, `email`, `modificado`) VALUES
(1, 3, 1, 'jafet', 'montilla', '+58-416-0187706', '+12-123-1234567', 'jafetj@hotmail.com', '2020-07-11 15:39:20'),
(2, 3, 1, 'jafet', 'montilla', '+12-123-1234567', '+12-123-1234567', 'febmerlib@gmail.com', '2020-07-11 12:44:46'),
(3, 0, 0, '', '', '', '', 'oglymmoran@gmail.com', '2020-07-11 12:45:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `REPORTES_PAGO`
--

CREATE TABLE `REPORTES_PAGO` (
  `id_reporte_pago` int(10) NOT NULL,
  `id_casa` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `monto_bs` int(15) NOT NULL,
  `observacion` text NOT NULL,
  `verificado` int(2) NOT NULL,
  `fecha_verificado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SALDO`
--

CREATE TABLE `SALDO` (
  `id_casa` int(2) NOT NULL,
  `saldo` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `statu_id` int(2) NOT NULL,
  `statu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`statu_id`, `statu`) VALUES
(0, 'PREACTIVO'),
(1, 'ACTIVO'),
(2, 'CESANTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TASAS_CAMBIO`
--

CREATE TABLE `TASAS_CAMBIO` (
  `id_tasa` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `tasa_cambio` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPOS`
--

CREATE TABLE `TIPOS` (
  `id_tipo` int(2) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TIPOS`
--

INSERT INTO `TIPOS` (`id_tipo`, `tipo`) VALUES
(1, 'ORDINARIA'),
(2, 'EXTRAORDINARIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `persona_id` int(4) NOT NULL,
  `statu_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `social_id` varchar(100) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `persona_id`, `statu_id`, `name`, `email`, `password`, `social_id`, `picture`, `created`) VALUES
(1, 0, 1, 'jafet montilla', 'jafetj@hotmail.com', '263bce650e68ab4e23f28263760b9fa5', '', '', '2020-07-10 22:22:59'),
(2, 0, 1, 'jafet montilla', 'febmerlib@gmail.com', '263bce650e68ab4e23f28263760b9fa5', '', '', '2020-07-11 12:44:34'),
(3, 0, 0, '', 'oglymmoran@gmail.com', '263bce650e68ab4e23f28263760b9fa5', '', '', '2020-07-11 12:45:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VEHICULOS`
--

CREATE TABLE `VEHICULOS` (
  `id_vehiculo` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `placa` int(11) NOT NULL,
  `id_autorizado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `AURTORIZADOS`
--
ALTER TABLE `AURTORIZADOS`
  ADD PRIMARY KEY (`id_autorizado`),
  ADD UNIQUE KEY `id_autorizado` (`id_autorizado`);

--
-- Indices de la tabla `CARGOS`
--
ALTER TABLE `CARGOS`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `CONDICIONES`
--
ALTER TABLE `CONDICIONES`
  ADD PRIMARY KEY (`id_condicion`);

--
-- Indices de la tabla `ESTADO`
--
ALTER TABLE `ESTADO`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `ESTATUS`
--
ALTER TABLE `ESTATUS`
  ADD PRIMARY KEY (`id_estatu`),
  ADD UNIQUE KEY `id_estatu` (`id_estatu`);

--
-- Indices de la tabla `login_token`
--
ALTER TABLE `login_token`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statu_id`),
  ADD UNIQUE KEY `statu_id` (`statu_id`);

--
-- Indices de la tabla `TIPOS`
--
ALTER TABLE `TIPOS`
  ADD PRIMARY KEY (`id_tipo`),
  ADD UNIQUE KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `login` (`password`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CONDICIONES`
--
ALTER TABLE `CONDICIONES`
  MODIFY `id_condicion` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `login_token`
--
ALTER TABLE `login_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
