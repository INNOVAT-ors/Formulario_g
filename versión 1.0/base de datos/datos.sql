-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2022 a las 02:52:01
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `idCurp` varchar(18) NOT NULL,
  `Nombres` varchar(45) DEFAULT NULL,
  `A_Paterno` varchar(45) DEFAULT NULL,
  `A_Materno` varchar(45) DEFAULT NULL,
  `Celular` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`idCurp`, `Nombres`, `A_Paterno`, `A_Materno`, `Celular`) VALUES
('AAOD850103HGRBCN02', 'Daniel', 'Abarca', 'Ocampo', 4496643456),
('AAPE921018MMSBRV01', 'Evangelina', 'Abarca', 'Peralta', 4494329921),
('BABR591028MMSHRC08', 'Rocio', 'Bahena', 'Barrios', 4491237643),
('BAPA861125HVZZRN01', 'Angel', 'Baeza', 'Perez', 4494783245),
('CABP590428MMSDLL09', 'Paula', 'Cadenas', 'Beltran', 4491137654),
('CAEJ680301HCSBSS03', 'Jesus', 'Caballero', 'Estrada', 4495239003),
('EACJ911024HMSSLN02', 'Juan', 'Escalona', 'Cuellar', 4493348002),
('EIAG631214HMSLGL03', 'Guillermo', 'Elizalde', 'Aguilar', 4492296001),
('FABM770222MMSJNR00', 'Margarita', 'Fajes', 'Buenrostro', 4494567778),
('FEBM660131MPLRLR02', 'Maria', 'Fernandez', 'Balbuena', 4492279865);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idCurp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
