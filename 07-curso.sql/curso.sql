
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2024 a las 09:37:40
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
-- Base de datos: `curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(3) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Matemáticas', 'Estudio de los números, formas y patrones.'),
(2, 'Física', 'Ciencia que estudia la materia y la energía.'),
(3, 'Química', 'Ciencia que estudia la composición y propiedades de la materia.'),
(4, 'Biología', 'Ciencia que estudia los seres vivos.'),
(5, 'Historia', 'Estudio de los eventos pasados.'),
(6, 'Geografía', 'Estudio de la superficie de la Tierra y sus características.'),
(7, 'Literatura', 'Estudio de las obras literarias.'),
(8, 'Filosofía', 'Estudio de las cuestiones fundamentales sobre la existencia y el conocimiento.'),
(9, 'Informática', 'Estudio de los sistemas de procesamiento de información.'),
(10, 'Arte', 'Estudio de las diversas formas de expresión artística.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `edad` int(3) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `edad`, `email`) VALUES
(1, 'Juan', 'Pérez', 35, 'Juan.Pérez@example.com'),
(2, 'Ana', 'García', 28, NULL),
(3, 'Carlos', 'Martínez', 42, 'Carlos.Martínez@example.com'),
(4, 'Elena', 'López', 35, 'Elena.López@example.com'),
(5, 'David', 'Rodríguez', 22, NULL),
(6, 'Isabel', 'Fernández', 30, NULL),
(7, 'Javier', 'Pérez', 39, 'Javier.Pérez@example.com'),
(8, 'Laura', 'González', 27, NULL),
(9, 'Olga', 'Hernández', 29, NULL),
(10, 'Pedro', 'Gómez', 33, 'Pedro.Gómez@example.com'),
(11, 'Raquel', 'Díaz', 26, NULL),
(12, 'Sergio', 'Vega', 37, 'Sergio.Vega@example.com'),
(13, 'Teresa', 'Morales', 40, 'Teresa.Morales@example.com'),
(14, 'Ulises', 'Ortega', 23, NULL),
(15, 'Valentina', 'Cruz', 31, 'Valentina.Cruz@example.com'),
(16, 'Walter', 'Alonso', 34, 'Walter.Alonso@example.com'),
(17, 'Ximena', 'Ibáñez', 28, NULL),
(18, 'Yolanda', 'Navarro', 41, 'Yolanda.Navarro@example.com'),
(19, 'Zara', 'Quintero', 30, NULL),
(20, 'Andrés', 'Rojas', 25, NULL),
(21, 'Beatriz', 'Soto', 36, 'Beatriz.Soto@example.com'),
(22, 'César', 'Valdez', 39, 'César.Valdez@example.com'),
(23, 'Daniela', 'Zamora', 27, NULL),
(24, 'Emilio', 'Fuentes', 32, 'Emilio.Fuentes@example.com'),
(25, 'Florencia', 'Lara', 38, 'Florencia.Lara@example.com'),
(26, 'Gabriel', 'Mendoza', 24, NULL),
(27, 'Hugo', 'Pacheco', 35, 'Hugo.Pacheco@example.com'),
(28, 'Inés', 'Reyes', 22, NULL),
(29, 'Joaquín', 'Salgado', 33, 'Joaquín.Salgado@example.com'),
(30, 'Karen', 'Tovar', 29, NULL),
(31, 'Luis', 'Urrutia', 37, 'Luis.Urrutia@example.com'),
(32, 'María', 'Vargas', 26, NULL),
(33, 'Nicolás', 'Wong', 40, 'Nicolás.Wong@example.com'),
(34, 'Olivia', 'Xu', 23, NULL),
(35, 'Pablo', 'Yáñez', 31, 'Pablo.Yáñez@example.com'),
(36, 'Quirino', 'Zaragoza', 38, NULL),
(37, 'Renata', 'Álvarez', 34, NULL),
(38, 'Santiago', 'Bernal', 27, NULL),
(39, 'David', 'Acero', 34, NULL),
(40, 'Juan', 'Pérez', 70, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
curso.sql
Mostrando curso.sql