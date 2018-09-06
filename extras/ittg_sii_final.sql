-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-09-2018 a las 22:53:43
-- Versión del servidor: 5.7.22-0ubuntu18.04.1
-- Versión de PHP: 7.1.16-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ittg_sii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_areas`
--

CREATE TABLE `catalogo_areas` (
  `id` int(11) NOT NULL,
  `area` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_areas`
--

INSERT INTO `catalogo_areas` (`id`, `area`) VALUES
(1, 'Ciencias Químicas'),
(2, 'Ingeniería Industrial, Administrativa y Desarrollo Regional'),
(3, 'Ciencias Biológicas'),
(4, 'Ciencias de la Educación'),
(5, 'Ciencias de la Tierra y del Medio Ambiente'),
(6, 'Ingeniería Eléctrica, Electrónica'),
(7, 'Ingeniería Química, Bioquímica, Alimentos, Biotecnología'),
(8, 'Ingeniería Mecánica'),
(9, 'Ciencias de los Materiales'),
(10, 'Ciencias de la Computación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_entregables`
--

CREATE TABLE `catalogo_entregables` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `tipo` enum('ACADEMICO','HUMANO') CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo_entregables`
--

INSERT INTO `catalogo_entregables` (`id`, `descripcion`, `tipo`) VALUES
(1, 'Alumnos de licenciatura (en proceso)', 'HUMANO'),
(2, 'Alumnos de maestria (en proceso)', 'HUMANO'),
(3, 'Alumnos de doctorado (en proceso)', 'HUMANO'),
(4, 'Alumnos de licenciatura (titulados)', 'HUMANO'),
(5, 'Alumnos de maestria (titulados)', 'HUMANO'),
(6, 'Alumnos de doctorado (titulados)', 'HUMANO'),
(7, 'Incorporación de alumnos de licenciatura al proyecto', 'HUMANO'),
(8, 'Artículos científicos en revistas indizadas enviados', 'ACADEMICO'),
(9, 'Artículos científicos en revistas arbitradas enviados', 'ACADEMICO'),
(10, 'Artículos de divulgación enviados', 'ACADEMICO'),
(11, 'Artículos en memorias en congreso enviados', 'ACADEMICO'),
(12, 'Memorias en extenso en congresos', 'ACADEMICO'),
(13, 'Capítulos de libros enviados para revisión', 'ACADEMICO'),
(14, 'Libros enviados para revisión', 'ACADEMICO'),
(15, 'Libros editados y publicados', 'ACADEMICO'),
(16, 'Prototipos enviados para registro', 'ACADEMICO'),
(17, 'Patentes enviadas para registro', 'ACADEMICO'),
(18, 'Paquetes tecnológicos enviados para registro', 'ACADEMICO'),
(19, 'Otro tipo de entregable académico (especifique)', 'ACADEMICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_gastos`
--

CREATE TABLE `catalogo_gastos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `partida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_gastos`
--

INSERT INTO `catalogo_gastos` (`id`, `descripcion`, `partida`) VALUES
(1, 'Materiales y útiles de oficina', 21101),
(2, 'Materiales y útiles de impresión y reproducción', 21201),
(3, 'Materiales y útiles para el procesamiento en equipos y bienes informáticos', 21401),
(4, 'Mantenimiento y conservación de bienes informáticos', 35301),
(5, 'Instalación, reparación y mantenimiento de equipo e instrumental médico y de laboratorio', 35401);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_ies`
--

CREATE TABLE `catalogo_ies` (
  `id` int(11) NOT NULL,
  `ies` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_ies`
--

INSERT INTO `catalogo_ies` (`id`, `ies`) VALUES
(1, 'Instituto Tecnológico de Tuxtla Gutiérrez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_lineas`
--

CREATE TABLE `catalogo_lineas` (
  `id` int(11) NOT NULL,
  `linea` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_lineas`
--

INSERT INTO `catalogo_lineas` (`id`, `linea`) VALUES
(1, 'Desarrollo de Software e Infraestructura de Red'),
(2, 'Robótica, Control Inteligente y Sistemas de percepción'),
(3, 'Tecnologías de Desarrollo Web y Móvil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_pe`
--

CREATE TABLE `catalogo_pe` (
  `id` int(11) NOT NULL,
  `programa` varchar(45) DEFAULT NULL,
  `nivel` enum('Licenciatura','Maestria','Doctorado') DEFAULT NULL,
  `actreditado_habilitado` tinyint(1) DEFAULT NULL,
  `pnpc` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_pe`
--

INSERT INTO `catalogo_pe` (`id`, `programa`, `nivel`, `actreditado_habilitado`, `pnpc`) VALUES
(1, 'Ingenieria en Sistemas Computacionales', 'Licenciatura', 1, 0),
(2, 'Maestria en Mecatronica', 'Maestria', 1, 0),
(3, 'Ingeniería en Electronicia', 'Licenciatura', 1, 0),
(4, 'Doctorado en Alimentos', 'Doctorado', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_restricciones_longitud`
--

CREATE TABLE `catalogo_restricciones_longitud` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `campo` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_restricciones_longitud`
--

INSERT INTO `catalogo_restricciones_longitud` (`id`, `descripcion`, `campo`, `valor`) VALUES
(1, 'Resumen', 'resumen', '1000'),
(2, 'Introduccion', 'introduccion', '3000'),
(3, 'Antecendentes', 'antecedentes', '3000'),
(4, 'Hipotesis', 'hipotesis', '200'),
(5, 'Marco Teórico', 'marco_teorico', '5000'),
(6, 'Objetivo General', 'objetivo_general', '100'),
(7, 'Objetivos Especificos', 'objetivos_especificos', '1000'),
(8, 'Impacto o Beneficio', 'impacto_beneficio', '2000'),
(9, 'Metodología', 'metodologia', '3000'),
(10, 'Referencias', 'referencias', '1000'),
(11, 'Lugar', 'lugar', '200'),
(12, 'Infraestructura', 'infraestructura', '200'),
(13, 'Vinculación', 'tvinculacion', '500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_restricciones_registro`
--

CREATE TABLE `catalogo_restricciones_registro` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_restricciones_registro`
--

INSERT INTO `catalogo_restricciones_registro` (`id`, `descripcion`, `valor`) VALUES
(1, 'Proyectos financiados por línea de investigación', '1'),
(2, 'Proyectos por línea de investigación', '10'),
(3, 'Participaciones como director', '1'),
(4, 'Máximo de participaciones', '2'),
(5, 'Máximo de colaboradores en un proyecto', '4'),
(6, 'Monto máximo de financiamiento', '25000'),
(7, 'Máximo de colaboradores por proyecto', '6'),
(8, 'Mínimo de colaboradores por proyecto', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_tipo_investigacion`
--

CREATE TABLE `catalogo_tipo_investigacion` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_tipo_investigacion`
--

INSERT INTO `catalogo_tipo_investigacion` (`id`, `tipo`) VALUES
(1, 'Básica'),
(2, 'Aplicada'),
(3, 'Desarrollo Tecnológico'),
(4, 'Educativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `participacion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE `convocatoria` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha_inicio` date DEFAULT NULL,
  `Fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `convocatoria`
--

INSERT INTO `convocatoria` (`id`, `Nombre`, `Fecha_inicio`, `Fecha_fin`) VALUES
(3, '2018-1', '2018-01-01', '2018-05-31'),
(6, '2018-2', '2018-06-01', '2018-09-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `id` int(11) NOT NULL,
  `actividad` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `proyecto_id` int(11) NOT NULL,
  `entregables_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregables`
--

CREATE TABLE `entregables` (
  `id` int(11) NOT NULL,
  `tipo` enum('ACADEMICO','HUMANO') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantos` int(11) DEFAULT NULL,
  `descripcion` varchar(101) CHARACTER SET utf8mb4 DEFAULT NULL,
  `proyecto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `partida` int(11) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `cronograma_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jguzman@ittg.edu.mx', '$2y$10$/K3r26jrE4PKZF3tL7QkR.N.jyI8NjMpn2CPJCenGAYpscK1awnLu', '2018-07-01 22:28:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `financiado` tinyint(1) DEFAULT '0',
  `nombre_ies` varchar(120) DEFAULT NULL,
  `pe` int(11) NOT NULL,
  `area` varchar(100) DEFAULT NULL,
  `linea` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `duracion` varchar(45) DEFAULT NULL,
  `convocatoria_id` int(11) NOT NULL,
  `responsable` int(10) UNSIGNED NOT NULL,
  `tipo_investigacion` varchar(45) DEFAULT NULL,
  `sometido` date DEFAULT NULL,
  `dictamen` tinyint(1) DEFAULT NULL,
  `resumen` text,
  `introduccion` text,
  `antecedentes` text,
  `hipotesis` text,
  `marco_teorico` text,
  `metas` text,
  `objetivo_general` text,
  `objetivos_especificos` text,
  `impacto_beneficio` text,
  `metodologia` text,
  `vinculacion` varchar(20) DEFAULT NULL,
  `referencias` text,
  `lugar` text,
  `infraestructura` text,
  `tvinculacion` text,
  `aval` varchar(20) DEFAULT NULL,
  `ci01` varchar(20) DEFAULT NULL,
  `ci02` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` enum('Investigador','Coordinador','Revisor') DEFAULT 'Investigador',
  `cvutecnm` varchar(45) DEFAULT NULL,
  `adscripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`, `cvutecnm`, `adscripcion`) VALUES
(1, 'Jorge Octavio Guzmán', 'jguzman@ittg.edu.mx', '$2y$10$PUB74.r9NmsPrg3p2VHQX.07r21XCig2Ja9vhrTtxHm.UMn9l8lMW', 'TMsHtP4dIsLansuexuk4asNNQAj0oLXGWgLST3WXCfcAt8zPB5S8jAsNnfEJ', '2018-05-27 17:44:29', '2018-05-27 17:44:29', 'Investigador', 'IT17A040', 'Instituto Tecnológico de Tuxtla Gutiérrez'),
(2, 'Sergio Guzmán', 'sguzman@ittg.edu.mx', '$2y$10$9T8QBD.CpOnN.XETTQcM1uUywgaFObzgfPgo0hOsAmILSPQIWnMCu', 'X6wLC9sCu6PqQ5RK71gb33Va6JITUquvbBGkbMh8p19jKOQbcrSXKhsWWu6R', '2018-05-27 22:27:29', '2018-05-27 22:27:29', 'Coordinador', 'IT17A041', 'Tuxtla'),
(3, 'Alberto Guzmán.', 'bguzman@ittg.edu.mx', '$2y$10$gKuHPqzBmZLu1RURb2LEWeFCK/7BuqdpySBkfHjf00djsZAPV4PaW', 'Y2eljPYRC13CYy47DaZwF4mx5NSgYfCyhwooZrKfdoSJL1MAkAkPpb91eZyW', '2018-05-27 22:42:00', '2018-05-27 22:42:00', 'Investigador', 'IT17A042', 'TUXTLA'),
(4, 'Héctor Guerra Crespo', 'hgcrespo@hotmail.com', '$2y$10$MQ2Q9pLR4CziRIlT/fsRB.6JU2YT6f.OuHD.MO8lpjQ7U62jnSn42', '9QEvWAlzPXxzF8CeHriCTRiGt7jYapvYQTgZkUjBpv1UTRTH7JM3jByaOD0a', '2018-05-31 23:57:00', '2018-05-31 23:57:00', 'Investigador', NULL, 'ittg'),
(5, 'Jesus Carlos Sánchez Guzmán', 'jsanchez@ittg.edu.mx', '$2y$10$BLOOq1lKCMU9bX/LGRgyXOyFmZ9ievAV.ephdhqd7Zy3nLFcBKDUC', 'VX5CSaInZ6TlXKbMIHhcGwS2OGtJS0zVBRjEZJibexWoNg7cdTZR4oTiPMZm', '2018-07-01 22:27:06', '2018-07-01 22:27:06', 'Investigador', 'IT17A043', 'Instituto Tecnológico de Tuxtla Gutiérrez'),
(6, 'Castañon', 'jcastagnon@ittg.edu.mx', '$2y$10$iBnizFWOayMBmuXC8Ej31OCn3rUWpyKKxnXshsgTSXRX8jisFw9O.', 'ARf3EgWCWPwRDCfRy24NiIn01zffDUdjAtkDAJf0o3R76Wubzos3shDENlbV', '2018-07-05 05:31:13', '2018-07-05 05:31:13', 'Investigador', 'ITA123456', 'Instituto Tecnológico de Tuxtla Gutiérrez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo_areas`
--
ALTER TABLE `catalogo_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_entregables`
--
ALTER TABLE `catalogo_entregables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_gastos`
--
ALTER TABLE `catalogo_gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_ies`
--
ALTER TABLE `catalogo_ies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_lineas`
--
ALTER TABLE `catalogo_lineas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_pe`
--
ALTER TABLE `catalogo_pe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_restricciones_longitud`
--
ALTER TABLE `catalogo_restricciones_longitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_restricciones_registro`
--
ALTER TABLE `catalogo_restricciones_registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo_tipo_investigacion`
--
ALTER TABLE `catalogo_tipo_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`,`users_id`,`proyecto_id`),
  ADD UNIQUE KEY `unicos` (`users_id`,`proyecto_id`),
  ADD KEY `fk_colab_users_idx` (`users_id`),
  ADD KEY `fk_colab_proy_idx` (`proyecto_id`);

--
-- Indices de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`id`,`proyecto_id`),
  ADD KEY `fk_cronograma_proyecto1_idx` (`proyecto_id`),
  ADD KEY `fk_cronograma_entregables1_idx` (`entregables_id`);

--
-- Indices de la tabla `entregables`
--
ALTER TABLE `entregables`
  ADD PRIMARY KEY (`id`,`proyecto_id`),
  ADD UNIQUE KEY `unicos` (`descripcion`,`proyecto_id`),
  ADD KEY `fk_entregables_proyecto1_idx` (`proyecto_id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`,`cronograma_id`,`proyecto_id`),
  ADD KEY `fk_gastos_cronograma1_idx` (`cronograma_id`,`proyecto_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`,`pe`,`convocatoria_id`,`responsable`),
  ADD KEY `fk_proyecto_convocatoria_idx` (`convocatoria_id`),
  ADD KEY `fk_proyecto_users1_idx` (`responsable`),
  ADD KEY `fk_proyecto_catalogo_pe1_idx` (`pe`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_areas`
--
ALTER TABLE `catalogo_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `catalogo_entregables`
--
ALTER TABLE `catalogo_entregables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `catalogo_gastos`
--
ALTER TABLE `catalogo_gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `catalogo_ies`
--
ALTER TABLE `catalogo_ies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catalogo_lineas`
--
ALTER TABLE `catalogo_lineas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `catalogo_pe`
--
ALTER TABLE `catalogo_pe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `catalogo_restricciones_longitud`
--
ALTER TABLE `catalogo_restricciones_longitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `catalogo_restricciones_registro`
--
ALTER TABLE `catalogo_restricciones_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `catalogo_tipo_investigacion`
--
ALTER TABLE `catalogo_tipo_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entregables`
--
ALTER TABLE `entregables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD CONSTRAINT `fk_colab_proy` FOREIGN KEY (`proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_colab_user` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `fk_cronograma_entregables1` FOREIGN KEY (`entregables_id`) REFERENCES `entregables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cronograma_proyecto1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entregables`
--
ALTER TABLE `entregables`
  ADD CONSTRAINT `fk_entregables_proyecto1` FOREIGN KEY (`proyecto_id`) REFERENCES `proyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `fk_gastos_cronograma1` FOREIGN KEY (`cronograma_id`,`proyecto_id`) REFERENCES `cronograma` (`id`, `proyecto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_proyecto_catalogo_pe1` FOREIGN KEY (`pe`) REFERENCES `catalogo_pe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_convocatoria` FOREIGN KEY (`convocatoria_id`) REFERENCES `convocatoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_users1` FOREIGN KEY (`responsable`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
