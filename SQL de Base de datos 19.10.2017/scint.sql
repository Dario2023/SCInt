-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2017 a las 04:58:14
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scint`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arb_ubicacion`
--

CREATE TABLE `arb_ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `rela_padre` int(11) NOT NULL,
  `rela_categoria` int(11) NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabinter_pers_direc`
--

CREATE TABLE `tabinter_pers_direc` (
  `id_pers_direc` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabinter_pers_event`
--

CREATE TABLE `tabinter_pers_event` (
  `id_pers_event` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_evento` int(11) NOT NULL,
  `rela_mesa` int(11) NOT NULL,
  `asistencia` int(11) NOT NULL COMMENT '1 = asistio // 0 = falto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_categ_ubicacion`
--

CREATE TABLE `tab_categ_ubicacion` (
  `id_categoria` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_cliente`
--

CREATE TABLE `tab_cliente` (
  `id_cliente` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_tipocl` int(11) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_contacto`
--

CREATE TABLE `tab_contacto` (
  `id_contacto` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_tipoc` int(11) NOT NULL,
  `valor_cont` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_contacto`
--

INSERT INTO `tab_contacto` (`id_contacto`, `rela_persona`, `rela_tipoc`, `valor_cont`) VALUES
(1, 2, 2, 'juniorjoelccp@gmail.com'),
(3, 1, 2, 'gassstonn@gmail.com'),
(4, 2, 1, '3705008614'),
(5, 1, 1, '3704673490');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_direccion`
--

CREATE TABLE `tab_direccion` (
  `id_direccion` int(11) NOT NULL,
  `rela_ubicacion` int(11) NOT NULL,
  `barrio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `altura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_documento`
--

CREATE TABLE `tab_documento` (
  `id_documento` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_tipod` int(11) NOT NULL,
  `valor_doc` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_documento`
--

INSERT INTO `tab_documento` (`id_documento`, `rela_persona`, `rela_tipod`, `valor_doc`) VALUES
(1, 1, 1, '37911798'),
(9, 2, 1, '95581394'),
(10, 3, 1, '31072642');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_estado_nfc`
--

CREATE TABLE `tab_estado_nfc` (
  `id_estado_nfc` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL COMMENT 'tiene 3 estados: ocupado, libre y baja'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_evento`
--

CREATE TABLE `tab_evento` (
  `id_evento` int(11) NOT NULL,
  `rela_cliente` int(11) NOT NULL,
  `rela_tipoe` int(11) NOT NULL,
  `rela_direccion` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_mesa`
--

CREATE TABLE `tab_mesa` (
  `id_mesa` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_persona`
--

CREATE TABLE `tab_persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` int(11) NOT NULL COMMENT '1 Hombre // 0 mujer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_persona`
--

INSERT INTO `tab_persona` (`id_persona`, `nombre`, `apellido`, `sexo`) VALUES
(1, 'Gaston', 'Schneider', 1),
(2, 'Joel', 'Britez', 1),
(3, 'Dario', 'Aguilera', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_rango`
--

CREATE TABLE `tab_rango` (
  `id_rango` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nivel_importancia` int(11) NOT NULL COMMENT 'calificacion del 1 al 10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tarjeta_nfc`
--

CREATE TABLE `tab_tarjeta_nfc` (
  `id_nfc` int(11) NOT NULL,
  `mac` int(11) NOT NULL,
  `rela_estado_nfc` int(11) NOT NULL,
  `rela_rango` int(11) NOT NULL COMMENT 'Depende del evento, indica el nivel administrativo o social de la persona',
  `rela_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipo_cliente`
--

CREATE TABLE `tab_tipo_cliente` (
  `id_tipocl` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipo_contacto`
--

CREATE TABLE `tab_tipo_contacto` (
  `id_tipoc` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_tipo_contacto`
--

INSERT INTO `tab_tipo_contacto` (`id_tipoc`, `cod`, `descri`) VALUES
(1, 'Cel', 'Celular'),
(2, 'email', 'Correo Electronico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipo_documento`
--

CREATE TABLE `tab_tipo_documento` (
  `id_tipod` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_tipo_documento`
--

INSERT INTO `tab_tipo_documento` (`id_tipod`, `cod`, `descri`) VALUES
(1, 'DNI', 'Documento Nacional de Identificacion'),
(2, 'CUIT', 'Codigo Unico de Identificacion Tributaria'),
(3, 'PAS', 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipo_evento`
--

CREATE TABLE `tab_tipo_evento` (
  `id_tipoe` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `descri` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_usuario`
--

CREATE TABLE `tab_usuario` (
  `id_usuario` int(10) NOT NULL,
  `usu_username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_estado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Nombre de la maquina'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_usuario`
--

INSERT INTO `tab_usuario` (`id_usuario`, `usu_username`, `usu_password`, `usu_estado`) VALUES
(12, 'admin', 'admin', 'ip6-localhost');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arb_ubicacion`
--
ALTER TABLE `arb_ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD UNIQUE KEY `rela_padre` (`rela_padre`),
  ADD UNIQUE KEY `rela_categoria` (`rela_categoria`);

--
-- Indices de la tabla `tabinter_pers_direc`
--
ALTER TABLE `tabinter_pers_direc`
  ADD PRIMARY KEY (`id_pers_direc`),
  ADD UNIQUE KEY `rela_persona` (`rela_persona`),
  ADD UNIQUE KEY `rela_direccion` (`rela_direccion`);

--
-- Indices de la tabla `tabinter_pers_event`
--
ALTER TABLE `tabinter_pers_event`
  ADD PRIMARY KEY (`id_pers_event`),
  ADD UNIQUE KEY `rela_nfc` (`rela_persona`),
  ADD UNIQUE KEY `rela_evento` (`rela_evento`),
  ADD UNIQUE KEY `rela_mesa` (`rela_mesa`);

--
-- Indices de la tabla `tab_categ_ubicacion`
--
ALTER TABLE `tab_categ_ubicacion`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `rela_persona` (`rela_persona`),
  ADD UNIQUE KEY `rela_tipocl` (`rela_tipocl`);

--
-- Indices de la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `rela_tipoc` (`rela_tipoc`) USING BTREE,
  ADD KEY `rela_persona` (`rela_persona`) USING BTREE;

--
-- Indices de la tabla `tab_direccion`
--
ALTER TABLE `tab_direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD UNIQUE KEY `rela_ubicacion` (`rela_ubicacion`);

--
-- Indices de la tabla `tab_documento`
--
ALTER TABLE `tab_documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `rela_tipod` (`rela_tipod`) USING BTREE,
  ADD KEY `rela_persona` (`rela_persona`) USING BTREE;

--
-- Indices de la tabla `tab_estado_nfc`
--
ALTER TABLE `tab_estado_nfc`
  ADD PRIMARY KEY (`id_estado_nfc`);

--
-- Indices de la tabla `tab_evento`
--
ALTER TABLE `tab_evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD UNIQUE KEY `rela_cliente` (`rela_cliente`),
  ADD UNIQUE KEY `rela_tipoe` (`rela_tipoe`),
  ADD UNIQUE KEY `rela_direccion` (`rela_direccion`);

--
-- Indices de la tabla `tab_mesa`
--
ALTER TABLE `tab_mesa`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `tab_rango`
--
ALTER TABLE `tab_rango`
  ADD PRIMARY KEY (`id_rango`);

--
-- Indices de la tabla `tab_tarjeta_nfc`
--
ALTER TABLE `tab_tarjeta_nfc`
  ADD PRIMARY KEY (`id_nfc`),
  ADD UNIQUE KEY `rela_estado_nfc` (`rela_estado_nfc`),
  ADD UNIQUE KEY `rela_rango` (`rela_rango`),
  ADD UNIQUE KEY `rela_persona` (`rela_persona`);

--
-- Indices de la tabla `tab_tipo_cliente`
--
ALTER TABLE `tab_tipo_cliente`
  ADD PRIMARY KEY (`id_tipocl`);

--
-- Indices de la tabla `tab_tipo_contacto`
--
ALTER TABLE `tab_tipo_contacto`
  ADD PRIMARY KEY (`id_tipoc`);

--
-- Indices de la tabla `tab_tipo_documento`
--
ALTER TABLE `tab_tipo_documento`
  ADD PRIMARY KEY (`id_tipod`);

--
-- Indices de la tabla `tab_tipo_evento`
--
ALTER TABLE `tab_tipo_evento`
  ADD PRIMARY KEY (`id_tipoe`);

--
-- Indices de la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arb_ubicacion`
--
ALTER TABLE `arb_ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabinter_pers_direc`
--
ALTER TABLE `tabinter_pers_direc`
  MODIFY `id_pers_direc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabinter_pers_event`
--
ALTER TABLE `tabinter_pers_event`
  MODIFY `id_pers_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_categ_ubicacion`
--
ALTER TABLE `tab_categ_ubicacion`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tab_direccion`
--
ALTER TABLE `tab_direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_documento`
--
ALTER TABLE `tab_documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tab_estado_nfc`
--
ALTER TABLE `tab_estado_nfc`
  MODIFY `id_estado_nfc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_evento`
--
ALTER TABLE `tab_evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_mesa`
--
ALTER TABLE `tab_mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tab_rango`
--
ALTER TABLE `tab_rango`
  MODIFY `id_rango` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_tarjeta_nfc`
--
ALTER TABLE `tab_tarjeta_nfc`
  MODIFY `id_nfc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_tipo_cliente`
--
ALTER TABLE `tab_tipo_cliente`
  MODIFY `id_tipocl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_tipo_contacto`
--
ALTER TABLE `tab_tipo_contacto`
  MODIFY `id_tipoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tab_tipo_documento`
--
ALTER TABLE `tab_tipo_documento`
  MODIFY `id_tipod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arb_ubicacion`
--
ALTER TABLE `arb_ubicacion`
  ADD CONSTRAINT `arb_ubicacion_ibfk_1` FOREIGN KEY (`rela_padre`) REFERENCES `arb_ubicacion` (`id_ubicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `arb_ubicacion_ibfk_2` FOREIGN KEY (`rela_categoria`) REFERENCES `tab_categ_ubicacion` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabinter_pers_direc`
--
ALTER TABLE `tabinter_pers_direc`
  ADD CONSTRAINT `tabinter_pers_direc_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tabinter_pers_direc_ibfk_2` FOREIGN KEY (`rela_direccion`) REFERENCES `tab_direccion` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tabinter_pers_event`
--
ALTER TABLE `tabinter_pers_event`
  ADD CONSTRAINT `tabinter_pers_event_ibfk_1` FOREIGN KEY (`rela_evento`) REFERENCES `tab_evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tabinter_pers_event_ibfk_2` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tabinter_pers_event_ibfk_3` FOREIGN KEY (`rela_mesa`) REFERENCES `tab_mesa` (`id_mesa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  ADD CONSTRAINT `tab_cliente_ibfk_1` FOREIGN KEY (`rela_tipocl`) REFERENCES `tab_tipo_cliente` (`id_tipocl`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tab_cliente_ibfk_2` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  ADD CONSTRAINT `tab_contacto_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tab_contacto_ibfk_2` FOREIGN KEY (`rela_tipoc`) REFERENCES `tab_tipo_contacto` (`id_tipoc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_direccion`
--
ALTER TABLE `tab_direccion`
  ADD CONSTRAINT `tab_direccion_ibfk_1` FOREIGN KEY (`rela_ubicacion`) REFERENCES `arb_ubicacion` (`id_ubicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_documento`
--
ALTER TABLE `tab_documento`
  ADD CONSTRAINT `tab_documento_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tab_documento_ibfk_2` FOREIGN KEY (`rela_tipod`) REFERENCES `tab_tipo_documento` (`id_tipod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_evento`
--
ALTER TABLE `tab_evento`
  ADD CONSTRAINT `tab_evento_ibfk_1` FOREIGN KEY (`rela_cliente`) REFERENCES `tab_cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tab_evento_ibfk_2` FOREIGN KEY (`rela_direccion`) REFERENCES `tab_direccion` (`id_direccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tab_evento_ibfk_3` FOREIGN KEY (`rela_tipoe`) REFERENCES `tab_tipo_evento` (`id_tipoe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_tarjeta_nfc`
--
ALTER TABLE `tab_tarjeta_nfc`
  ADD CONSTRAINT `tab_tarjeta_nfc_ibfk_2` FOREIGN KEY (`rela_estado_nfc`) REFERENCES `tab_estado_nfc` (`id_estado_nfc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tab_tarjeta_nfc_ibfk_3` FOREIGN KEY (`rela_rango`) REFERENCES `tab_rango` (`id_rango`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tab_tarjeta_nfc_ibfk_4` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
