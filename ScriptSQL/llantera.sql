-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2022 a las 19:43:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `llantera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `colonia` varchar(20) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numExt` varchar(5) NOT NULL,
  `CP` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apellido`, `telefono`, `correo`, `estado`, `municipio`, `ciudad`, `colonia`, `calle`, `numExt`, `CP`) VALUES
(1, 'Angel Ricardo', 'Carrasco Guzman', '9711468791', 'angel.ricardo38@gmail.com', 'Oaxaca', 'Ciudad Ixtepec', 'Ciudad Ixtepec', 'Venustiano Carranza', 'Venustiano Carranza', '10', '70110'),
(2, 'Eduardo Abraham', 'Anastacio Hernandez', '9514567890', 'eduardo.ab@gmail.com', 'Oaxaca', 'Oaxaca de juarez', 'Oaxaca de Juarez', 'Corregidora', 'Corregidora', '4', '71290'),
(3, 'Angel Ricardo', 'Carrasco Guzman', '9717029396', 'angel.ricardo117@gmail.com', 'Oaxaca', 'Ciudad Ixtepec', 'CIUDAD IXTEPEC', 'Venustiano Carranza', 'Venustiano Carranza', '10', '70110'),
(4, 'Angel Ricardo', 'Carrasco Guzman', '9717029396', 'angel.ricardo117@gmail.com', 'Oaxaca', 'Ciudad Ixtepec', 'CIUDAD IXTEPEC', 'Venustiano Carranza', 'Venustiano Carranza', '10', '70110'),
(5, 'Angel Ricardo', 'Carrasco Guzman', '9717029396', 'master@gmail.com', 'Oaxaca', 'Ciudad Ixtepec', 'CIUDAD IXTEPEC', 'Venustiano Carranza', 'Venustiano Carranza', '10', '70110'),
(7, 'Kevin', 'Chagoya', '9512745500', 'kevin.chagoya1@gmail.com', 'Oaxaca', 'Oaxaca de juarez', 'Oaxaca de Juarez', 'La paz', 'La paz', '10', '68153');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` bigint(20) UNSIGNED NOT NULL,
  `idProd` int(11) DEFAULT NULL,
  `idClien` int(11) DEFAULT NULL,
  `idEmple` int(11) DEFAULT NULL,
  `fechaCompra` date DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `idPag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `idProd`, `idClien`, `idEmple`, `fechaCompra`, `cantidad`, `idPag`) VALUES
(1, 1, 1, 1, '2021-08-11', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `apellido`, `telefono`, `correo`) VALUES
(2, 'Angel Ricardo', 'Carrasco Guzman', '9717029396', 'angel.ricardo38@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPago` bigint(20) UNSIGNED NOT NULL,
  `formaPago` varchar(25) NOT NULL,
  `titular` varchar(60) NOT NULL,
  `numTarjeta` varchar(30) NOT NULL,
  `fecha_Exp` varchar(5) NOT NULL,
  `ccv` text NOT NULL,
  `banco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idPago`, `formaPago`, `titular`, `numTarjeta`, `fecha_Exp`, `ccv`, `banco`) VALUES
(1, 'Debito', 'Angel Ricardo', '3456677655', '24/12', '331', 'Bancomer'),
(2, 'Debito', 'Angel Ricardo', '5454545454', '11/23', '345', 'Santander'),
(3, 'Debito', 'Angel Ricardo', '34343434343', '11/24', '234', 'Bancomer'),
(4, 'Debito', 'Angel Ricardo', '43343', '11/24', '234', 'Bancomer'),
(5, 'Debito', 'Ricardo carrasco', '344565656', '11/24', '567', 'Santander'),
(6, 'Debito', 'Ricardo carrasco', '3456789', '12/24', '234', 'Santander'),
(7, 'credito', 'Angel Ricardo Carrasco Guzman', '1234567891234567890', '1123', '345', 'Santander'),
(8, 'debito', 'Angel Ricardo Carrasco Guzman', '1234567891234567', '10/24', '789', 'Santander'),
(9, 'credito', 'Angel Ricardo Carrasco Guzman', '1234567899876543', '08/24', '987', 'Bancomer'),
(10, 'debito', 'Angel Ricardo Carrasco Guzman', '1234456876764567', '23/45', '567', 'Santander');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `rin` char(6) NOT NULL,
  `ancho` varchar(15) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `indiceVel` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `marca`, `modelo`, `rin`, `ancho`, `serie`, `indiceVel`, `stock`, `precio`) VALUES
