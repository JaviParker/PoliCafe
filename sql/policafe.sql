-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2022 a las 05:33:44
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `policafe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `contraseña`) VALUES
(1, 'lol@gmail.com', 'password'),
(2, '', ''),
(3, 'lol@gmail.com', 'password'),
(4, 'david@gmail.com', '12345'),
(5, 'david@gmail.com', '1234512'),
(6, 'david@gmail.com', '1234512'),
(7, 'david@gmail.com', '1234512'),
(8, '', ''),
(9, 'javi@gmail.com', 'password'),
(10, 'javi@gmail.com', 'password'),
(11, 'dani@gmail.com', 'soygay'),
(12, 'david123@gmail.com', 'david123'),
(13, 'dessenso@gmail.com', 'root');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribuidor`
--

CREATE TABLE `distribuidor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `precio_total` int(20) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `precio_total`, `id_cliente`) VALUES
(1, 100, 12),
(2, NULL, 12),
(3, NULL, 12),
(4, NULL, 12),
(5, NULL, 12),
(6, NULL, 12),
(7, NULL, 12),
(8, NULL, 12),
(9, NULL, 12),
(10, NULL, 12),
(11, NULL, 12),
(12, NULL, 12),
(13, NULL, 12),
(14, NULL, 12),
(15, NULL, 12),
(16, NULL, 12),
(17, NULL, 12),
(18, NULL, 12),
(19, NULL, 12),
(20, NULL, 12),
(21, NULL, 12),
(22, NULL, 12),
(23, NULL, 12),
(24, NULL, 12),
(25, NULL, 12),
(26, NULL, 12),
(27, NULL, 12),
(28, NULL, 12),
(29, NULL, 12),
(30, NULL, 12),
(31, NULL, 12),
(32, NULL, 12),
(33, NULL, 12),
(34, NULL, 12),
(35, NULL, 12),
(36, NULL, 12),
(37, NULL, 12),
(38, NULL, 12),
(39, NULL, 12),
(40, NULL, 12),
(41, NULL, 12),
(42, NULL, 12),
(43, NULL, 12),
(44, NULL, 12),
(45, NULL, 12),
(46, NULL, 12),
(47, NULL, 12),
(48, NULL, 12),
(49, NULL, 12),
(50, NULL, 12),
(51, NULL, 12),
(52, NULL, 12),
(53, NULL, 12),
(54, NULL, 12),
(55, NULL, 12),
(56, NULL, 12),
(57, NULL, 12),
(58, NULL, 12),
(59, NULL, 12),
(60, NULL, 12),
(61, NULL, 12),
(62, NULL, 12),
(63, NULL, 12),
(64, NULL, 12),
(65, NULL, 12),
(66, NULL, 12),
(67, NULL, 12),
(68, NULL, 12),
(69, NULL, 12),
(70, NULL, 12),
(71, NULL, 12),
(72, NULL, 12),
(73, NULL, 12),
(74, NULL, 12),
(75, NULL, 12),
(76, NULL, 12),
(77, NULL, 12),
(78, NULL, 12),
(79, NULL, 12),
(80, NULL, 12),
(81, NULL, 12),
(82, NULL, 12),
(83, NULL, 12),
(84, NULL, 12),
(85, NULL, 12),
(86, NULL, 12),
(87, NULL, 12),
(88, NULL, 12),
(89, NULL, 12),
(90, NULL, 12),
(91, NULL, 12),
(92, NULL, 12),
(93, NULL, 12),
(94, NULL, 12),
(95, NULL, 12),
(96, NULL, 12),
(97, NULL, 12),
(98, NULL, 12),
(99, NULL, 12),
(100, NULL, 12),
(101, NULL, 12),
(102, NULL, 12),
(103, NULL, 12),
(104, NULL, 12),
(105, NULL, 12),
(106, NULL, 12),
(107, NULL, 12),
(108, NULL, 12),
(109, NULL, 12),
(110, NULL, 12),
(111, NULL, 12),
(112, NULL, 12),
(113, NULL, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripción` varchar(100) NOT NULL,
  `precio` int(20) NOT NULL,
  `categoria` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripción`, `precio`, `categoria`) VALUES
(1, 'Hamburgruesa', 'Hamburguesa con papas a la francesa.', 45, 'Comida'),
(2, 'Molletes Sencillos', 'Molletes con queso.', 30, 'Desayunos'),
(3, 'Molletes Especiales', 'Molletes con queso y guiso a eleccion.', 35, 'Especial'),
(4, 'Sincronizada Sencilla', 'Quesadilla de harina con jamon.', 18, 'Comida'),
(5, 'Sincronizada Especial', 'Quesadilla de harina con jamon y guiso a eleccion.', 28, 'Comida'),
(6, 'Burritos', 'Burritos de harina con guiso a eleccion.', 15, 'Comida'),
(7, 'Burrito de fajitas de pollo', 'Burrito de harina con fajitas de pollo hechas al momento.', 28, 'Comida'),
(8, 'Gorditas', 'Gorditas rellenas de guiso a eleccion.', 15, 'Comida'),
(9, 'Tortas', 'Torta de pierna, fajitas de pollo o deshebrada.', 42, 'Comida'),
(10, 'Papas a la francesa', 'Papas a la francesa fritas al momento.', 35, 'Comida'),
(11, 'Nachos', 'Nachos con queso y frijoles.', 35, 'Comida'),
(12, 'Desayunos', 'Desayunos preparados con ingredientes del dia.', 39, 'Desayunos'),
(13, 'Chilaquiles verdes', 'Ricos chilaquiles preparados con salsa verde.', 35, 'Desayunos'),
(14, 'Licuados', 'Licuado de fruta del dia.', 20, 'Bebidas'),
(15, 'Te del Dia', 'Te a disponibilidad de frutas del dia.', 15, 'Bebidas'),
(16, 'Arizona', 'Bebida a base de te de sabores.', 17, 'Bebidas'),
(17, 'Agua mineral Ciel', 'Agua mineralizada.', 17, 'Bebidas'),
(18, 'Jugo de vidrio Jumex', 'Jugo de sabor de preferencia de vidrio.', 17, 'Bebidas'),
(19, 'Fuze Tea', 'Te de Durazno, Limon o Frutos rojos.', 17, 'Bebidas'),
(20, 'Agua de Jamaica', 'Agua fresca hecha a base de jamaica.', 17, 'Bebidas'),
(21, 'Agua de Horchata', 'Bebida hecha a base de arroz y leche.', 17, 'Bebidas'),
(22, 'Agua natural Ciel', 'Agua enbotellada Ciel.', 17, 'Bebidas'),
(23, 'Refrescos de Coca Cola', 'Todos los refrescos de la compañia Coca Cola.', 17, 'Bebidas'),
(24, 'Mazapan', 'Dulce de cacahuate', 5, 'Dulces');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_pedidos`
--

CREATE TABLE `productos_pedidos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `precio` int(20) NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_pedidos`
--

INSERT INTO `productos_pedidos` (`id`, `nombre`, `cantidad`, `precio`, `estatus`, `id_cliente`, `id_pedido`) VALUES
(106, 'Hamburgruesa', 6, 45, 0, 12, 1),
(107, 'Sincronizada Especial', 3, 28, 0, 12, 1),
(110, 'Fuze Tea', 2, 17, 0, 12, 1),
(111, 'Burritos', 2, 15, 0, 12, 1),
(121, 'Agua natural Ciel', 3, 17, 0, 12, 1),
(122, 'Refrescos de Coca Cola', 3, 17, 0, 12, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_pedidos`
--
ALTER TABLE `productos_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `distribuidor`
--
ALTER TABLE `distribuidor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos_pedidos`
--
ALTER TABLE `productos_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `productos_pedidos`
--
ALTER TABLE `productos_pedidos`
  ADD CONSTRAINT `productos_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `productos_pedidos_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
