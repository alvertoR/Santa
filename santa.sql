-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2020 a las 22:37:41
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `santa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anormalidad`
--

CREATE TABLE `anormalidad` (
  `id` int(11) NOT NULL,
  `idHistoria` int(11) NOT NULL,
  `tipoAnormalidad` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `fechaInsert` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anormalidad`
--

INSERT INTO `anormalidad` (`id`, `idHistoria`, `tipoAnormalidad`, `descripcion`, `fechaInsert`) VALUES
(2, 119, 'pielyanexos', 'se comio un gato y casi se muere', '2020-10-19'),
(3, 129, 'pielAnexos', 'tiene piel', '2020-10-22'),
(4, 129, 'cardiovascular', 'tiene cardio', '2020-10-22'),
(5, 129, 'digestivo', 'es digestivo', '2020-10-22'),
(6, 130, 'pielAnexos', 'La piel y anexos', '2020-11-11'),
(7, 130, 'nervioso', 'Los nervios', '2020-11-11'),
(8, 131, 'pielAnexos', 'La piel y anexos', '2020-11-11'),
(9, 131, 'nervioso', 'Los nervios', '2020-11-11'),
(10, 132, 'pielAnexos', 'La piel y anexos', '2020-11-11'),
(11, 132, 'nervioso', 'Los nervios', '2020-11-11'),
(12, 133, 'pielAnexos', 'La piel y anexos', '2020-11-11'),
(13, 133, 'nervioso', 'Los nervios', '2020-11-11'),
(14, 134, 'pielAnexos', 'la pien y anexos del man', '2020-11-11'),
(15, 134, 'nervioso', 'los nervios del man', '2020-11-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `idExamen` int(11) NOT NULL,
  `idProblema` int(11) NOT NULL,
  `tipoExamen` varchar(100) NOT NULL,
  `fecheExamen` date NOT NULL DEFAULT current_timestamp(),
  `autorizo` varchar(3) NOT NULL,
  `rutaArchivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`idExamen`, `idProblema`, `tipoExamen`, `fecheExamen`, `autorizo`, `rutaArchivo`) VALUES
