-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2019 a las 23:00:34
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_servicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_descripcion`) VALUES
(21, 'Electricista'),
(22, 'Plomero'),
(23, 'Gasista'),
(24, 'Cuidado de Personas con Capacidades Diferentes'),
(25, 'Reparación de PC'),
(26, 'Reparación de Celulares'),
(27, 'Reparación de Tablet'),
(28, 'Pintor'),
(29, 'Peluquero/a'),
(30, 'Niñera/o'),
(31, 'Paseador de Perros'),
(32, 'Entrenador de Perros'),
(33, 'Veterinaria a Domicilio'),
(34, 'Cuidado de Personas Mayores'),
(35, 'Profesor Particular'),
(36, 'Limpieza de Hogar'),
(37, 'Guardería de Mascotas'),
(38, 'Reparación de Electrodomésticos '),
(39, 'Instalación de Aire Acondicionado'),
(40, 'Jardinero/a'),
(41, 'Piletero'),
(42, 'Manicura'),
(43, 'Pedicura'),
(44, 'Maquillador/a'),
(45, 'Herrero'),
(46, 'Tapizador'),
(47, 'Enfermera'),
(48, 'Fumigador'),
(49, 'Mensajeria'),
(50, 'Mudanza'),
(51, 'Albañil'),
(52, 'Lavador de autos'),
(53, 'Carpintero'),
(54, 'Cerrajero'),
(55, 'Vidriero'),
(56, 'Modista'),
(57, 'Reparación y colocación de pisos'),
(58, 'Durlero'),
(59, 'Cortinero'),
(60, 'Masajista'),
(61, 'Peluqueria Canina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrataciones`
--

CREATE TABLE `contrataciones` (
  `id_contr` int(11) NOT NULL,
  `id_pub` int(11) NOT NULL,
  `id_usr_comprador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrataciones`
--

INSERT INTO `contrataciones` (`id_contr`, `id_pub`, `id_usr_comprador`) VALUES
(14, 22, 1),
(15, 22, 2),
(39, 29, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_usuarios`
--

CREATE TABLE `historial_usuarios` (
  `hist_usr_id_prov` int(11) NOT NULL,
  `hist_usr_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id_like` int(100) NOT NULL,
  `id_pub_likeado` int(100) NOT NULL,
  `id_usr_likeante` int(100) NOT NULL,
  `num_like` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id_like`, `id_pub_likeado`, `id_usr_likeante`, `num_like`) VALUES
(1, 22, 2, 1),
(2, 22, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones_prov`
--

CREATE TABLE `publicaciones_prov` (
  `pub_id` int(11) NOT NULL,
  `pub_titulo` varchar(50) NOT NULL,
  `pub_descripcion` varchar(1000) NOT NULL,
  `pub_precio` decimal(10,0) NOT NULL,
  `pub_id_categoria` int(11) NOT NULL,
  `pub_id_usuario` int(11) NOT NULL,
  `pub_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicaciones_prov`
--

INSERT INTO `publicaciones_prov` (`pub_id`, `pub_titulo`, `pub_descripcion`, `pub_precio`, `pub_id_categoria`, `pub_id_usuario`, `pub_imagen`) VALUES
(22, 'Profesor PHP', 'Profesor particular php.\r\nSi traes mate y medialuas, mejor.', '500', 35, 1, '38091e6fe0dd4fd94e35fb697adc9cc7.jpg'),
(28, 'Albañil ', 'tareas simples ', '500', 51, 1, '1b6724184f678d3a773f943571508a5e.jpg'),
(29, 'Entrenador de Perros', 'Podemos entrenar a tu perro en tu casa, en la plaza o donde te sientas mas cómodo.', '100', 32, 2, '12e4a0ca40068413de4790b75f75c68c.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_nombre_usuario` varchar(20) NOT NULL,
  `usr_nombre_real` varchar(50) NOT NULL,
  `usr_localidad` varchar(25) NOT NULL,
  `usr_password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usr_imgperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_nombre_usuario`, `usr_nombre_real`, `usr_localidad`, `usr_password`, `email`, `usr_imgperfil`) VALUES
(1, 'pablo', 'Pablo Tilli', 'Vicente Lopez', '123456', 'tillipablo@gmail.com', 0),
(2, 'juan', 'Juan Perez', 'San Fernando', 'juan', 'juanperez@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `contrataciones`
--
ALTER TABLE `contrataciones`
  ADD PRIMARY KEY (`id_contr`),
  ADD KEY `id_pub` (`id_pub`),
  ADD KEY `id_usr_comprador` (`id_usr_comprador`);

--
-- Indices de la tabla `historial_usuarios`
--
ALTER TABLE `historial_usuarios`
  ADD PRIMARY KEY (`hist_usr_id_prov`,`hist_usr_id_usuario`),
  ADD KEY `fav_usr_id_usuario` (`hist_usr_id_usuario`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_usr_likeado` (`id_pub_likeado`,`id_usr_likeante`),
  ADD KEY `id_usr_likeante` (`id_usr_likeante`);

--
-- Indices de la tabla `publicaciones_prov`
--
ALTER TABLE `publicaciones_prov`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `pub_id_categoria` (`pub_id_categoria`),
  ADD KEY `pub_id_usuario` (`pub_id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `contrataciones`
--
ALTER TABLE `contrataciones`
  MODIFY `id_contr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publicaciones_prov`
--
ALTER TABLE `publicaciones_prov`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrataciones`
--
ALTER TABLE `contrataciones`
  ADD CONSTRAINT `contrataciones_ibfk_1` FOREIGN KEY (`id_usr_comprador`) REFERENCES `usuarios` (`usr_id`),
  ADD CONSTRAINT `contrataciones_ibfk_2` FOREIGN KEY (`id_pub`) REFERENCES `publicaciones_prov` (`pub_id`);

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_pub_likeado`) REFERENCES `publicaciones_prov` (`pub_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_usr_likeante`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `publicaciones_prov`
--
ALTER TABLE `publicaciones_prov`
  ADD CONSTRAINT `publicaciones_prov_ibfk_1` FOREIGN KEY (`pub_id_usuario`) REFERENCES `usuarios` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `publicaciones_prov_ibfk_2` FOREIGN KEY (`pub_id_categoria`) REFERENCES `categorias` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