(4, 'Bridgestone', 'Potenza', 'R17', '205', 'S001', '84W', 50, 1200),
(5, 'Bridgestone', 'Potenza', 'R18', '275', 'RE050 A', '95Y', 35, 1150),
(6, 'Bridgestone', 'Potenza', 'R13', '175', 'RE740', '82f', 30, 1280),
(7, 'Bridgestone', 'Turanza', 'R18', '205', 'T005', '92H', 25, 1300),
(8, 'Bridgestone', 'Turanza', 'R15', '205', 'EL400 02', '90H', 18, 1550),
(9, 'Bridgestone', 'Ecopia', 'R15', '175', 'EP422 PLUS', '84H', 18, 1650),
(10, 'Bridgestone', 'Dueler', 'R16', '225', 'A/T REVO 3', '104T', 35, 1550),
(11, 'Bridgestone', 'Dueler', 'R15', '205', 'H/T 684', '96T', 22, 1350),
(12, 'Bridgestone', 'Dueler', 'R15', '225', 'H/T 689', '105S', 15, 2200),
(13, 'Bridgestone', 'Duravis', 'R16', '235', 'R660', '115/113R', 12, 1950),
(14, 'Firestone', 'Firehawk', 'R13', '205', '900', '86H', 12, 2300),
(15, 'Bridgestone', 'Transforce', 'R15', '106', 'CV', '106/104R', 10, 1855);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productovehiculo`
--

CREATE TABLE `productovehiculo` (
  `idVehi` int(11) DEFAULT NULL,
  `idProduc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productovehiculo`
--

INSERT INTO `productovehiculo` (`idVehi`, `idProduc`) VALUES
(NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `users` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `rol` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idUser`, `users`, `password`, `rol`, `email`) VALUES
(3, 'Abraham11', 'Abraham1', 'Administrador', ''),
(4, 'AngelR117', 'angelr', 'Administrador', ''),
(5, 'Eduardo', '$2y$10$J/8duS2K4Q6DjvWz6HcWMO6zTde9t1HXMjXDhS2RwfhDnMQ3xdcDe', 'Administrador', ''),
(6, 'Angel Ricardo', '$2y$10$69WTXlVRK/3Jxa/wEctnxejer5CqGK4pxaixK4kbm7Wq0Ix4pkYxq', 'cliente', 'angel.ricardo117@gmail.com'),
(7, 'Angel Ricardo', '$2y$10$LTPvZEJ4tJJL2NkzTweKgOoBNcRWcwAqYWa9K2AVolvdv9LMxwKFO', 'cliente', 'angel.ricardo117@gmail.com'),
(8, 'AngelR117', '$2y$10$k9MZ4msIuoFgzoS0lNVbZOjeWc47KsvRaD2VsOffEV3iUYbEONuee', 'administrador', 'angel_ricardo38@hotmail.com'),
(9, 'Angel Ricardo', '$2y$10$9uUhPilMMpBE8ole58MzGO/XNXiGL5hBjyEALWps80t8RrDqdoeEu', 'cliente', 'master@gmail.com'),
(10, 'Angel Ricardo', '$2y$10$22gtC14TAIBc8hBXO0q3geFo/pBmhNkIWEnJpX5JHUGUd0vCAg7TK', 'cliente', 'angel.ricardo117@gmail.com'),
(11, 'Kevin', '$2y$10$2.jGai4jV8RxKwodcljvEOZg.zKb20vFVxItuMWUZpjWs5oGUulC2', 'cliente', 'kevin.chagoya1@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` bigint(20) UNSIGNED NOT NULL,
  `año` varchar(20) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `modelo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `año`, `fabricante`, `modelo`) VALUES
(2, '2020', 'Mazda', 'Sedan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD UNIQUE KEY `idPago` (`idPago`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD UNIQUE KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `idUser` (`idUser`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD UNIQUE KEY `idVehiculo` (`idVehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idPago` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idUser` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
