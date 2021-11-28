-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 05:00:54
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bddelrio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idarticulo` int(11) NOT NULL,
  `CodigoA` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Piezas` int(11) NOT NULL,
  `FechaI` varchar(15) NOT NULL,
  `Porveedor` varchar(25) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idarticulo`, `CodigoA`, `Nombre`, `Piezas`, `FechaI`, `Porveedor`, `Precio`) VALUES
(1001, 5987, 'Sabritas', 50, '12/11/2021', 'Javier Gonzales', 10),
(1002, 8765, 'Coca-cola', 60, '28/11/2021', 'Jose Cedillo', 13),
(1003, 5567, 'Takis', 30, '12/11/2021', 'Sofia Lara', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `ApellidoP` varchar(25) NOT NULL,
  `ApellidoM` varchar(25) NOT NULL,
  `FechaN` varchar(15) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `nombre`, `ApellidoP`, `ApellidoM`, `FechaN`, `curp`, `correo`) VALUES
(101, 'MAYRA ISABEL ', 'AGUIRRE', 'ARREDONDO', '25/10/1998', 'AUAM971120MBCGRY01', 'isabel6886@gmail.com'),
(102, 'NORMA ARACELI', 'MENDOZA', 'CAMACHO', '20/11/1993', 'BAML010312MBCRNRA0', 'normas2347@gmail.com'),
(103, 'CARLOS ALBERTO', 'CONTRERAS', 'BRAVO', '10/10/1999', 'MOAQ990302MBCNRT08', 'carlos2347@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `idsucursal` int(11) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `CPostal` int(6) NOT NULL,
  `telefono` int(11) NOT NULL,
  `horario` varchar(15) NOT NULL,
  `gerente` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idsucursal`, `ciudad`, `ubicacion`, `CPostal`, `telefono`, `horario`, `gerente`) VALUES
(1234, 'Mexicali', 'Calle Pino 7858', 46897, 556768786, '7:00 am-10:00 p', 'Luis Perez'),
(1234, 'Mexicali', 'Calle Roma7899', 23687, 76787980, '6:00 am-10:00 p', 'Sofia Rios'),
(2345, 'Tijuana', 'Calle Almanza 8878', 47890, 77787999, '7:00 am-10:00 p', 'Jose Rodriguez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idsucursal` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `producto` varchar(25) NOT NULL,
  `CantidadP` int(11) NOT NULL,
  `Fecha` varchar(15) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `VentaT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idsucursal`, `idempleado`, `producto`, `CantidadP`, `Fecha`, `Hora`, `VentaT`) VALUES
(1234, 101, 'Sabritas', 3, '27/11/2021', '3:45 pm', 45),
(2345, 102, 'Coca-cola', 2, '21/11/2021', '7:20 am', 30),
(3456, 103, 'Takis', 5, '22/11/2021', '5:34 pm', 65);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idarticulo`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
