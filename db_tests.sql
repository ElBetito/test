-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2018 a las 12:30:14
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tests`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `industry_type` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`id`, `name`, `city`, `industry_type`) VALUES
(4, 'Samsonic', 'pleasant', 'J'),
(6, 'Panasung', 'oaktown', 'J'),
(7, 'Samony', 'jackson', 'B'),
(9, 'Orange', 'jackson', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `highachiever`
--

CREATE TABLE `highachiever` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `number` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `cust_id` int(10) NOT NULL,
  `salesperson_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `number`, `order_date`, `cust_id`, `salesperson_id`, `amount`) VALUES
(1, 10, '1996-08-02', 4, 2, 540),
(2, 20, '2000-01-30', 4, 8, 1800),
(3, 30, '1995-07-14', 9, 1, 460),
(4, 40, '1998-01-29', 7, 2, 2400),
(5, 50, '1998-03-02', 6, 7, 600),
(6, 60, '1998-03-02', 6, 7, 720),
(7, 70, '1998-05-06', 9, 7, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salesperson`
--

CREATE TABLE `salesperson` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salesperson`
--

INSERT INTO `salesperson` (`id`, `name`, `age`, `salary`) VALUES
(1, 'Abe', 61, 140000),
(2, 'Bob', 34, 44000),
(5, 'Cris', 61, 140000),
(7, 'Dan', 34, 44000),
(8, 'Ken', 34, 40000),
(11, 'Joe', 57, 115000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(190) NOT NULL,
  `passwords` varchar(190) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `birthdate` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `passwords`, `phone`, `company`, `birthdate`) VALUES
(2, 'beto@gmail.com', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', '1234567890', 'helpy', '09/30/2016'),
(3, 'ingalbertomtzs@gmail.com', 'qwertyuiop', '1122334455', 'vision', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `highachiever`
--
ALTER TABLE `highachiever`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salesperson`
--
ALTER TABLE `salesperson`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `highachiever`
--
ALTER TABLE `highachiever`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `salesperson`
--
ALTER TABLE `salesperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
