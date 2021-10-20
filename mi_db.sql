-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2021 a las 19:46:36
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lecciones`
--

CREATE TABLE `lecciones` (
  `id` int(255) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `lesson` varchar(50) NOT NULL,
  `p_1` varchar(255) NOT NULL,
  `p_2` varchar(255) NOT NULL,
  `p_3` varchar(255) NOT NULL,
  `p_4` varchar(255) NOT NULL,
  `p_5` varchar(20) NOT NULL,
  `calification` varchar(20) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lecciones`
--

INSERT INTO `lecciones` (`id`, `userName`, `name`, `lastName`, `school`, `course`, `rol`, `unit`, `lesson`, `p_1`, `p_2`, `p_3`, `p_4`, `p_5`, `calification`, `comment`) VALUES
(400, '17579474-3', 'Felipe', 'Flores', '5', 'MEDIO', 'alumno', 'unidad1', 'leccion1', 'dqdqwqwddwq', 'wqwdqwdqw', '13132123312', '123132132312', '5', '70', 'holaaaa'),
(6, '17579474-3', 'Felipe', 'Flores', '5', 'MEDIO', 'alumno', 'unidad1', 'leccion2', 'ffff', 'gfggfgf', 'gfgfgfgf', 'ffff', '2', '70', 'chaooo'),
(401, '11383908-2', 'Maria', 'Paz', '3', 'MEDIO', 'alumno', 'unidad1', 'leccion1', 'fff', 'ffff', 'fff', 'fff', '3', '', ''),
(402, '11383908-2', 'Maria', 'Paz', '3', 'MEDIO', 'alumno', 'unidad1', 'leccion2', 'ttt', 'ttt', 'tt', 'ttt', '1', '', ''),
(403, '17579474-3', 'Felipe', 'Flores', '5', 'MEDIO', 'alumno', 'unidad1', 'leccion3', 'qqq', 'www', 'eee', 'rrrr', '5', '70', 'adfasdsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `userName` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `course` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`userName`, `name`, `lastName`, `password`, `email`, `school`, `course`, `rol`, `active`, `resetToken`, `resetComplete`) VALUES
('10454128-3', 'Andrea', 'Valdebenito', '$2y$10$wCZKADEZ8Mm0hK9kz0.EUOecdSybZWMNAoAHyKOa618e1ai2SXTUy', 'ffelipev2@gmail.com', '5', 'A', 'docente', 'Yes', NULL, 'No'),
('11383908-2', 'Maria', 'Paz', '$2y$10$lrsN4JTGmW1pPHrlicOZ2ec/myndBbZl8bmeJZi97Ak7clj88EeIW', 'clopez2@gmail.com', '3', 'MEDIO', 'alumno', 'Yes', NULL, 'No'),
('15574448-0', 'Cristofer', 'Lopez', '$2y$10$J0NH7zI3xT9GN2SWIeXZteH7tPP7hFsgHsiQ3SHQ9CsldQQ7EeFvC', 'cristofer.lopeza@gmail.com', '5', 'A', 'alumno', 'Yes', NULL, 'No'),
('17579474-3', 'Felipe', 'Flores', '$2y$10$wCZKADEZ8Mm0hK9kz0.EUOecdSybZWMNAoAHyKOa618e1ai2SXTUy', 'ffelipev2@gmail.com', '5', 'MEDIO', 'alumno', 'Yes', NULL, 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lecciones`
--
ALTER TABLE `lecciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lecciones`
--
ALTER TABLE `lecciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
