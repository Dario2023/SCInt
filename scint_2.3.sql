-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2017 a las 23:38:09
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `rela_padre` int(11) DEFAULT NULL,
  `rela_categoria` int(11) NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `arb_ubicacion`
--

INSERT INTO `arb_ubicacion` (`id_ubicacion`, `rela_padre`, `rela_categoria`, `descri`) VALUES
(2, NULL, 1, 'Argentina'),
(3, 2, 2, 'Formosa'),
(4, 3, 3, 'Formosa'),
(5, 4, 4, 'Formosa'),
(6, 3, 3, 'Clorinda'),
(7, 6, 4, 'Laguna Blanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabinter_pers_direc`
--

CREATE TABLE `tabinter_pers_direc` (
  `id_pers_direc` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tabinter_pers_direc`
--

INSERT INTO `tabinter_pers_direc` (`id_pers_direc`, `rela_persona`, `rela_direccion`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabinter_pers_event`
--

CREATE TABLE `tabinter_pers_event` (
  `id_pers_event` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_evento` int(11) NOT NULL,
  `rela_mesa_talle` int(11) NOT NULL,
  `rela_modalidad` int(11) NOT NULL,
  `rela_categoria` int(11) NOT NULL,
  `asistencia` int(11) NOT NULL COMMENT '1 = asistio // 0 = falto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_categoria`
--

CREATE TABLE `tab_categoria` (
  `id_categoria` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `observacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_categ_ubicacion`
--

CREATE TABLE `tab_categ_ubicacion` (
  `id_categoria` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_categ_ubicacion`
--

INSERT INTO `tab_categ_ubicacion` (`id_categoria`, `cod`, `descri`) VALUES
(1, 'PA', 'Pais'),
(2, 'PROV', 'Provincia'),
(3, 'DEPTO', 'Departamento'),
(4, 'LOC', 'Localidad');

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

--
-- Volcado de datos para la tabla `tab_cliente`
--

INSERT INTO `tab_cliente` (`id_cliente`, `rela_persona`, `rela_tipocl`, `fecha_registro`) VALUES
(1, 1, 1, '2017-10-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_contacto`
--

CREATE TABLE `tab_contacto` (
  `id_contacto` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_tipoc` int(11) NOT NULL,
  `valor` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_contacto`
--

INSERT INTO `tab_contacto` (`id_contacto`, `rela_persona`, `rela_tipoc`, `valor`) VALUES
(1, 1, 1, '3704550935');

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

--
-- Volcado de datos para la tabla `tab_direccion`
--

INSERT INTO `tab_direccion` (`id_direccion`, `rela_ubicacion`, `barrio`, `calle`, `altura`) VALUES
(1, 7, 'San Fransisco de Laishi', 'Martin Rodriguez', 2486);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_documento`
--

CREATE TABLE `tab_documento` (
  `id_documento` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `rela_tipod` int(11) NOT NULL,
  `valor` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Estructura de tabla para la tabla `tab_item_evento`
--

CREATE TABLE `tab_item_evento` (
  `id_item_evento` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_modalidad`
--

CREATE TABLE `tab_modalidad` (
  `id_modalidad` int(11) NOT NULL,
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
  `Fecha_Nacimiento` date NOT NULL,
  `sexo` int(11) NOT NULL COMMENT '1 Hombre // 0 mujer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_persona`
--

INSERT INTO `tab_persona` (`id_persona`, `nombre`, `apellido`, `Fecha_Nacimiento`, `sexo`) VALUES
(1, 'Sebastian', 'Gamarra', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tarjeta_nfc`
--

CREATE TABLE `tab_tarjeta_nfc` (
  `id_nfc` int(11) NOT NULL,
  `mac` int(11) NOT NULL,
  `rela_estado_nfc` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipo_cliente`
--

CREATE TABLE `tab_tipo_cliente` (
  `id_tipocl` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_tipo_cliente`
--

INSERT INTO `tab_tipo_cliente` (`id_tipocl`, `cod`, `descri`) VALUES
(1, 'MILL', 'Millonario');

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
(1, 'TEL', 'Telefono'),
(3, 'MAIL', 'Email');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipo_documento`
--

CREATE TABLE `tab_tipo_documento` (
  `id_tipod` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tipo_evento`
--

CREATE TABLE `tab_tipo_evento` (
  `id_tipoe` int(11) NOT NULL,
  `cod` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `descri` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_tipo_evento`
--

INSERT INTO `tab_tipo_evento` (`id_tipoe`, `cod`, `descri`) VALUES
(1, 'PED', 'Pedestrismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_usuario`
--

CREATE TABLE `tab_usuario` (
  `id_usuario` int(11) NOT NULL,
  `rela_persona` int(11) NOT NULL,
  `nickname` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dispositivo` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_usuario`
--

INSERT INTO `tab_usuario` (`id_usuario`, `rela_persona`, `nickname`, `password`, `dispositivo`) VALUES
(1, 1, 'admin', 'admin', 'Notebook-PC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arb_ubicacion`
--
ALTER TABLE `arb_ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD KEY `rela_padre_2` (`rela_padre`),
  ADD KEY `rela_categoria_3` (`rela_categoria`);

--
-- Indices de la tabla `tabinter_pers_direc`
--
ALTER TABLE `tabinter_pers_direc`
  ADD PRIMARY KEY (`id_pers_direc`),
  ADD KEY `rela_persona_2` (`rela_persona`),
  ADD KEY `rela_direccion_2` (`rela_direccion`);

--
-- Indices de la tabla `tabinter_pers_event`
--
ALTER TABLE `tabinter_pers_event`
  ADD PRIMARY KEY (`id_pers_event`),
  ADD KEY `rela_persona` (`rela_persona`),
  ADD KEY `rela_evento_2` (`rela_evento`),
  ADD KEY `rela_mesa` (`rela_mesa_talle`),
  ADD KEY `rela_modalidad` (`rela_modalidad`),
  ADD KEY `rela_categoria` (`rela_categoria`);

--
-- Indices de la tabla `tab_categoria`
--
ALTER TABLE `tab_categoria`
  ADD PRIMARY KEY (`id_categoria`);

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
  ADD KEY `rela_persona_2` (`rela_persona`),
  ADD KEY `rela_tipocl_2` (`rela_tipocl`);

--
-- Indices de la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `rela_persona_2` (`rela_persona`),
  ADD KEY `rela_tipoc_2` (`rela_tipoc`);

--
-- Indices de la tabla `tab_direccion`
--
ALTER TABLE `tab_direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `rela_ubicacion_2` (`rela_ubicacion`);

--
-- Indices de la tabla `tab_documento`
--
ALTER TABLE `tab_documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `rela_persona_2` (`rela_persona`),
  ADD KEY `rela_tipod_2` (`rela_tipod`);

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
  ADD KEY `rela_cliente_2` (`rela_cliente`),
  ADD KEY `rela_tipoe_2` (`rela_tipoe`),
  ADD KEY `rela_direccion_2` (`rela_direccion`);

--
-- Indices de la tabla `tab_item_evento`
--
ALTER TABLE `tab_item_evento`
  ADD PRIMARY KEY (`id_item_evento`);

--
-- Indices de la tabla `tab_modalidad`
--
ALTER TABLE `tab_modalidad`
  ADD PRIMARY KEY (`id_modalidad`);

--
-- Indices de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `tab_tarjeta_nfc`
--
ALTER TABLE `tab_tarjeta_nfc`
  ADD PRIMARY KEY (`id_nfc`),
  ADD KEY `rela_estado_nfc_2` (`rela_estado_nfc`),
  ADD KEY `rela_persona_2` (`rela_persona`);

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
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rela_persona_2` (`rela_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arb_ubicacion`
--
ALTER TABLE `arb_ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tabinter_pers_direc`
--
ALTER TABLE `tabinter_pers_direc`
  MODIFY `id_pers_direc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tabinter_pers_event`
--
ALTER TABLE `tabinter_pers_event`
  MODIFY `id_pers_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_categoria`
--
ALTER TABLE `tab_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_categ_ubicacion`
--
ALTER TABLE `tab_categ_ubicacion`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tab_cliente`
--
ALTER TABLE `tab_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_direccion`
--
ALTER TABLE `tab_direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_documento`
--
ALTER TABLE `tab_documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `tab_item_evento`
--
ALTER TABLE `tab_item_evento`
  MODIFY `id_item_evento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_modalidad`
--
ALTER TABLE `tab_modalidad`
  MODIFY `id_modalidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_tarjeta_nfc`
--
ALTER TABLE `tab_tarjeta_nfc`
  MODIFY `id_nfc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_tipo_cliente`
--
ALTER TABLE `tab_tipo_cliente`
  MODIFY `id_tipocl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_tipo_contacto`
--
ALTER TABLE `tab_tipo_contacto`
  MODIFY `id_tipoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tab_tipo_documento`
--
ALTER TABLE `tab_tipo_documento`
  MODIFY `id_tipod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_tipo_evento`
--
ALTER TABLE `tab_tipo_evento`
  MODIFY `id_tipoe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  ADD CONSTRAINT `tabinter_pers_event_ibfk_3` FOREIGN KEY (`rela_mesa_talle`) REFERENCES `tab_item_evento` (`id_item_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tabinter_pers_event_ibfk_4` FOREIGN KEY (`rela_categoria`) REFERENCES `tab_categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tabinter_pers_event_ibfk_5` FOREIGN KEY (`rela_modalidad`) REFERENCES `tab_modalidad` (`id_modalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `tab_tarjeta_nfc_ibfk_4` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD CONSTRAINT `tab_usuario_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
