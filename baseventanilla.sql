-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2019 a las 06:01:46
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baseventanilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridad_ambiental`
--

CREATE TABLE `autoridad_ambiental` (
  `idautoridad_amb` int(11) NOT NULL,
  `nombre_autoridad_amb` varchar(90) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='almacena los nombres de las autoridades ambientales';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caractirizacion_empleado`
--

CREATE TABLE `caractirizacion_empleado` (
  `id` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `num_socios_masculino` int(11) NOT NULL,
  `num_socios_femenino` int(11) NOT NULL,
  `num_socios_vinculados_masculino` int(11) NOT NULL,
  `num_socios_vinculados_femenino` int(11) NOT NULL,
  `num_empleados_masculino` int(11) NOT NULL,
  `num_empleados_femenino` int(11) NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='alamacena la caracterizacion de los empleados de las empresa';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_slider`
--

CREATE TABLE `cms_slider` (
  `id` int(11) NOT NULL,
  `nombre_slider` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='almacena los slider para mostrar en la pagina principal';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactopersona`
--

CREATE TABLE `contactopersona` (
  `idcontacto` int(11) NOT NULL,
  `idpersona` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_contacto` int(1) NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='almacena los datos de contacto de las personas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL COMMENT 'Identificador único del departamento.',
  `nombre` varchar(35) NOT NULL COMMENT 'Nombre descriptivo del departamento.',
  `pais` char(2) NOT NULL COMMENT 'Pais al que pertenece el departamento.',
  `codigo_divipola` varchar(10) NOT NULL DEFAULT '-' COMMENT 'Código asignado por el DANE al departamento (DIVIPOLA).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `pais`, `codigo_divipola`) VALUES
(27, 'CHOCO', 'CO', '27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `identificacion_respresentante` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_razon_social` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `sigla_establecimiento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `latitud` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `longitud` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_municipio` int(11) NOT NULL,
  `vereda` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `num_empleados` int(11) NOT NULL,
  `id_autoridad_ambiental` int(11) NOT NULL,
  `pot` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='almacena información básica de la empresa';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresario_empleado`
--

CREATE TABLE `empresario_empleado` (
  `id` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idpersona` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='almacena los funcionarios o empleados de las empresas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_asociacion`
--

CREATE TABLE `empresas_asociacion` (
  `id` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `tamanio_empresa` int(11) NOT NULL,
  `num_asociados` int(11) NOT NULL,
  `famiempresa` int(11) NOT NULL,
  `asociacion` int(11) NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_registro`
--

CREATE TABLE `estado_registro` (
  `idestado` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `nombreestado` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_app`
--

CREATE TABLE `menu_app` (
  `id` int(11) NOT NULL,
  `nombre` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `menu_espadre` int(11) NOT NULL,
  `controlador` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `icono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Almacena los menu de la app para el administrador';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL COMMENT 'Identificador único del municipio.',
  `nombre` varchar(60) NOT NULL COMMENT 'Nombre descriptivo del municipio.',
  `departamento` int(11) NOT NULL COMMENT 'Departamento al que pertenece el municipio.',
  `codigo_divipola` varchar(10) NOT NULL DEFAULT '-' COMMENT 'Código asignado por el DANE al municipio (DIVIPOLA).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena los diferentes municipios de un departamento.';

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `departamento`, `codigo_divipola`) VALUES
(492, 'ACANDI', 27, '27006'),
(493, 'ALTO BAUDO', 27, '27025'),
(494, 'ATRATO', 27, '27050'),
(495, 'BAGADO', 27, '27073'),
(496, 'BAHIA SOLANO', 27, '27075'),
(497, 'BAJO BAUDO', 27, '27077'),
(498, 'BELEN DE BAJIRA', 27, '27086'),
(499, 'BOJAYA', 27, '27099'),
(500, 'CARMEN DEL DARIEN', 27, '27150'),
(501, 'CERTEGUI', 27, '27160'),
(502, 'CONDOTO', 27, '27205'),
(503, 'EL CANTON DEL SAN PABLO', 27, '27135'),
(504, 'EL CARMEN DE ATRATO', 27, '27245'),
(505, 'EL LITORAL DEL SAN JUAN', 27, '27250'),
(506, 'ISTMINA', 27, '27361'),
(507, 'JURADO', 27, '27372'),
(508, 'LLORO', 27, '27413'),
(509, 'MEDIO ATRATO', 27, '27425'),
(510, 'MEDIO BAUDO', 27, '27430'),
(511, 'MEDIO SAN JUAN', 27, '27450'),
(512, 'NOVITA', 27, '27491'),
(513, 'NUQUI', 27, '27495'),
(514, 'QUIBDO', 27, '27001'),
(515, 'RIO IRO', 27, '27580'),
(516, 'RIO QUITO', 27, '27600'),
(517, 'RIOSUCIO', 27, '27615'),
(518, 'SAN JOSE DEL PALMAR', 27, '27660'),
(519, 'SIPI', 27, '27745'),
(520, 'TADO', 27, '27787'),
(521, 'UNGUIA', 27, '27800'),
(522, 'UNION PANAMERICANA', 27, '27810');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `codigo` char(2) NOT NULL COMMENT 'Código identificador del pais.',
  `nombre` varchar(60) NOT NULL COMMENT 'Nombre descriptivo del pais. ',
  `codigo_alfa_2` varchar(45) DEFAULT NULL,
  `codigo_alfa_3` varchar(45) DEFAULT NULL,
  `codigo_numerico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`codigo`, `nombre`, `codigo_alfa_2`, `codigo_alfa_3`, `codigo_numerico`) VALUES
('CO', 'Colombia', 'CO', 'COL', 170);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_menu`
--

CREATE TABLE `permisos_menu` (
  `id` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Almacena los los permisos a las opciones del menu, segun sea el caso del rol';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tipoidentificacion` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `primernombre` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `segundonombre` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `primerapellido` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `segundoapellido` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entidad` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `idmunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id` int(11) NOT NULL,
  `nombre_rol` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Almacena los roles de los usuarios, se crean unicamente para usar en otra tabla';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE `tipoidentificacion` (
  `id` varchar(2) NOT NULL,
  `nombretipo_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='almacena los tipo de documentos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `identificausuario` int(11) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `idrolusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='almacena los usuarios asociados a la tabla persona';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autoridad_ambiental`
--
ALTER TABLE `autoridad_ambiental`
  ADD PRIMARY KEY (`idautoridad_amb`);

--
-- Indices de la tabla `caractirizacion_empleado`
--
ALTER TABLE `caractirizacion_empleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idempresa` (`idempresa`);

--
-- Indices de la tabla `cms_slider`
--
ALTER TABLE `cms_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactopersona`
--
ALTER TABLE `contactopersona`
  ADD PRIMARY KEY (`idcontacto`),
  ADD KEY `tipo_contacto` (`tipo_contacto`),
  ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_fk1_idx` (`pais`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`),
  ADD KEY `identificacion_respresentante` (`identificacion_respresentante`),
  ADD KEY `cod_municipio` (`cod_municipio`);

--
-- Indices de la tabla `empresario_empleado`
--
ALTER TABLE `empresario_empleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpersona` (`idpersona`),
  ADD KEY `idempresa` (`idempresa`);

--
-- Indices de la tabla `empresas_asociacion`
--
ALTER TABLE `empresas_asociacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idempresa` (`idempresa`);

--
-- Indices de la tabla `estado_registro`
--
ALTER TABLE `estado_registro`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipio_fk1_idx` (`departamento`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `permisos_menu`
--
ALTER TABLE `permisos_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `tipoidentificacion` (`tipoidentificacion`),
  ADD KEY `idmunicipio` (`idmunicipio`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`),
  ADD UNIQUE KEY `identificausuario` (`identificausuario`),
  ADD KEY `idrolusuario` (`idrolusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autoridad_ambiental`
--
ALTER TABLE `autoridad_ambiental`
  MODIFY `idautoridad_amb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `caractirizacion_empleado`
--
ALTER TABLE `caractirizacion_empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cms_slider`
--
ALTER TABLE `cms_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactopersona`
--
ALTER TABLE `contactopersona`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresario_empleado`
--
ALTER TABLE `empresario_empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresas_asociacion`
--
ALTER TABLE `empresas_asociacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos_menu`
--
ALTER TABLE `permisos_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_fk1` FOREIGN KEY (`pais`) REFERENCES `pais` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_fk1` FOREIGN KEY (`departamento`) REFERENCES `departamento` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
