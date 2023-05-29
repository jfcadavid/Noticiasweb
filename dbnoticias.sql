-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2023 a las 07:21:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbnoticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL,
  `comentario` text NOT NULL,
  `imagen` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `titulo`, `fecha`, `comentario`, `imagen`) VALUES
(35, 'Nueve estudiantes del ITM fueron capturados por vender drogas', '2023-04-11 06:45:51', 'Por supuestamente vender estupefacientes dentro de un centro educativo fueron capturados nueve estudiantes en Medellín.\r\n\r\n\r\nEn el operativo, realizado por la Sijín de la Policía y coordinado por un fiscal de la Dirección de Antinacóticos, fueron incautados celulares, cigarrillos de marihuana, memorias USB, tubos plásticos donde presuntamente se guardaban los cigarrillos y máquinas artesanales que servirían para armarlos.\r\n\r\n\r\nEn la acción de las autoridades, según informó la Fiscalía General de la Nación en un comunicado, fue capturado un ciudadano de nacionalidad extranjera dentro del Instituto Técnico Metropolitano (ITM), sede Robledo, que tenía cigarrillos de marihuana que presuntamente vendería dentro de la institución.', 'itm.jpg'),
(36, 'accidente', '2023-04-11 08:35:57', 'un fuerte accidente ocurrió en horas de la mañana en las afueras de la ciudad. \r\nDos muertos.', 'Car_crash_1.jpg'),
(37, 'prueba', '2023-05-02 07:07:32', 'Esto es una prueba', 'esto es una prueba.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `email`, `contraseña`) VALUES
(4, 'juan', 'cadavid', 'juan@gmail.com', '12345'),
(6, 'maria', 'perez', 'maria@gmail.com', '98765'),
(12, 'simon', 'yepez', 'simon@hotmail.com', 'simon'),
(13, 'maicol', 'castaño', 'maciol@gmail.com', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