(1, 2, 'PCR hemoparasitos', '2020-11-11', '0', ''),
(2, 2, 'Presión arterial', '2020-11-11', '0', ''),
(3, 3, 'Ácidos biliares', '2020-11-11', '0', ''),
(4, 3, 'Serología virales', '2020-11-11', '0', ''),
(5, 4, 'PCR hemoparasitos', '2020-11-11', '0', ''),
(6, 4, 'Presión arterial', '2020-11-11', '0', ''),
(7, 5, 'Ácidos biliares', '2020-11-11', '0', ''),
(8, 5, 'Serología virales', '2020-11-11', '0', ''),
(9, 6, 'PCR hemoparasitos', '2020-11-11', '0', ''),
(10, 6, 'Presión arterial', '2020-11-11', '0', ''),
(11, 7, 'Ácidos biliares', '2020-11-11', '0', ''),
(12, 7, 'Serología virales', '2020-11-11', '0', ''),
(13, 8, 'Electrolitos', '2020-11-11', '0', ''),
(14, 8, 'UO/C', '2020-11-11', '0', ''),
(15, 8, 'PO', '2020-11-11', '0', ''),
(16, 9, 'PCR hemoparasitos', '2020-11-11', 'Sí', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `idHistoria` int(11) NOT NULL,
  `IdMascota` int(11) NOT NULL,
  `ccVeterinario` bigint(20) NOT NULL,
  `anamnesis` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signosclinicos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamientoprevio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alimentacion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habitat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoReproductivo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoSanitario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `viajes` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actitud` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamientoExam` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frRespiratoria` int(11) NOT NULL,
  `frCardiaca` int(11) NOT NULL,
  `pulso` int(11) NOT NULL,
  `temperatura` float NOT NULL,
  `condCorporal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracPulmonar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mMucusa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tllc` int(11) NOT NULL,
  `peso` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacionesExamen` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planTerapeutico` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnostico` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamiento` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pronostico` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcionPronostico` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proximoControl` date NOT NULL,
  `fechaInsert` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historiaclinica`
--

INSERT INTO `historiaclinica` (`idHistoria`, `IdMascota`, `ccVeterinario`, `anamnesis`, `signosclinicos`, `tratamientoprevio`, `alimentacion`, `habitat`, `estadoReproductivo`, `estadoSanitario`, `viajes`, `observaciones`, `actitud`, `tratamientoExam`, `frRespiratoria`, `frCardiaca`, `pulso`, `temperatura`, `condCorporal`, `caracPulmonar`, `mMucusa`, `tllc`, `peso`, `observacionesExamen`, `planTerapeutico`, `diagnostico`, `tratamiento`, `pronostico`, `descripcionPronostico`, `proximoControl`, `fechaInsert`) VALUES
(115, 1, 1123533572, 'La anamnesis', 'Los signos clínicos observados', 'El tratamiento previo y su respuesta', 'La alimentación', 'El habitat', 'estadoRe', 'El estado sanitario', 'Los viajes', 'Las observaciones', 'La actitud', 'tratamiento examen', 10, 20, 80, 40.5, '10', '52', '13', 20, '35', '', 'el plan terapeutico', 'el diagnostico', 'el tratamiento', 'el pronostico', 'la descripción del pronostico', '2020-11-27', '2020-10-19'),
(116, 2, 1123533572, 'La anamnesis', 'Los signos clínicos observados', 'El tratamiento previo y su respuesta', 'La alimentación', 'El habitat', 'estadoRe', 'El estado sanitario', 'Los viajes', 'Las observaciones', 'La actitud', 'tratamiento examen', 10, 20, 80, 40.5, '10', '52', '13', 20, '35', '', 'el plan terapeutico', 'el diagnostico', 'el tratamiento', 'el pronostico', 'la descripción del pronostico', '2020-11-27', '2020-10-19'),
(117, 2, 1123533572, 'La anamnesis', 'Los signos clínicos observados', 'El tratamiento previo y su respuesta', 'La alimentación', 'El habitat', 'estadoRe', 'El estado sanitario', 'Los viajes', 'Las observaciones', 'La actitud', 'tratamiento examen', 10, 20, 80, 40.5, '10', '52', '13', 20, '35', '', 'el plan terapeutico', 'el diagnostico', 'el tratamiento', 'el pronostico', 'la descripción del pronostico', '2020-11-27', '2020-10-19'),
(118, 2, 1123533572, 'La anamnesis', 'Los signos clínicos observados', 'El tratamiento previo y su respuesta', 'La alimentación', 'El habitat', 'estadoRe', 'El estado sanitario', 'Los viajes', 'Las observaciones', 'La actitud', 'tratamiento examen', 10, 20, 80, 40.5, '10', '52', '13', 20, '35', '', 'el plan terapeutico', 'el diagnostico', 'el tratamiento', 'el pronostico', 'la descripción del pronostico', '2020-11-27', '2020-10-19'),
(119, 1, 1123533572, 'La anamnesis', 'Los signos clínicos observados', 'El tratamiento previo y su respuesta', 'La alimentación', 'El habitat', 'estadoRe', 'El estado sanitario', 'Los viajes', 'Las observaciones', 'La actitud', 'tratamiento examen', 10, 20, 80, 40.5, '10', '52', '13', 20, '35', '', 'el plan terapeutico', 'el diagnostico', 'el tratamiento', 'el pronostico', 'la descripción del pronostico', '2020-11-27', '2020-10-19'),
(120, 1, 1123533582, 'la anamnesis', 'los signos', '1', '1', '1', '2', 'sanitario', 'viajes', 'observaciones', '1', '1', 1, 2, 5, 5, '4', '5', '1', 2, '10', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento', '2', 'el pronostico', '2020-10-07', '2020-10-19'),
(121, 1, 1123533582, 'la anamnesis', 'los signos', '1', '1', '1', '2', 'sanitario', 'viajes', 'observaciones', '1', '1', 1, 2, 5, 5, '4', '5', '1', 2, '10', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento', '2', 'el pronostico', '2020-10-07', '2020-10-19'),
(122, 1, 1123533582, 'anamnesis', 'signos clínicos', '2', '1', '2', '3', 'estado sanitario', 'viajes', 'observaciones', '1', '2', 12, 13, 14, 15, '5', '6', '13', 20, '12', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento', '2', 'nuestro pronostico', '2020-10-14', '2020-10-19'),
(123, 1, 1123533582, 'anamnesis', 'signos clínicos', '2', '1', '2', '3', 'estado sanitario', 'viajes', 'observaciones', '1', '2', 12, 13, 14, 15, '5', '6', '13', 20, '12', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento', '2', 'nuestro pronostico', '2020-10-14', '2020-10-19'),
(124, 1, 1123533582, 'anamnesis', 'los signos clínicos observados', 'el tratamiento previo y respuesta', '1', '1', '1', 'el estado sanitario', 'viajes', 'observaciones', '1', '1', 10, 10, 10, 10, '10', '10', '10', 10, '10', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento', '1', 'el pronostico', '2020-08-04', '2020-10-19'),
(125, 1, 1123533582, 'anamnesis', 'los signos clínicos observados', 'el tratamiento previo y respuesta', '1', '1', '1', 'el estado sanitario', 'viajes', 'observaciones', '1', '1', 10, 10, 10, 10, '10', '10', '10', 10, '10', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento', '1', 'el pronostico', '2020-08-04', '2020-10-19'),
(126, 2, 1123533582, 'la anamnesis', 'los signos clínicos', 'el tratamiento', '1', '1', '1', 'el estado sanitario', 'el viaje', 'la observacion', '1', '1', 10, 101, 10, 10, '10', '10', '10', 10, '10', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento', '1', 'hola como estás', '2020-10-06', '2020-10-19'),
(127, 6, 1123533582, 'la anamnesis', 'los signos clínicos ', 'el tratamiento previo', '1', '1', '1', 'el estado sanitario', 'los viajes', 'las observaciones', '1', '2', 12, 12, 12, 12, '12', '12', '12', 12, '12', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento ', '1', 'pronostico 1', '2020-10-07', '2020-10-22'),
(128, 6, 1123533582, 'la anamnesis', 'los signos clínicos ', 'el tratamiento previo', '1', '1', '1', 'el estado sanitario', 'los viajes', 'las observaciones', '1', '2', 12, 12, 12, 12, '12', '12', '12', 12, '12', '', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento ', '1', 'pronostico 1', '2020-10-07', '2020-10-22'),
(129, 6, 1123533582, 'la anamnesis', 'los signos clínicos observados', 'el tratamiento previo ', '1', '1', '1', 'el estado sanitario', 'los viajes', 'las observaciones', '1', '1', 10, 101, 10, 10, '10', '10', '10', 10, '10', '', 'el plan terapéutico', 'el diagnóstico final', 'el tratamiento final', '2', 'el pronostico 2', '2020-10-20', '2020-10-22'),
(130, 6, 1123533582, 'La anamnesis', 'Los signos clínicos', 'El tratamiento previo', 'Concentrado', 'Apartamento', 'Castrada', 'El estado sanitario', 'Los viajes', 'Las observaciones de los viajes', 'Hiperestésico', 'Dócil', 10, 10, 10, 10, '0', '0', '0', 10, '10', '', 'El plan terapéutico', 'El diagnóstico', 'el tratemiento', 'Reservado', 'La descripción del pronostico', '2020-11-26', '2020-11-11'),
(131, 6, 1123533582, 'La anamnesis', 'Los signos clínicos', 'El tratamiento previo', 'Concentrado', 'Apartamento', 'Castrada', 'El estado sanitario', 'Los viajes', 'Las observaciones de los viajes', 'Hiperestésico', 'Dócil', 10, 10, 10, 10, '0', '0', '0', 10, '10', '', 'El plan terapéutico', 'El diagnóstico', 'el tratemiento', 'Reservado', 'La descripción del pronostico', '2020-11-26', '2020-11-11'),
(132, 6, 1123533582, 'La anamnesis', 'Los signos clínicos', 'El tratamiento previo', 'Concentrado', 'Apartamento', 'Castrada', 'El estado sanitario', 'Los viajes', 'Las observaciones de los viajes', 'Hiperestésico', 'Dócil', 10, 10, 10, 10, 'Caquético', 'Fuerte', 'Cianóticas', 10, '10', '', 'El plan terapéutico', 'El diagnóstico', 'el tratemiento', 'Bueno', 'La descripción del pronostico', '2020-11-26', '2020-11-11'),
(133, 6, 1123533582, 'La anamnesis', 'Los signos clínicos', 'El tratamiento previo', 'Concentrado', 'Apartamento', 'Castrada', 'El estado sanitario', 'Los viajes', 'Las observaciones de los viajes', 'Hiperestésico', 'Dócil', 10, 10, 10, 10, 'Caquético', 'Fuerte', 'Cianóticas', 10, '10', '', 'El plan terapéutico', 'El diagnóstico', 'el tratemiento', 'Bueno', 'La descripción del pronostico', '2020-11-26', '2020-11-11'),
(134, 6, 1123533582, 'la anamnesis', 'los signos clínicos observados', 'el tratamiento previo y respuesta', 'Concentrado', 'Apartamento', 'Castrada', 'el estado sanitario', 'los viajes', 'las observaciones de los viajes', 'Hiperestésico', 'Dócil', 10, 10, 10, 10, 'Caquético', 'Fuerte', 'Cianóticas', 10, '10', 'las observaciones de autorización de exámenes', 'el plan terapéutico', 'el diagnóstico', 'el tratamiento ', 'Reservado', 'la descripción el pronostico', '2020-11-13', '2020-11-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `ccPropietario` bigint(20) NOT NULL,
  `sexo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raza` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `ccPropietario`, `sexo`, `nombre`, `raza`, `especie`, `color`, `nacimiento`) VALUES
(1, 1123533682, 'M', 'Paquito', 'Pastor', 'Canina', 'negro', '0000-00-00'),
(2, 1123533682, 'M', 'paco', 'Poodle', 'Canina', 'negro con pepas rosas', '0000-00-00'),
(4, 1123533683, 'F', 'Pacolin', 'Pastor pequines', 'Gatuna', 'negro con pepas amarillas', '0000-00-00'),
(5, 1123533683, 'M', 'Coque', 'Persa', 'Gatuna', 'negro con pepas azules', '0000-00-00'),
(6, 1123533682, 'F', 'paco', '2', '1', 'negro', '0000-00-00'),
(7, 1123533000, 'F', 'Pecas', '1', '1', 'Black', '2014-06-13'),
(8, 1123533000, 'F', 'Pito', '2', '1', 'Black', '2020-09-26'),
(9, 1123533683, 'F', 'paco', '1', '1', 'Choclaete', '2020-09-29'),
(10, 1123533683, 'M', 'paco2', '1', '1', 'asds', '2020-08-31'),
(11, 1123533000, 'F', 'adfdaf', '1', '1', 'asas', '2020-09-30'),
(12, 1123533000, 'M', 'adfdafass', '2', '2', 'asasasads', '2020-10-02'),
(13, 1123533000, 'M', 'adfdafass', '2', '3', 'asasasads', '2020-10-02'),
(14, 1123533000, 'M', 'adfdafass', '2', '3', 'asasasads', '2020-10-02'),
(15, 1123533000, 'F', 'paco', '1', '1', 'negro', '2020-09-28'),
(16, 1123533000, 'F', 'paco', '1', '1', 'blanco', '2020-10-14'),
(17, 1123533000, 'F', 'paco', '1', '1', 'negro', '2020-10-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problema`
--

CREATE TABLE `problema` (
  `idProblema` int(11) NOT NULL,
  `idHistoria` int(11) NOT NULL,
  `problema` text NOT NULL,
  `diagnostico` text NOT NULL,
  `autorizo` varchar(3) NOT NULL,
  `fechaInsert` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `problema`
--

INSERT INTO `problema` (`idProblema`, `idHistoria`, `problema`, `diagnostico`, `autorizo`, `fechaInsert`) VALUES
(1, 130, 'problemas 1', 'el diagnostico del problema 1', 'Sí', '2020-11-11'),
(2, 131, 'problemas 1', 'el diagnostico del problema 1', 'Sí', '2020-11-11'),
(3, 131, 'problemas 2', 'el diagnostico del problema 2 ', 'No', '2020-11-11'),
(4, 132, 'problemas 1', 'el diagnostico del problema 1', 'Sí', '2020-11-11'),
(5, 132, 'problemas 2', 'el diagnostico del problema 2 ', 'No', '2020-11-11'),
(6, 133, 'problemas 1', 'el diagnostico del problema 1', 'Sí', '2020-11-11'),
(7, 133, 'problemas 2', 'el diagnostico del problema 2 ', 'No', '2020-11-11'),
(8, 133, 'problemas 3', 'el diagnostico del problema 3', 'Sí', '2020-11-11'),
(9, 134, 'problema 1', 'tiene un problema', 'Sí', '2020-11-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `ccPropietario` bigint(20) NOT NULL,
  `profesion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`ccPropietario`, `profesion`, `nombre`, `direccion`, `telefono`, `email`) VALUES
(1123533000, 'Campesino', 'Camilo', 'Carrera 14 #11 - 60', '3204478954', 'camilo@gmail.com'),
(1123533680, 'Campesino', 'Camilo', 'Carrera 14 #11 - 60', '3204478954', 'camilo@gmail.com'),
(1123533682, 'albañil', 'Jorge Grajales', 'Carrera 14 # 11 - 53', '3204857788', 'Jorge@hotmail.com'),
(1123533683, 'Enfermera', 'Camila Grajales', 'Carrera 14 # 11 - 53', '3204857788', 'Jorge@hotmail.com'),
(1123533777, 'Campesino', 'Camilo', 'Carrera 14 #11 - 60', '3204478954', 'camilo@gmail.com'),
(1123533888, 'Campesino', 'Camilo', 'Carrera 14 #11 - 60', '3204478954', 'camilo@gmail.com'),
(1234790201, 'Abogado', 'Jorge', 'Carrera 14 #11 - 60', '3211114787', 'jakson@gmail.com'),
(111111111111, 'Campesino', 'Yommi', 'Carrera 14 #11 - 60', '3204778568', 'Yommi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `IdTipo` int(11) NOT NULL,
  `tipoUsuario` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`IdTipo`, `tipoUsuario`) VALUES
(1, 'admin'),
(2, 'medico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinario`
--

CREATE TABLE `veterinario` (
  `ccVeterinario` bigint(20) NOT NULL,
  `tipoUsuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registromedico` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `veterinario`
--

INSERT INTO `veterinario` (`ccVeterinario`, `tipoUsuario`, `nombre`, `telefono`, `password`, `registromedico`) VALUES
(0, 2, '', '', '$2y$10$kWRZVwtYHsH2jweKIcdxvOQxYhLVu8MaEvPmUiscERYa91QpmE0ei', ''),
(1111222666, 2, 'camila', '3204588512', '$2y$10$svPc09b7P.WEBFpjMsXFneXv8XKmZg3sN5va8iJM8P.d8GdoZxNlG', '6354asa'),
(1115556987, 2, 'Carmen', '3154789985', '$2y$10$vjDFvWhmIuWeTajiZpbjFObQTkYGoYPYqyNTBoNnBFm0EtVgdd0ke', '144asdsad'),
(1123444879, 2, 'Jonny', '3204581478', '$2y$10$dSpEx8DWLoB3Sf30Tb8C1efUgo3OmCB9qh1sK8jWiZl8/AeTmFkzi', 'maksis2455'),
(1123533572, 1, 'jorge', '3204887599', '$2y$10$5qFC1v/fyXC5y/iUDjS7aO/9/zw4MvwogADPzmxhdmIXxTu4Zk8xO', '145adfñÑlp'),
(1123533582, 1, 'camilo', '3204887599', '$2y$10$dC5h3jap0JUwdBSGWkVpPecj/O4t1Xqd0u0l8GxwlrGIHkOnT.zXu', '145adfñÑlp'),
(1123533655, 2, 'Diego', '3204887599', '$2y$10$5nID6xiPFc5klCeOJy0D0.Da/LO8zKIzapGlhNEAZ9/WKKbcK7Jpu', '145adfñÑlp'),
(1123554977, 2, 'paco', '3204581478', '$2y$10$WOr9aWQWc.oIUSeI5Dxi5uoi/2Nj8JYw.QBCOZvahpWbsEZm4yxPy', 'maksis2455'),
(11114442223, 2, 'jackson', '3204557889', '$2y$10$x9pJQ09P.lApXvPwPr4pLuE4cjpMw/0/OODf9Us.3Jau8C2TCNHA2', 'rtjremter5'),
(112344487773, 2, 'paco', '3204581478', '$2y$10$hu0stbb7rv0A6m.odPQKKOU628Sp7wnti0gLO8tMTs9BIFlFyfgWy', 'maksis2455'),
(112353365885, 2, 'Diego', '3204887599', '$2y$10$SsKiB3G0R1WztJw28iLtz.lA0t7dBaknBnbV5ja3Z8Qqt49pq32mO', '145adfñÑlp'),
(1123533658895, 2, 'Diego', '3204887599', '$2y$10$iinTwCWqFZX.dRAFQkeJEuL9INz9TRa9bTEQClmaEzWuO3rqj0.KS', '145adfñÑlp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anormalidad`
--
ALTER TABLE `anormalidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anormalidad-historia` (`idHistoria`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`idExamen`),
  ADD KEY `fk_problema_examen` (`idProblema`);

--
-- Indices de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`idHistoria`),
  ADD KEY `Veterinario-Historia` (`ccVeterinario`),
  ADD KEY `Mascota-Historia` (`IdMascota`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `Propietario-Mascota` (`ccPropietario`);

--
-- Indices de la tabla `problema`
--
ALTER TABLE `problema`
  ADD PRIMARY KEY (`idProblema`),
  ADD KEY `fk_historia_problema` (`idHistoria`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`ccPropietario`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`IdTipo`);

--
-- Indices de la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`ccVeterinario`),
  ADD KEY `Tipo-Usuario` (`tipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anormalidad`
--
ALTER TABLE `anormalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `idExamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  MODIFY `idHistoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `problema`
--
ALTER TABLE `problema`
  MODIFY `idProblema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `IdTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anormalidad`
--
ALTER TABLE `anormalidad`
  ADD CONSTRAINT `anormalidad-historia` FOREIGN KEY (`idHistoria`) REFERENCES `historiaclinica` (`idHistoria`);

--
-- Filtros para la tabla `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `fk_problema_examen` FOREIGN KEY (`idProblema`) REFERENCES `problema` (`idProblema`);

--
-- Filtros para la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD CONSTRAINT `Mascota-Historia` FOREIGN KEY (`IdMascota`) REFERENCES `mascota` (`idMascota`),
  ADD CONSTRAINT `Veterinario-Historia` FOREIGN KEY (`ccVeterinario`) REFERENCES `veterinario` (`ccVeterinario`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `Propietario-Mascota` FOREIGN KEY (`ccPropietario`) REFERENCES `propietario` (`ccPropietario`);

--
-- Filtros para la tabla `problema`
--
ALTER TABLE `problema`
  ADD CONSTRAINT `fk_historia_problema` FOREIGN KEY (`idHistoria`) REFERENCES `historiaclinica` (`idHistoria`);

--
-- Filtros para la tabla `veterinario`
--
ALTER TABLE `veterinario`
  ADD CONSTRAINT `Tipo-Usuario` FOREIGN KEY (`tipoUsuario`) REFERENCES `tipousuario` (`IdTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
