-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2024 a las 23:33:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'Miguel Hurtado', '', 'Aladin22', '12345'),
(2, 'Jorge Ortiz', 'jorge@gmail.com', 'jorgito33', 'elmejor'),
(3, 'Manuela Chavarria Perez', 'manuchavarriaperez@gmail.com', 'Manuchavape26', 'Miguel-1107'),
(4, 'Miguel', 'miguelhurtadopj@gmail.com', 'Ejemplo', '1233455'),
(5, 'Dylin Escorcia', 'escorcia@gmail.com', 'Esco234', '42342j'),
(6, 'Ana Maria', 'ana@gmail.com', 'Ana34', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f09'),
(7, 'Carlos Aristizabal', 'carlos@gmail.com', 'carlitos2', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db'),
(8, 'Raul Castro', 'castro@gmail.com', 'castricol3', '8295fa897dc000a6cfab8ad19c6f3b1026c1f11178e72f9a9f9ac7f90297ad4f948854e016b30b5d476012a23358de9cdfbf542bcb11458b3d33e9a07d4dc808'),
(9, 'Mariana Chavarria', 'mariana@gmail.com', 'Maridin23', '8295fa897dc000a6cfab8ad19c6f3b1026c1f11178e72f9a9f9ac7f90297ad4f948854e016b30b5d476012a23358de9cdfbf542bcb11458b3d33e9a07d4dc808');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
