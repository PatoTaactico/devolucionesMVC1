-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 23:27:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basedev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `ID` int(11) NOT NULL,
  `Nombre_Rol` varchar(100) NOT NULL,
  `Ficha` varchar(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Placa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `devoluciones`
--

INSERT INTO `devoluciones` (`ID`, `Nombre_Rol`, `Ficha`, `Fecha`, `Placa`) VALUES
(2, 'Juan/instructor', '1234567', '0000-00-00', '123456789987'),
(3, 'PedroMartínez/Aprendiz', '3456789', '2025-03-01', '10000000003'),
(4, 'AnaHernández/Instructor', '4567890', '2025-03-03', '10000000004'),
(5, 'LuisRamírez/Aprendiz', '5678901', '2025-03-02', '10000000005'),
(6, 'SofíaTorres/Aprendiz', '6789012', '2025-03-01', '10000000006'),
(7, 'MiguelOrtega/Instructor', '1234567', '2025-03-03', '10000000007'),
(8, 'ElenaCastro/Aprendiz', '2345678', '2025-03-02', '10000000008'),
(9, 'JavierPérez/Aprendiz', '3456789', '2025-03-01', '10000000009'),
(10, 'NataliaRojas/Instructor', '4567890', '2025-03-03', '10000000010'),
(11, 'AndrésSánchez/Aprendiz', '5678901', '2025-03-02', '10000000011'),
(12, 'DanielaFernández/Aprendiz', '6789012', '2025-03-01', '10000000012'),
(13, 'RicardoJiménez/Instructor', '1234567', '2025-03-03', '10000000013'),
(14, 'GabrielaMorales/Aprendiz', '2345678', '2025-03-02', '10000000014'),
(15, 'FernandoVargas/Aprendiz', '3456789', '2025-03-01', '10000000015');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Placa` (`Placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
