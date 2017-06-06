-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2017 a las 18:46:58
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curriculum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idArea` int(11) NOT NULL,
  `area` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idArea`, `area`) VALUES
(1, 'Ciencias Económicas'),
(2, 'Ciencias de la Tecnología'),
(3, 'Ingeniería y Tecnología'),
(4, 'Lingüística'),
(5, 'Matemáticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoriaconsultoria`
--

CREATE TABLE `asesoriaconsultoria` (
  `cveAsesoriaConsultoria` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `cveTipoProduccion` int(11) NOT NULL,
  `idPais` int(11) NOT NULL,
  `nombreProyecto` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `objetivoProyecto` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `empresaBeneficiaria` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `considerarCurriculum` tinyint(1) DEFAULT NULL,
  `otrosInvestigadores` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `beneficioEconomicoInst` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asesoriaconsultoria`
--

INSERT INTO `asesoriaconsultoria` (`cveAsesoriaConsultoria`, `cveProfesor`, `cveTipoProduccion`, `idPais`, `nombreProyecto`, `objetivoProyecto`, `empresaBeneficiaria`, `fechaInicio`, `considerarCurriculum`, `otrosInvestigadores`, `beneficioEconomicoInst`, `idEstado`) VALUES
(1, 13259, 4, 146, 'nombre de prueba1', 'alcance prueba 2', 'NINGUNA2', '2017-05-24', 1, 'NINGUNA1', NULL, 4),
(2, 13259, 6, 146, 'PRUEBA ', 'ALCENCE PRUEBA2', 'EMPRESA PRUEBA2', '2017-05-24', 1, 'NINGUNA19.09', 'NINGUNA2', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `cveCurso` int(11) NOT NULL,
  `cvePlan` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombreCurso` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cveCurso`, `cvePlan`, `nombreCurso`) VALUES
(1, 'LAT11', 'Plataforma Tecnologica III'),
(2, 'LAT11', 'Seminario De Investigacion'),
(3, 'LAT11', 'Plataforma Tecnologica I'),
(4, 'LAT11', 'Desarrollo Web'),
(5, 'LAT11', 'Modelos Matematicos Para La Toma De Decisiones'),
(6, 'LAT11', 'Redes II'),
(7, 'LAT11', 'Ingenieria De Software'),
(8, 'LAT11', 'Mercadotecnia Y Comercio Electronico'),
(9, 'LAT11', 'Plataforma Tecnologica II'),
(10, 'LAT11', 'Administracion De Recursos Humanos'),
(11, 'LAT11', 'Topico I'),
(12, 'LAT11', 'Telefonia'),
(13, 'LAT11', 'Sistemas De Informacion'),
(14, 'LAT11', 'Servicio Social'),
(15, 'LAT11', 'Arquitectura De Las Computadoras'),
(16, 'LAT11', 'Paradigmas De Programacion'),
(17, 'LAT11', 'Probabilidad Y Estadistica'),
(18, 'LAT11', 'Patrones De Diseño Web'),
(19, 'LAT11', 'Bases De Datos'),
(20, 'LAT11', 'Inglés III'),
(21, 'LAT11', 'Evaluacion Y Administracion De Proyectos'),
(22, 'LAT11', 'Sistemas Operativos'),
(23, 'LAT11', 'Desarrollo De Aplicaciones Con Acceso A Datos'),
(24, 'LAT11', 'Estadistica Inferencial'),
(25, 'LAT11', 'Redes I'),
(26, 'LAT11', 'Administracion De Bases De Datos'),
(27, 'LAT11', 'Inglés IV'),
(28, 'LAT11', 'Economia'),
(29, 'INF07', 'Optativa De Administracion De Bases De Datos I'),
(30, 'SOF07', 'Optativa De Administracion De Bases De Datos I'),
(31, 'LAT11', 'Administracion De Tecnologias De Informacion'),
(32, 'INF07', 'Sistemas De Bases De Datos'),
(33, 'SOF07', 'Sistemas De Bases De Datos'),
(34, 'TEL07', 'Sistemas De Bases De Datos'),
(35, 'SOF07', 'Tecnicas De Diseño Web'),
(36, 'TEL07', 'Tecnicas De Diseño Web'),
(37, 'INC07', 'Sistemas De Bases De Datos'),
(38, 'SOF07', 'Optativa De Administracion De Bases De Datos II'),
(39, 'INF07', 'Dataware House'),
(40, 'SOF07', 'Dataware House'),
(41, 'INF07', 'Optativa De Business Intelligence I'),
(42, 'SOF07', 'Optativa De Business Intelligence I'),
(43, 'INF07', 'Optativa De Business Intelligence II'),
(44, 'SOF07', 'Optativa De Business Intelligence II'),
(45, 'INF07', 'Optativa Gestion Empresarial Con ERP I'),
(46, 'INF07', 'Optativa Gestion Empresarial Con ERP II'),
(47, 'INF07', 'C.R.M.'),
(48, 'INC07', 'Sensores Y Transductores'),
(49, 'INC07', 'Interconectividad De Dispositivos'),
(50, 'INC07', 'Dispositivos Programables'),
(51, 'INC07', 'Telemando'),
(52, 'INC07', 'Diseño De Interfaces'),
(53, 'INF07', 'Diseño De Interfaces'),
(54, 'SOF07', 'Diseño De Interfaces'),
(55, 'TEL07', 'Diseño De Interfaces'),
(56, 'INC07', 'Introduccion A La Inteligencia Artificial'),
(57, 'INF07', 'Introduccion A La Inteligencia Artificial'),
(58, 'SOF07', 'Introduccion A La Inteligencia Artificial'),
(59, 'TEL07', 'Introduccion A La Inteligencia Artificial'),
(60, 'SOF07', 'Sistemas Expertos'),
(61, 'INC07', 'Practicas Y Servicios Tecnologicos'),
(62, 'INF07', 'Practicas Y Servicios Tecnologicos'),
(63, 'SOF07', 'Practicas Y Servicios Tecnologicos'),
(64, 'TEL07', 'Practicas Y Servicios Tecnologicos'),
(65, 'INF07', 'Administracion De Recursos Humanos'),
(66, 'INC99', 'Calculo Diferencial E Integral'),
(67, 'INF07', 'Admon De Las TICs'),
(68, 'INC99', 'Algebra Lineal'),
(69, 'TEL07', 'Administracion'),
(70, 'SOF07', 'Administracion'),
(71, 'INF07', 'Administracion'),
(72, 'INC99', 'Electricidad Y Magnetismo'),
(73, 'INC07', 'Administracion'),
(74, 'LAT11', 'Matematicas Computacioneles'),
(75, 'LAT11', 'Introduccion A Las Tecnologias De Informacion'),
(76, 'LAT11', 'Introduccion A La Programacion'),
(77, 'LAT11', 'Preparacion TOEFL'),
(78, 'LAT11', 'Administracion'),
(79, 'LAT11', 'Etica Y Derecho Informatico'),
(80, 'LAT11', 'Desarrollo Humano I'),
(81, 'LAT11', 'Inglés I'),
(82, 'LAT11', 'Contabilidad'),
(83, 'LAT11', 'Electronica Analogica'),
(84, 'LAT11', 'Programacion Orientada A Objetos'),
(85, 'LAT11', 'Calculo Diferencial E Integral'),
(86, 'LAT11', 'Diseño De Interfaces De Software'),
(87, 'LAT11', 'Desarrollo Humano II'),
(88, 'LAT11', 'Inglés II'),
(89, 'LAT11', 'Analisis De Estructuras Y Procedimientos Administrativos'),
(90, 'INF01', 'Analisis Y Diseño De Estructuras Y Pro. Administrativos'),
(91, 'INF01', 'Paradigmas De Programacion'),
(92, 'INF01', 'Programacion I'),
(93, 'INF01', 'Matematicas Computacionales'),
(94, 'INF01', 'Probabilidad Y Estadistica'),
(95, 'INF01', 'Administracion De Recursos Humanos'),
(96, 'INF01', 'Contabilidad De Costos'),
(97, 'INF01', 'Algoritmos Y Estructuras De Datos I'),
(98, 'INF01', 'Programacion II'),
(99, 'INF01', 'Sist. Digit. Y Organizacion De Computadoras'),
(100, 'INF01', 'Simulacion'),
(101, 'INF01', 'Economia'),
(102, 'INF01', 'Administracion Financiera'),
(103, 'INF01', 'Algoritmos Y Estructuras De Datos II'),
(104, 'INF01', 'Ingenieria De Requerimientos'),
(105, 'INF01', 'Investigacion De Operaciones'),
(106, 'INF01', 'Planeacion Estrategica Y Mercadotecnia'),
(107, 'INF01', 'Analisis Y Evaluacion De Proyectos De Inversion'),
(108, 'INF01', 'Base De Datos'),
(109, 'INF01', 'Analisis Y Diseño De Sistemas I'),
(110, 'INF01', 'Inglés (Curso De Preparacion Al PET)'),
(111, 'INF01', 'Administracion Estrategica'),
(112, 'INF01', 'Informatica Y Sociedad'),
(113, 'INF01', 'Administracion De Base De Datos'),
(114, 'INF01', 'Analisis Y Diseño De Sistemas II'),
(115, 'INF01', 'Sistemas Operativos'),
(116, 'INF01', 'Topico I'),
(117, 'INF01', 'Metodologia De La Investigacion'),
(118, 'INF01', 'Redes De Computadoras'),
(119, 'INF01', 'Administracion De Redes'),
(120, 'INF01', 'Sistemas Operativos Avanzados'),
(121, 'INF01', 'Sistema Para La Toma De Decisiones'),
(122, 'INF01', 'Auditoria De Datos'),
(123, 'INF01', 'Topico II'),
(124, 'INF01', 'Administracion De Proyectos Informaticos'),
(125, 'INF01', 'Construccion Y Aseguramiento De La Calidad'),
(126, 'INF01', 'Administracion De Proyectos De Desarrollo'),
(127, 'INF01', 'Sistemas Integrados'),
(128, 'INC07', 'Electricidad Y Magnetismo'),
(129, 'TEL07', 'Electricidad Y Magnetismo'),
(130, 'INC07', 'Electronica Analogica'),
(131, 'TEL07', 'Electronica Analogica'),
(132, 'INC07', 'Electronica Digital'),
(133, 'TEL07', 'Electronica Digital'),
(134, 'INC07', 'Logica Digital'),
(135, 'INF07', 'Logica Digital'),
(136, 'SOF07', 'Logica Digital'),
(137, 'TEL07', 'Logica Digital'),
(138, 'INC07', 'Mecanica Clasica'),
(139, 'TEL07', 'Mecanica Clasica'),
(140, 'INC07', 'Organizacion Y Arq. De Las Comp.'),
(141, 'INF07', 'Organizacion Y Arq. De Las Comp.'),
(142, 'SOF07', 'Organizacion Y Arq. De Las Comp.'),
(143, 'TEL07', 'Organizacion Y Arq. De Las Comp.'),
(144, 'INC07', 'Sistemas Digitales'),
(145, 'TEL07', 'Sistemas Digitales'),
(146, 'INC07', 'Redes I'),
(147, 'INF07', 'Redes I'),
(148, 'SOF07', 'Redes I'),
(149, 'TEL07', 'Redes I'),
(150, 'INC07', 'Redes II'),
(151, 'INF07', 'Redes II'),
(152, 'SOF07', 'Redes II'),
(153, 'TEL07', 'Redes II'),
(154, 'TEL07', 'Redes III'),
(155, 'TEL07', 'Redes IV'),
(156, 'INF07', 'Administracion De Redes'),
(157, 'SOF07', 'Administracion De Redes'),
(158, 'TEL07', 'Cableado Estructurado'),
(159, 'TEL07', 'Seguridad En Redes'),
(160, 'TEL07', 'Comunicaciones Opticas'),
(161, 'TEL07', 'Comunicaciones Satelitales'),
(162, 'TEL07', 'Redes Inalambricas'),
(163, 'TEL07', 'Voz / IP'),
(164, 'INC07', 'Señales Y Transmision De Datos'),
(165, 'TEL07', 'Señales Y Transmision De Datos'),
(166, 'TEL07', 'Evaluacion Proy. De Telec.'),
(167, 'INC07', 'Sistemas Operativos'),
(168, 'INF07', 'Sistemas Operativos'),
(169, 'SOF07', 'Sistemas Operativos'),
(170, 'TEL07', 'Sistemas Operativos'),
(171, 'INC07', 'Optativa  Admon. S.O. I'),
(172, 'INF07', 'Optativa  Admon. S.O. I'),
(173, 'SOF07', 'Optativa  Admon. S.O. I'),
(174, 'TEL07', 'Optativa  Admon. S.O. I'),
(175, 'INC07', 'Optativa  Admon. S.O. II'),
(176, 'INF07', 'Optativa  Admon. S.O. II'),
(177, 'TEL07', 'Optativa  Admon. S.O. II'),
(178, 'SOF07', 'S.O. De Dispositivos Moviles'),
(179, 'INC07', 'Introduccion A Los Sistemas De Informacion'),
(180, 'INF07', 'Introduccion A Los Sistemas De Informacion'),
(181, 'SOF07', 'Introduccion A Los Sistemas De Informacion'),
(182, 'TEL07', 'Introduccion A Los Sistemas De Informacion'),
(183, 'INC07', 'Introduccion A Los Sistemas Computacionales'),
(184, 'INF07', 'Introduccion A Los Sistemas Computacionales'),
(185, 'SOF07', 'Introduccion A Los Sistemas Computacionales'),
(186, 'TEL07', 'Introduccion A Los Sistemas Computacionales'),
(187, 'INC07', 'Programacion I'),
(188, 'INF07', 'Programacion I'),
(189, 'SOF07', 'Programacion I'),
(190, 'TEL07', 'Programacion I'),
(191, 'INC07', 'Programacion II'),
(192, 'INF07', 'Programacion II'),
(193, 'SOF07', 'Programacion II'),
(194, 'INC07', 'Programacion III'),
(195, 'SOF07', 'Programacion III'),
(196, 'INC07', 'Programacion IV'),
(197, 'INC99', 'Expresion Oral Y Escrita En Español'),
(198, 'INF07', 'Analisis De Est. Y Proc. Admitivos.'),
(199, 'INC99', 'Introduccion A La Computacion'),
(200, 'INF07', 'Administracion Financiera'),
(201, 'INC99', 'Mecanica Clasica'),
(202, 'SOF07', 'Programacion Distribuida'),
(203, 'SOF07', 'Admon Y Organ. De Proyectos De Software'),
(204, 'SOF07', 'Mantto. Pruebas Y Especificacion De Software'),
(205, 'TEL07', 'Algoritmos Y Estructuras De Datos'),
(206, 'INC07', 'Administracion Financiera'),
(207, 'SOF07', 'Programacion IV'),
(208, 'SOF07', 'Programacion V'),
(209, 'INC07', 'Programacion De Bajo Nivel'),
(210, 'SOF07', 'Programacion De Bajo Nivel'),
(211, 'INC07', 'Algoritmos Y Estructuras De Datos'),
(212, 'INF07', 'Algoritmos Y Estructuras De Datos'),
(213, 'SOF07', 'Algoritmos Y Estructuras De Datos'),
(214, 'INC07', 'Tecnicas De Diseño Web'),
(215, 'TEL07', 'Sem Elaboracion De Reporte Tecnico'),
(216, 'INC99', 'Señales Y Transmision De Datos'),
(217, 'INC99', 'Sistemas Operativos'),
(218, 'INC99', 'Programacion De Sistemas'),
(219, 'INC99', 'Analisis Y Diseño De Sistemas De Software'),
(220, 'INC99', 'Sistemas De Bases De Datos'),
(221, 'INC99', 'Modelo De Comunicacion Entre Computadora'),
(222, 'INC99', 'Introduccion A La Inteligencia Artificial'),
(223, 'INC99', 'Inglés (Curso De Preparacion Al PET)'),
(224, 'INC99', 'Interpretes Y Compiladores'),
(225, 'INC99', 'Contabilidad'),
(226, 'INC99', 'Administracion'),
(227, 'INC99', 'Redes De Computadoras'),
(228, 'INC99', 'Seguridad En Redes De Computadoras'),
(229, 'INC99', 'Sistemas Distribuidos'),
(230, 'INC99', 'Seminario De Titulacion'),
(231, 'INC99', 'Informatica Y Sociedad'),
(232, 'INC99', 'Economia'),
(233, 'INC99', 'Plan., Inst. Y Admon. De Redes De Comp.'),
(234, 'INC99', 'Interconexion De Redes De Computadoras'),
(235, 'INC99', 'Sistemas Operativos Distribuidos'),
(236, 'INC99', 'Topico I'),
(237, 'INC99', 'Topico Selecto II'),
(238, 'INC99', 'Ing. Y Admon. De Proy. Computacionales'),
(239, 'INC99', 'Estancia Profesional'),
(240, 'INF01', 'Estancia Profesional'),
(241, 'INC07', 'Algebra Lineal'),
(242, 'INF01', 'Algebra Lineal'),
(243, 'INF07', 'Algebra Lineal'),
(244, 'SOF07', 'Algebra Lineal'),
(245, 'TEL07', 'Algebra Lineal'),
(246, 'INC07', 'Calculo Diferencial E Integral'),
(247, 'INF07', 'Calculo Diferencial E Integral'),
(248, 'SOF07', 'Calculo Diferencial E Integral'),
(249, 'TEL07', 'Calculo Diferencial E Integral'),
(250, 'INC07', 'Calculo Vectorial'),
(251, 'INF01', 'Expresion Oral Y Escrita En Español'),
(252, 'TEL07', 'Calculo Vectorial'),
(253, 'INC07', 'Ecuaciones Diferenciales'),
(254, 'INF01', 'Introd. Y Fundamentos De Administracion'),
(255, 'TEL07', 'Ecuaciones Diferenciales'),
(256, 'INF01', 'Introduccion A La Computacion'),
(257, 'INF07', 'Estadistica Inferencial'),
(258, 'SOF07', 'Estadistica Inferencial'),
(259, 'TEL07', 'Estadistica Inferencial'),
(260, 'INC07', 'Matematicas Computacionales'),
(261, 'INF01', 'Abstraccion'),
(262, 'INF07', 'Matematicas Computacionales'),
(263, 'SOF07', 'Matematicas Computacionales'),
(264, 'TEL07', 'Matematicas Computacionales'),
(265, 'INC07', 'Metodos Numericos'),
(266, 'INF07', 'Probabilidad Y Estadistica'),
(267, 'SOF07', 'Probabilidad Y Estadistica'),
(268, 'INC07', 'Series Y Transformadas De Fourier'),
(269, 'TEL07', 'Series Y Transformadas De Fourier'),
(270, 'INF01', 'Calculo Diferencial E Integral'),
(271, 'INF01', 'Comportamiento Humano En Las Organizaciones'),
(272, 'INF01', 'Contabilidad'),
(273, 'SOF07', 'Sem Elaboracion De Reporte Tecnico'),
(274, 'INF07', 'Sem De Elaboracion De Reporte Tecnico'),
(275, 'INC99', 'Arquitectura De Computadoras'),
(276, 'INC07', 'Sem De Elaboracion De Reporte Tecnico'),
(277, 'INC99', 'Metodos Numericos'),
(278, 'INF07', 'Comportamiento Humano En Las Organizaciones'),
(279, 'INC07', 'Contabilidad'),
(280, 'INF07', 'Contabilidad'),
(281, 'SOF07', 'Contabilidad'),
(282, 'TEL07', 'Contabilidad'),
(283, 'INC07', 'Derecho Informatico'),
(284, 'SOF07', 'Derecho Informatico'),
(285, 'TEL07', 'Derecho Informatico'),
(286, 'INF07', 'Admon. De La Cadena De Suministros'),
(287, 'SOF07', 'Admon. De La Cadena De Suministros'),
(288, 'INF07', 'Planeacion Y Programacion De Recursos'),
(289, 'SOF07', 'Planeacion Y Programacion De Recursos'),
(290, 'INC99', 'Circuitos Electricos'),
(291, 'INF07', 'Ejecucion Y Control De Operaciones'),
(292, 'INC99', 'Logica Digital'),
(293, 'INF07', 'Admon. Estrategica De Recursos'),
(294, 'INC99', 'Calculo Vectorial'),
(295, 'INF07', 'Apoyo A La Formacion Profesional'),
(296, 'INC99', 'Fisica Moderna'),
(297, 'INC99', 'Matematicas Computacionales'),
(298, 'INC99', 'Sol. Algor. De Prob. Con Prog. Estruc.'),
(299, 'INC07', 'Inglés I'),
(300, 'INC99', 'Electronica Digital'),
(301, 'INF07', 'Inglés I'),
(302, 'SOF07', 'Inglés I'),
(303, 'TEL07', 'Inglés I'),
(304, 'INC07', 'Inglés II'),
(305, 'INC99', 'Electronica Analogica'),
(306, 'INF07', 'Inglés II'),
(307, 'SOF07', 'Inglés II'),
(308, 'TEL07', 'Inglés II'),
(309, 'INC07', 'Inglés III'),
(310, 'INC99', 'Probabilidad Y Estadistica'),
(311, 'INF07', 'Inglés III'),
(312, 'SOF07', 'Inglés III'),
(313, 'TEL07', 'Inglés III'),
(314, 'INC07', 'Inglés IV'),
(315, 'INC99', 'Ecuaciones Diferenciales Y Transformadas'),
(316, 'INF07', 'Inglés IV'),
(317, 'SOF07', 'Inglés IV'),
(318, 'TEL07', 'Inglés IV'),
(319, 'INC99', 'Algoritmos Y Estructuras De Datos I'),
(320, 'INC99', 'Programacion Orientada A Objetos'),
(321, 'INC07', 'Servicio Social'),
(322, 'INC99', 'Sistemas Digitales'),
(323, 'INF07', 'Servicio Social'),
(324, 'SOF07', 'Servicio Social'),
(325, 'TEL07', 'Servicio Social'),
(326, 'INC99', 'Organizacion De Las Computadoras'),
(327, 'INC99', 'Mod. Y Sim. De Proc. De Variable Discret'),
(328, 'INC99', 'Automatas Y Lenguajes Formales'),
(329, 'INC99', 'Algoritmos Y Estructuras De Datos II'),
(330, 'LAT11', 'Topico II'),
(331, 'LAT11', 'Topico III'),
(332, 'LAT11', 'Practicas Profesionales'),
(347, 'POS', 'Materia De Posgrado'),
(348, 'ASE', 'Hora De Asesorias'),
(349, 'INC11', 'Administracion'),
(350, 'INC11', 'Etica y Derecho Informatico'),
(351, 'INC11', 'Seminario de Investigacion'),
(352, 'INC11', 'Administracion de las Tecnologias de Informacion'),
(353, 'INC11', 'Matematicas Computacionales'),
(354, 'INC11', 'Calculo Diferencial e Integral'),
(355, 'INC11', 'Algebra Lineal'),
(356, 'INC11', 'Calculo Vectorial'),
(357, 'INC11', 'Ecuaciones Diferenciales'),
(358, 'INC11', 'Metodos Numericos con Simulacion'),
(359, 'INC11', 'Series y Transformadas de Fourier'),
(360, 'INC11', 'Introduccion a las Tecnologias de Informacion'),
(361, 'INC11', 'Electronica Analogica'),
(362, 'INC11', 'Circuitos Electricos'),
(363, 'INC11', 'Logica Digital'),
(364, 'INC11', 'Electronica Digital'),
(365, 'INC11', 'Sistemas Digitales'),
(366, 'INC11', 'Redes I'),
(367, 'INC11', 'Redes II'),
(368, 'INC11', 'Administracion de Redes'),
(369, 'INC11', 'Señales y Transmision de Datos'),
(370, 'INC11', 'Sistemas Operativos'),
(371, 'INC11', 'Administracion de Sistemas Operativos I'),
(372, 'INC11', 'Administracion de Sistemas Operativos II'),
(373, 'INC11', 'Introduccion a la Programacion'),
(374, 'INC11', 'Programacion Orientada a Objetos'),
(375, 'INC11', 'Algoritmos y Estructura de Datos'),
(376, 'INC11', 'Programacion de Bajo Nivel'),
(377, 'INC11', 'Instrumentacion Virtual'),
(378, 'INC11', 'Desarrollo de Interfaces de Hardware I'),
(379, 'INC11', 'Desarrollo de Interfaces de Hardware II'),
(380, 'INC11', 'Analisis y Diseño de Sistemas'),
(381, 'INC11', 'Recuperacion de la Informacion y Bases de Datos'),
(382, 'INC11', 'Interconectividad de Dispositivos'),
(383, 'INC11', 'Dispositivos Programables'),
(384, 'INC11', 'Inteligencia Artificial'),
(385, 'INC11', 'Tipico I'),
(386, 'INC11', 'Tipico II'),
(387, 'INC11', 'Tipico III'),
(388, 'INC11', 'Practicas  Profesionales'),
(389, 'INC11', 'Servicio Social'),
(390, 'INC11', 'Desarrollo Humano I'),
(391, 'INC11', 'Desarrollo Humano II'),
(392, 'INC11', 'Inglés I'),
(393, 'INC11', 'Inglés II'),
(394, 'INC11', 'Inglés III'),
(395, 'INC11', 'Inglés IV'),
(396, 'INC11', 'Preparacion TOEFL'),
(397, 'LAT11', 'PLATAFORMA TECNOLOGICA III'),
(398, 'TEL11', 'Administracion'),
(399, 'TEL11', 'Administracion de las Tecnologias de Informacion'),
(400, 'TEL11', 'Seminario de Investigacion'),
(401, 'TEL11', 'Etica y Derecho Informatico'),
(402, 'TEL11', 'Introduccion a las Tecnologias de Informacion'),
(403, 'TEL11', 'Electronica Analogica'),
(404, 'TEL11', 'Circuitos Electricos'),
(405, 'TEL11', 'Logica Digital'),
(406, 'TEL11', 'Comunicacion Digital'),
(407, 'TEL11', 'Procesamiento Digital de Señales'),
(408, 'TEL11', 'Sistemas Digitales'),
(409, 'TEL11', 'Analisis y Diseño de Sistemas de Informacion'),
(410, 'TEL11', 'Recuperacion de la Informacion y Bases de Datos'),
(411, 'TEL11', 'Introduccion a la Programacion'),
(412, 'TEL11', 'Programacion Orientada a Objetos'),
(413, 'TEL11', 'Algoritmos y Estructura de Datos'),
(414, 'TEL11', 'Matematicas Computacionales'),
(415, 'TEL11', 'Calculo Diferencial e Integral'),
(416, 'TEL11', 'Algebra Lineal'),
(417, 'TEL11', 'Calculo Vectorial'),
(418, 'TEL11', 'Ecuaciones Diferenciales'),
(419, 'TEL11', 'Series y Transformadas de Fourier'),
(420, 'TEL11', 'Telemando'),
(421, 'TEL11', 'Sistemas Operativos'),
(422, 'TEL11', 'Fundamentos de Redes'),
(423, 'TEL11', 'Redes I'),
(424, 'TEL11', 'Redes II'),
(425, 'TEL11', 'Redes III'),
(426, 'TEL11', 'Redes IV'),
(427, 'TEL11', 'Administracion de Redes'),
(428, 'TEL11', 'Señales y Transmision de Datos'),
(429, 'TEL11', 'Telefon'),
(430, 'TEL11', 'Redes Inalambricas'),
(431, 'TEL11', 'Seguridad de Redes'),
(432, 'TEL11', 'Comunicaciones Satelitales'),
(433, 'TEL11', 'Proyectos de Telecomunicaciones'),
(434, 'TEL11', 'Topico I'),
(435, 'TEL11', 'Topico II'),
(436, 'TEL11', 'Topico III'),
(437, 'TEL11', 'Practicas  Profesionales'),
(438, 'TEL11', 'Servicio Social'),
(439, 'TEL11', 'Desarrollo Humano I'),
(440, 'TEL11', 'Desarrollo Humano II'),
(441, 'TEL11', 'Inglés I'),
(442, 'TEL11', 'Inglés II'),
(443, 'TEL11', 'Inglés III'),
(444, 'TEL11', 'Inglés IV'),
(445, 'TEL11', 'Preparacion TOEFL'),
(446, 'SOF11', 'Inglés I'),
(447, 'SOF11', 'Administracion'),
(448, 'SOF11', 'Etica y derecho informatico'),
(449, 'SOF11', 'Matematicas computacionales'),
(450, 'SOF11', 'Introduccion a las teorias de informacion'),
(451, 'SOF11', 'Introduccion a la programacion'),
(452, 'SOF11', 'Desarrollo humano'),
(453, 'SOF11', 'Contabilidad'),
(454, 'SOF11', 'Administracion de las Tecnologias de Informacion'),
(455, 'SOF11', 'Seminario de Investigacion'),
(456, 'SOF11', 'Evaluacion y Administracion de Proyectos'),
(457, 'SOF11', 'Calculo Diferencial e Integral'),
(458, 'SOF11', 'Probabilidad  y Estadistica'),
(459, 'SOF11', 'Algebra Lineal'),
(460, 'SOF11', 'Arquitectura de las Computadoras'),
(461, 'SOF11', 'Logica Digital'),
(462, 'SOF11', 'Redes I'),
(463, 'SOF11', 'Redes II'),
(464, 'SOF11', 'Administracion de Redes'),
(465, 'SOF11', 'Sistemas Operativos'),
(466, 'SOF11', 'Administracion de Sistemas Operativos'),
(467, 'SOF11', 'Programacion Orientada a Objetos'),
(468, 'SOF11', 'Paradigmas de Programacion'),
(469, 'SOF11', 'Desarrollo de Aplicaciones con Acceso a Datos'),
(470, 'SOF11', 'Desarrollo Web'),
(471, 'SOF11', 'Algoritmos y Estructura de Datos'),
(472, 'SOF11', 'Programacion de Dispositivos Moviles'),
(473, 'SOF11', 'Arquitectura y Desarrollo de Sistemas Distribuidos'),
(474, 'SOF11', 'Bases de Datos'),
(475, 'SOF11', 'Administracion de Bases de Datos'),
(476, 'SOF11', 'Ingenieria de Software'),
(477, 'SOF11', 'Sistemas Integrados'),
(478, 'SOF11', 'Ingenieria de Requerimientos'),
(479, 'SOF11', 'Ingenieria de Software Avanzada'),
(480, 'SOF11', 'Sistemas de Soporte a la Decision'),
(481, 'SOF11', 'Diseño de Interfaces de Software'),
(482, 'SOF11', 'Dispositivos Logicos'),
(483, 'SOF11', 'Inteligencia Artificial'),
(484, 'SOF11', 'Topico I'),
(485, 'SOF11', 'Topico II'),
(486, 'SOF11', 'Topico III'),
(487, 'SOF11', 'Practicas  Profesionales'),
(488, 'SOF11', 'Servicio Social'),
(489, 'SOF11', 'Desarrollo Humano II'),
(490, 'SOF11', 'Inglés II'),
(491, 'SOF11', 'Inglés III'),
(492, 'SOF11', 'Inglés IV'),
(493, 'SOF11', 'Preparacion TOEFL'),
(494, 'INF11', 'Inglés I'),
(495, 'INF11', 'Administracion'),
(496, 'INF11', 'Etica y derecho informatico'),
(497, 'INF11', 'Matematicas computacionales'),
(498, 'INF11', 'Introduccion a las teorias de informacion'),
(499, 'INF11', 'Introduccion a la programacion'),
(500, 'INF11', 'Desarrollo humano'),
(501, 'INF11', 'Contabilidad'),
(502, 'INF11', 'Administracion  Financiera'),
(503, 'INF11', 'Analisis de Estructuras y Procedimientos Administrativos'),
(504, 'INF11', 'Administracion de Recursos Humanos'),
(505, 'INF11', 'Administracion de la Cadena de Suministros'),
(506, 'INF11', 'Comportamiento Humano en las organizaciones'),
(507, 'INF11', 'Planeacion y Programacion Detallada de Recursos'),
(508, 'INF11', 'Administracion Estrategica de Operaciones y Recursos'),
(509, 'INF11', 'Administracion de las Tecnologias de Informaci?n'),
(510, 'INF11', 'Seminario de Investigacion'),
(511, 'INF11', 'Calculo Diferencial e Integral'),
(512, 'INF11', 'Probabilidad y Estadistica'),
(513, 'INF11', 'Estadistica Inferencial'),
(514, 'INF11', 'Logica Digital'),
(515, 'INF11', 'Redes I'),
(516, 'INF11', 'Redes II'),
(517, 'INF11', 'Administracion de Redes'),
(518, 'INF11', 'Sistemas Operativos'),
(519, 'INF11', 'Administracion de Sistemas Operativos'),
(520, 'INF11', 'Programacion Orientada a Objetos'),
(521, 'INF11', 'Algoritmos y Estructura de Datos'),
(522, 'INF11', 'Programacion de Aplicaciones y Acceso a Datos'),
(523, 'INF11', 'Desarrollo Web'),
(524, 'INF11', 'Analisis y Diseño de Sistemas de Informacion'),
(525, 'INF11', 'Bases de Datos'),
(526, 'INF11', 'Administracion de Bases de Datos'),
(527, 'INF11', 'Data Warehouse'),
(528, 'INF11', 'Sistemas Integrados'),
(529, 'INF11', 'Business Intelligence'),
(530, 'INF11', 'Diseño de Interfaces de Software'),
(531, 'INF11', 'Inteligencia Artificial'),
(532, 'INF11', 'Topico I'),
(533, 'INF11', 'Topico II'),
(534, 'INF11', 'Topico III'),
(535, 'INF11', 'Practicas  Profesionales'),
(536, 'INF11', 'Servicio Social'),
(537, 'INF11', 'Desarrollo Humano II'),
(538, 'INF11', 'Inglés II'),
(539, 'INF11', 'Inglés III'),
(540, 'INF11', 'Inglés IV'),
(541, 'INF11', 'Preparacion TOEFL'),
(542, 'INF11', 'Algoritmos y Estructuras de Datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoslaborales`
--

CREATE TABLE `datoslaborales` (
  `cveDatosLaborales` int(11) NOT NULL,
  `cveInstitucion` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `nombramiento` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoNombramiento` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dedicacion` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dependencia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `unidadAcademica` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `inicioContrato` date DEFAULT NULL,
  `finContrato` date DEFAULT NULL,
  `cronologia` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datoslaborales`
--

INSERT INTO `datoslaborales` (`cveDatosLaborales`, `cveInstitucion`, `cveProfesor`, `nombramiento`, `tipoNombramiento`, `dedicacion`, `dependencia`, `unidadAcademica`, `inicioContrato`, `finContrato`, `cronologia`) VALUES
(2, 14, 13259, '', '', 'dedicacion22', 'dependencia', 'unidad', '2017-05-17', '2017-05-24', 'segunda'),
(3, 11, 123456, 'PRUEBA', 'NA', 'kjjj', 'NA', 'NA', '2017-05-26', '2017-05-27', 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccionindividualizada`
--

CREATE TABLE `direccionindividualizada` (
  `cveDireccionInd` int(11) NOT NULL,
  `idEstudio` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `cveInstitucion` int(11) NOT NULL,
  `nombInstitucion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `numAlumnos` int(11) DEFAULT NULL,
  `paraCurriculum` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `direccionindividualizada`
--

INSERT INTO `direccionindividualizada` (`cveDireccionInd`, `idEstudio`, `idEstado`, `cveProfesor`, `cveInstitucion`, `nombInstitucion`, `titulo`, `fechaInicio`, `fechaFin`, `numAlumnos`, `paraCurriculum`) VALUES
(1, 1, 1, 13259, 134, '', 'titulo de tesis', '2013-02-15', '2017-05-09', 5, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docencia`
--

CREATE TABLE `docencia` (
  `cveDocencia` int(11) NOT NULL,
  `cveCurso` int(11) NOT NULL,
  `cveInstitucion` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `idEstudio` int(11) NOT NULL,
  `dependencia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `numAlumnos` int(11) DEFAULT NULL,
  `duracionSemanas` int(11) DEFAULT '18',
  `horasAsesoriaMes` int(11) DEFAULT NULL,
  `horasSemana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docencia`
--

INSERT INTO `docencia` (`cveDocencia`, `cveCurso`, `cveInstitucion`, `cveProfesor`, `idEstudio`, `dependencia`, `fechaInicio`, `numAlumnos`, `duracionSemanas`, `horasAsesoriaMes`, `horasSemana`) VALUES
(3, 4, 131, 13259, 2, '9', '2030-12-15', 28, 23, 1357, 24),
(4, 523, 1, 13259, 1, '17', '2017-05-15', 8, 7, 6, 5),
(5, 526, 1, 123456, 1, '1', '2017-06-01', 15, 15, 15, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edocivil`
--

CREATE TABLE `edocivil` (
  `idEdoCivil` int(11) NOT NULL,
  `estado` char(15) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `edocivil`
--

INSERT INTO `edocivil` (`idEdoCivil`, `estado`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Viudo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoactual`
--

CREATE TABLE `estadoactual` (
  `idEstado` int(11) NOT NULL,
  `Estado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estadoactual`
--

INSERT INTO `estadoactual` (`idEstado`, `Estado`) VALUES
(1, 'Aceptado'),
(2, 'Publicado'),
(3, 'En Revisión'),
(4, 'En Proceso'),
(5, 'Concluido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(11) NOT NULL,
  `nombreEstado` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idPais` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstado`, `nombreEstado`, `idPais`) VALUES
(1, 'Aguascalientes', 1),
(2, 'Baja California', 1),
(3, 'Baja California Sur', 1),
(4, 'Campeche', 1),
(5, 'Coahuila de Zaragoza', 1),
(6, 'Colima', 1),
(7, 'Chiapas', 1),
(8, 'Chihuahua', 1),
(9, 'Distrito Federal', 1),
(10, 'Durango', 1),
(11, 'Guanajuato', 1),
(12, 'Guerrero', 1),
(13, 'Hidalgo', 1),
(14, 'Jalisco', 1),
(15, 'México', 1),
(16, 'Michoacán de Ocampo', 1),
(17, 'Morelos', 1),
(18, 'Nayarit', 1),
(19, 'Nuevo León', 1),
(20, 'Oaxaca', 1),
(21, 'Puebla', 1),
(22, 'Querétaro', 1),
(23, 'Quintana Roo', 1),
(24, 'San Luis Potosí', 1),
(25, 'Sinaloa', 1),
(26, 'Sonora', 1),
(27, 'Tabasco', 1),
(28, 'Tamaulipas', 1),
(29, 'Tlaxcala', 1),
(30, 'Veracruz', 1),
(31, 'Yucatán', 1),
(32, 'Zacatecas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `cveEstudio` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `cveInstitucion` int(11) NOT NULL,
  `idPais` int(11) NOT NULL,
  `estudioEn` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `disciplinaEstudio` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `institucionNoCatalogo` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `fechaObtencion` date DEFAULT NULL,
  `idEstudio` int(11) NOT NULL,
  `idArea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`cveEstudio`, `cveProfesor`, `cveInstitucion`, `idPais`, `estudioEn`, `disciplinaEstudio`, `institucionNoCatalogo`, `fechaInicio`, `fechaFin`, `fechaObtencion`, `idEstudio`, `idArea`) VALUES
(2, 13259, 134, 146, 'estudios en 2', 'Disciplina 2', 'Institución Otorgante no considerada en el catalog', '2015-02-25', '2017-02-15', '2020-05-25', 1, 2),
(4, 13259, 16, 146, 'HOY 22 0 23', 'HOY 22 O 23', '', '2001-01-01', '2002-01-01', '2003-01-01', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestionacademica`
--

CREATE TABLE `gestionacademica` (
  `cveGestionAcademica` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `tipoIndividual` tinyint(1) DEFAULT NULL,
  `cargo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `funcion` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `organoColegiado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `aprobado` tinyint(1) DEFAULT NULL,
  `resultados` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `terminada` tinyint(1) DEFAULT NULL,
  `fechaInicioGestion` date DEFAULT NULL,
  `fechaTerminoGestion` date DEFAULT NULL,
  `fechaUltimoInforme` date DEFAULT NULL,
  `horasSemana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gestionacademica`
--

INSERT INTO `gestionacademica` (`cveGestionAcademica`, `cveProfesor`, `tipoIndividual`, `cargo`, `funcion`, `organoColegiado`, `aprobado`, `resultados`, `terminada`, `fechaInicioGestion`, `fechaTerminoGestion`, `fechaUltimoInforme`, `horasSemana`) VALUES
(3, 13259, 1, 'Cargo 2', 'Funcion 2', 'Organo 2', 1, 'resultado2', 0, '2017-05-05', '2017-05-01', '2017-05-25', 1146),
(4, 13259, 0, 'corginador', 'funciom', 'organo', 0, 'resultado', 0, '2017-05-17', '2017-05-18', '2017-05-19', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `cveInstitucion` int(11) NOT NULL,
  `nombreInst` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`cveInstitucion`, `nombreInst`) VALUES
(1, 'Universidad Autónoma De Querétaro'),
(2, 'Centro De Estudio De Alta Dirección'),
(3, 'Centro De Estudios Básicos y Superiores Del Sureste S.C.'),
(4, 'Centro De Estudios Científicos y Tecnológicos 14 Luis Enrique Erro Soler'),
(5, 'Centro De Estudios Científicos y Tecnológicos 9 Juan De Dios Batíz SEP'),
(6, 'Centro De Estudios Superiores Del Estado De Sonora'),
(7, 'Centro De Investigación En Computación IPN CIC'),
(8, 'Centro Universitario Hispanoamericano S.C. Universidad Hispanoamericana'),
(9, 'Colegio De Educación Profesional Técnica Del Estado De Guanajuato'),
(10, 'Colegio De Educación Profesional Técnica Del Estado De San Luis Potosí'),
(11, 'Colegio Nacional De Educación Profesional Técnica Del Estado De Jalisco'),
(12, 'Colegio Nacional De Educación Profesional Técnica Del Estado De México'),
(13, 'Colegio Nacional De Educación Profesional Técnica Tlalpan 1'),
(14, 'Conjunto Educativo S.C.'),
(15, 'Dirección General De Educación Tecnológica Industrial'),
(16, 'Escuela Normal Rural Justo Sierra Mendez'),
(17, 'Escuela Superior De Cómputo IPN ESCOM'),
(18, 'Fundación Arturo Rosenblueth'),
(19, 'Instituto De Ciencias y Estudios Superiores De Tamaulipas, A.C.'),
(20, 'Instituto De Estudios Superiores De Monterrey Campus Querétaro'),
(21, 'Instituto De Estudios Superiores De Tamaulipas, A.C.'),
(22, 'Instituto Educativo Del Noreste A.C.'),
(23, 'Instituto Galileo De Coatzacoalcos CEUNICO'),
(24, 'Instituto Nacional De Astrofísica, Óptica y Electrónica'),
(25, 'Instituto Politécnico Nacional'),
(26, 'Instituto Tecnológico Autónomo De México'),
(27, 'Instituto Tecnológico De Cancún'),
(28, 'Instituto Tecnológico De Cerro Azul'),
(29, 'Instituto Tecnológico De Chetumal, SEP'),
(30, 'Instituto Tecnológico De Chihuahua II'),
(31, 'Instituto Tecnológico De Ciudad Guzmán'),
(32, 'Instituto Tecnológico De Coatzacoalcos'),
(33, 'Instituto Tecnológico De Comitán, SEP'),
(34, 'Instituto Tecnológico De Estudios Superiores De Zamora'),
(35, 'Instituto Tecnológico De La Laguna'),
(36, 'Instituto Tecnológico De León, SEP'),
(37, 'Instituto Tecnológico De Los Mochis, SEP'),
(38, 'Instituto Tecnológico De Matamoros'),
(39, 'Instituto Tecnológico De Mérida'),
(40, 'Instituto Tecnológico De Morelia'),
(41, 'Instituto Tecnológico De Puebla'),
(42, 'Instituto Tecnológico De Puerto Vallarta'),
(43, 'Instituto Tecnológico De Querétaro'),
(44, 'Instituto Tecnológico De Tepic, SEP'),
(45, 'Instituto Tecnológico De Tlalnepantla, SEP'),
(46, 'Instituto Tecnológico De Zitácuaro, SEP'),
(47, 'Instituto Tecnológico Superior De Acatlán De Osorio'),
(48, 'Instituto Tecnológico Superior De Atlixco'),
(49, 'Instituto Tecnológico Superior De Irapuato'),
(50, 'Instituto Tecnológico Superior De Puerto Vallarta'),
(51, 'Instituto Tecnológico Superior Zacatecas Norte'),
(52, 'Instituto Tecnológico y De Estudios Superiores De Monterrey'),
(53, 'Instituto Tecnológico y De Estudios Superiores De Monterrey CEM'),
(54, 'Instituto Tecnológico y De Estudios Superiores De Monterrey CM'),
(55, 'Instituto Tecnológico y De Estudios Superiores De Monterrey CQ'),
(56, 'Instituto Tecnológico y De Estudios Superiores De Occidente'),
(57, 'Instituto Universitario Del Estado De México S.C.'),
(58, 'Latinoamericana De Ciencias y Tecnología A.C. Inst. Tec. Latinoamericano'),
(59, 'Escuela De Bachilleres y Universidad Del Golfo De México A.C.'),
(60, 'Secretaría De Educación Cultura y Deporte (Justo Sierra Mendez)'),
(61, 'SUN MICROSYSTEMS De México S.A. De C.V.'),
(62, 'Tecnológico De Estudios Superiores De Cuautitlán Izcalli'),
(63, 'Tecnológico De Estudios Superiores De Ecatepec'),
(64, 'Universidad Americana De Acapulco'),
(65, 'Universidad Autónoma De Aguascalientes'),
(66, 'Universidad Autónoma De Baja California'),
(67, 'Universidad Autónoma De Chiapas'),
(68, 'Universidad Autónoma De Chihuahua'),
(69, 'Universidad Autónoma De Ciudad Juárez'),
(70, 'Universidad Autónoma De Coahuila'),
(71, 'Universidad Autónoma De Guadalajara Campus Tabasco'),
(72, 'Universidad Autónoma De Guadalajara'),
(73, 'Universidad Autónoma De La Laguna, A.C.'),
(74, 'Universidad Autónoma De Nayarit'),
(75, 'Universidad Autónoma De Nuevo León FCFM'),
(76, 'Universidad Autónoma De Nuevo León FIME'),
(77, 'Benemérita Universidad Autónoma De Puebla'),
(78, 'Universidad Autónoma De Sinaloa'),
(79, 'UAT (Facultad De Comercio y Administración y Ciencias Sociales NL)'),
(80, 'Universidad Autónoma De Tamaulipas (Campus Matamoros)'),
(81, 'Universidad Autónoma De Tamaulipas (Campus Nuevo Laredo)'),
(82, 'Universidad Autónoma De Tamaulipas Campus Matamoros'),
(83, 'Universidad Autónoma De Tamaulipas Campus Nuevo Laredo'),
(84, 'UAT (Unidad Académica De Ciencias De La Salud y Tecnología Matamoros)'),
(85, 'Universidad Autónoma De Yucatán'),
(86, 'Universidad Autónoma Del Estado De México'),
(87, 'Universidad Autónoma Del Noreste A.C.'),
(88, 'Universidad Autónoma Metropolitana'),
(89, 'Universidad De Colima Facultad De Contabilidad y Admón. De Manzanillo'),
(90, 'Universidad De Colima Facultad De Telemática'),
(91, 'Universidad De Cuautitlán Izcalli'),
(92, 'Universidad De Guadalajara Cuciénega'),
(93, 'Universidad De Guadalajara CUSEI'),
(94, 'Universidad De Guadalajara CUSUR'),
(95, 'Universidad De Montemorelos, A.C.'),
(96, 'Universidad De Monterrey'),
(97, 'Universidad De Morelia'),
(98, 'Universidad De Sotavento A.C.'),
(99, 'Universidad Del Caribe'),
(100, 'Universidad Del Mayab'),
(101, 'Universidad Del Valle De México A.C.'),
(102, 'Universidad Emilio Cárdenas S.C.'),
(103, 'Universidad Iberoamericana A.C. Campus CD De México'),
(104, 'Universidad Iberoamericana Campus Puebla'),
(105, 'Universidad Insurgentes, S.C. Planter Sur '),
(106, 'Universidad Intercontinental Instituto Internacional De Filosofía A.C.'),
(107, 'Universidad Juárez Autónoma De Tabasco'),
(108, 'Universidad La Salle, A.C. CD De México'),
(109, 'Universidad Latina De América A.C. Morelia'),
(110, 'Universidad Loyola Del Pacífico'),
(111, 'Universidad México Americana Del Norte A.C.'),
(112, 'Universidad Nacional Autónoma De México Facultad De Ciencias'),
(113, 'Universidad Nacional Autónoma De México FES Acatlán'),
(114, 'Universidad Nacional Autónoma De México Nezahualcóyotl FES Aragón'),
(115, 'Universidad Pablo Guardado Chávez S.C.'),
(116, 'Universidad Popular Autónoma Del Estado De Puebla A.C.'),
(117, 'Universidad Regiomontana A.C.'),
(118, 'Universidad Regional Del Sureste A.C.'),
(119, 'Universidad Simón Bolívar Centros Culturales S.C.'),
(120, 'Universidad Tecnológica Americana'),
(121, 'Universidad Tecnológica De Cancén'),
(122, 'Universidad Tecnológica De La Sierra Hidalguense'),
(123, 'Universidad Tecnológica De México'),
(124, 'Universidad Tecnológica De Morelia'),
(125, 'Universidad Tecnológica De Nezahualcóyotl'),
(126, 'Universidad Tecnológica De Puebla'),
(127, 'Universidad Tecnológica Del Norte De Guanajuato'),
(128, 'Universidad Tecnológica Del Valle Del Mezquital'),
(129, 'Universidad Tecnológica Fidel Velázquez'),
(130, 'Universidad Tecnológica Tula-Tepeji'),
(131, 'Universidad Valle Del Grijalva A.C.'),
(132, 'Universidad Veracruzana'),
(133, 'Universidad Politécnica De Zacatecas'),
(134, 'Otra Institución');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lgac`
--

CREATE TABLE `lgac` (
  `cveGAC` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `campo` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividades` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lgac`
--

INSERT INTO `lgac` (`cveGAC`, `cveProfesor`, `campo`, `actividades`, `horas`) VALUES
(1, 13259, 'Campo 2 ', 'Actividades2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelestudio`
--

CREATE TABLE `nivelestudio` (
  `idEstudio` int(11) NOT NULL,
  `estudio` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nivelestudio`
--

INSERT INTO `nivelestudio` (`idEstudio`, `estudio`) VALUES
(1, 'Licenciatura'),
(2, 'Maestría'),
(3, 'Doctorado'),
(4, 'Posdoctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `nombrePais` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `nombrePais`) VALUES
(1, 'Afganistán'),
(2, 'Islas Gland'),
(3, 'Albania'),
(4, 'Alemania'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antártida'),
(9, 'Antigua y Barbuda'),
(10, 'Antillas Holandesas'),
(11, 'Arabia Saudí'),
(12, 'Argelia'),
(13, 'Argentina'),
(14, 'Armenia'),
(15, 'Aruba'),
(16, 'Australia'),
(17, 'Austria'),
(18, 'Azerbaiyán'),
(19, 'Bahamas'),
(20, 'Bahréin'),
(21, 'Bangladesh'),
(22, 'Barbados'),
(23, 'Bielorrusia'),
(24, 'Bélgica'),
(25, 'Belice'),
(26, 'Benin'),
(27, 'Bermudas'),
(28, 'Bhután'),
(29, 'Bolivia'),
(30, 'Bosnia y Herzegovina'),
(31, 'Botsuana'),
(32, 'Isla Bouvet'),
(33, 'Brasil'),
(34, 'Brunéi'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cabo Verde'),
(39, 'Islas Caimán'),
(40, 'Camboya'),
(41, 'Camerún'),
(42, 'Canadá'),
(43, 'República Centroafricana'),
(44, 'Chad'),
(45, 'República Checa'),
(46, 'Chile'),
(47, 'China'),
(48, 'Chipre'),
(49, 'Isla de Navidad'),
(50, 'Ciudad del Vaticano'),
(51, 'Islas Cocos'),
(52, 'Colombia'),
(53, 'Comoras'),
(54, 'República Democrática del Congo'),
(55, 'Congo'),
(56, 'Islas Cook'),
(57, 'Corea del Norte'),
(58, 'Corea del Sur'),
(59, 'Costa de Marfil'),
(60, 'Costa Rica'),
(61, 'Croacia'),
(62, 'Cuba'),
(63, 'Dinamarca'),
(64, 'Dominica'),
(65, 'República Dominicana'),
(66, 'Ecuador'),
(67, 'Egipto'),
(68, 'El Salvador'),
(69, 'Emiratos Árabes Unidos'),
(70, 'Eritrea'),
(71, 'Eslovaquia'),
(72, 'Eslovenia'),
(73, 'España'),
(74, 'Islas ultramarinas de Estados Unidos'),
(75, 'Estados Unidos'),
(76, 'Estonia'),
(77, 'Etiopía'),
(78, 'Islas Feroe'),
(79, 'Filipinas'),
(80, 'Finlandia'),
(81, 'Fiyi'),
(82, 'Francia'),
(83, 'Gabón'),
(84, 'Gambia'),
(85, 'Georgia'),
(86, 'Islas Georgias del Sur y Sandwich del Sur'),
(87, 'Ghana'),
(88, 'Gibraltar'),
(89, 'Granada'),
(90, 'Grecia'),
(91, 'Groenlandia'),
(92, 'Guadalupe'),
(93, 'Guam'),
(94, 'Guatemala'),
(95, 'Guayana Francesa'),
(96, 'Guinea'),
(97, 'Guinea Ecuatorial'),
(98, 'Guinea-Bissau'),
(99, 'Guyana'),
(100, 'Haití'),
(101, 'Islas Heard y McDonald'),
(102, 'Honduras'),
(103, 'Hong Kong'),
(104, 'Hungría'),
(105, 'India'),
(106, 'Indonesia'),
(107, 'Irán'),
(108, 'Iraq'),
(109, 'Irlanda'),
(110, 'Islandia'),
(111, 'Israel'),
(112, 'Italia'),
(113, 'Jamaica'),
(114, 'Japón'),
(115, 'Jordania'),
(116, 'Kazajstán'),
(117, 'Kenia'),
(118, 'Kirguistán'),
(119, 'Kiribati'),
(120, 'Kuwait'),
(121, 'Laos'),
(122, 'Lesotho'),
(123, 'Letonia'),
(124, 'Líbano'),
(125, 'Liberia'),
(126, 'Libia'),
(127, 'Liechtenstein'),
(128, 'Lituania'),
(129, 'Luxemburgo'),
(130, 'Macao'),
(131, 'ARY Macedonia'),
(132, 'Madagascar'),
(133, 'Malasia'),
(134, 'Malawi'),
(135, 'Maldivas'),
(136, 'Malí'),
(137, 'Malta'),
(138, 'Islas Malvinas'),
(139, 'Islas Marianas del Norte'),
(140, 'Marruecos'),
(141, 'Islas Marshall'),
(142, 'Martinica'),
(143, 'Mauricio'),
(144, 'Mauritania'),
(145, 'Mayotte'),
(146, 'México'),
(147, 'Micronesia'),
(148, 'Moldavia'),
(149, 'Mónaco'),
(150, 'Mongolia'),
(151, 'Montserrat'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Nicaragua'),
(158, 'Níger'),
(159, 'Nigeria'),
(160, 'Niue'),
(161, 'Isla Norfolk'),
(162, 'Noruega'),
(163, 'Nueva Caledonia'),
(164, 'Nueva Zelanda'),
(165, 'Omán'),
(166, 'Países Bajos'),
(167, 'Pakistán'),
(168, 'Palau'),
(169, 'Palestina'),
(170, 'Panamá'),
(171, 'Papúa Nueva Guinea'),
(172, 'Paraguay'),
(173, 'Perú'),
(174, 'Islas Pitcairn'),
(175, 'Polinesia Francesa'),
(176, 'Polonia'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reino Unido'),
(181, 'Reunión'),
(182, 'Ruanda'),
(183, 'Rumania'),
(184, 'Rusia'),
(185, 'Sahara Occidental'),
(186, 'Islas Salomón'),
(187, 'Samoa'),
(188, 'Samoa Americana'),
(189, 'San Cristóbal y Nevis'),
(190, 'San Marino'),
(191, 'San Pedro y Miquelón'),
(192, 'San Vicente y las Granadinas'),
(193, 'Santa Helena'),
(194, 'Santa Lucía'),
(195, 'Santo Tomé y Príncipe'),
(196, 'Senegal'),
(197, 'Serbia y Montenegro'),
(198, 'Seychelles'),
(199, 'Sierra Leona'),
(200, 'Singapur'),
(201, 'Siria'),
(202, 'Somalia'),
(203, 'Sri Lanka'),
(204, 'Suazilandia'),
(205, 'Sudáfrica'),
(206, 'Sudán'),
(207, 'Suecia'),
(208, 'Suiza'),
(209, 'Surinam'),
(210, 'Svalbard y Jan Mayen'),
(211, 'Tailandia'),
(212, 'Taiwán'),
(213, 'Tanzania'),
(214, 'Tayikistán'),
(215, 'Territorio Británico del Océano Índico'),
(216, 'Territorios Australes Franceses'),
(217, 'Timor Oriental'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad y Tobago'),
(222, 'Túnez'),
(223, 'Islas Turcas y Caicos'),
(224, 'Turkmenistán'),
(225, 'Turquía'),
(226, 'Tuvalu'),
(227, 'Ucrania'),
(228, 'Uganda'),
(229, 'Uruguay'),
(230, 'Uzbekistán'),
(231, 'Vanuatu'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Islas Vírgenes Británicas'),
(235, 'Islas Vírgenes de los Estados Unidos'),
(236, 'Wallis y Futuna'),
(237, 'Yemen'),
(238, 'Yibuti'),
(239, 'Zambia'),
(240, 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `cvePlan` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombrePlan` varchar(65) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`cvePlan`, `nombrePlan`) VALUES
('ASE', 'Asesorías'),
('INC07', 'Ingeniería en computación'),
('INC11', 'Ingeniería en computación'),
('INC99', 'Ingeniería en computación'),
('INF01', 'Licenciatura en informática'),
('INF07', 'Licenciatura en informática'),
('INF11', 'Licenciatura en informática'),
('LAT11', 'Licenciatura en administración de tecnologías de información'),
('POS', 'Posgrado'),
('SOF07', 'Ingeniería de software'),
('SOF11', 'Ingeniería de software'),
('TEL07', 'Ingeniería en telecomunicaciones'),
('TEL11', 'INGENIERIA EN TELECOMUNICACIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio`
--

CREATE TABLE `premio` (
  `cvePremio` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `cveInstitucion` int(11) NOT NULL,
  `nombrePremio` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `motivo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaObtencion` date DEFAULT NULL,
  `otraInstitucionOtorgante` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `premio`
--

INSERT INTO `premio` (`cvePremio`, `cveProfesor`, `cveInstitucion`, `nombrePremio`, `motivo`, `fechaObtencion`, `otraInstitucionOtorgante`) VALUES
(11, 13259, 19, 'Premio', 'Motivo de premio', '2017-04-15', 'null'),
(12, 13259, 134, ' nombre dos', 'por otra institucion', '2016-05-15', 'Institucion de prueba'),
(13, 123456, 134, 'NOMBRE PREMIO', 'MOTIVO DEL PREMIO', '2017-05-29', 'NOMBRE DE LA OTRA INSTITUCION'),
(14, 123456, 10, ' NOMBRE 2', ' MOTIVO 2', '2017-05-30', 'NOMBRE DE LA OTRA INSTITUCION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccionacademica`
--

CREATE TABLE `produccionacademica` (
  `cveProduccionAcademica` int(11) NOT NULL,
  `idProposito` int(11) NOT NULL,
  `idPais` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `cveTipoProduccion` int(11) NOT NULL,
  `cveInstitucion` int(11) DEFAULT NULL,
  `nombInstitucion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `autorProduccion` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tituloProduccion` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paraCurriculum` tinyint(1) DEFAULT NULL,
  `fechaPublicacion` date DEFAULT NULL,
  `nombreRevistaArticulo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `editorialProduccion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `volumenProduccion` int(11) DEFAULT NULL,
  `ISSN` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paginaInicio` int(11) DEFAULT NULL,
  `paginaFin` int(11) DEFAULT NULL,
  `descripcionProduccion` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `urlArticulo` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `indiceRegistroRevista` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edicionProduccion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tiraje` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ISBN` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tituloCapitulo` varchar(140) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoParticipacion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numeroPaginas` int(11) DEFAULT NULL,
  `nombreCongreso` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoProduccion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudadProduccion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `archivoPDF` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clasifPatente` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usoPatente` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numeroRegistroPatente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuarioPatente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `produccionacademica`
--

INSERT INTO `produccionacademica` (`cveProduccionAcademica`, `idProposito`, `idPais`, `cveProfesor`, `cveTipoProduccion`, `cveInstitucion`, `nombInstitucion`, `autorProduccion`, `tituloProduccion`, `paraCurriculum`, `fechaPublicacion`, `nombreRevistaArticulo`, `editorialProduccion`, `volumenProduccion`, `ISSN`, `paginaInicio`, `paginaFin`, `descripcionProduccion`, `urlArticulo`, `indiceRegistroRevista`, `edicionProduccion`, `tiraje`, `ISBN`, `tituloCapitulo`, `tipoParticipacion`, `numeroPaginas`, `nombreCongreso`, `estadoProduccion`, `ciudadProduccion`, `archivoPDF`, `clasifPatente`, `usoPatente`, `numeroRegistroPatente`, `usuarioPatente`, `idEstado`) VALUES
(1, 5, 146, 13259, 1, NULL, '', 'AUTOR DE PRUEBA', 'TITULO DE PRUEBA', 1, '2017-05-23', 'PRUEBA1', 'PRUEBA DEL 23', 1, 'PRUEBA23', 4, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(2, 2, 146, 13259, 2, NULL, '', 'PRUEBA 2', 'DE PRUEBA 2', 1, '2017-05-24', 'PRUEBA', 'de', 2, 'PRUEBA18.59', 2, 3, 'ES PRUEBA 2', 'ES PRUEBA 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(3, 4, 146, 13259, 3, NULL, '', 'PRUEBA 3', 'PRUEBA 3', 1, '2017-05-23', 'PRUEBA', 'PRUEBA', 2, 'PRUEBA19.01', 8, 10, 'ES UNA PRUEBA 3', 'ES UNA PRUEBA', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(4, 2, 146, 13259, 5, NULL, '', 'AUTOR DE PRUEBA', 'TITULO DE PRUEBA', 1, '2017-05-23', NULL, 'PRUEBA 23', NULL, NULL, 5, 6, NULL, NULL, NULL, 'EDICION23', 'EL 23', 'PRUEBA 14.39', 'PRUEBA 14.39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(6, 2, 102, 13259, 8, 119, '', 'AUTOR DE PRUEBA 2', 'HORA 12.05', 1, '2017-05-25', NULL, NULL, NULL, NULL, NULL, NULL, 'DESCRIPCION DE PRUEBA 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 146, 13259, 7, NULL, '', 'NOMBRE DE PRUEBA', 'TITULO DE PRUEBA', 1, '2017-05-23', NULL, 'prueba 2', NULL, NULL, 4, 5, NULL, NULL, NULL, 'prueba2', 'la segunda', '222 de 25.5', NULL, 'prueba 2', 1, 'ES PRUEBA', 'Durango', 'DURANGO', NULL, NULL, NULL, NULL, NULL, 2),
(8, 3, 146, 13259, 7, NULL, '', 'NOMBRE DE PRUEBA', 'TITULO DE PRUEBA', 1, '2017-05-23', NULL, NULL, NULL, NULL, 4, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ES PRUEBA', 'Durango', 'DURANGO', NULL, NULL, NULL, NULL, NULL, 2),
(9, 5, 146, 13259, 11, NULL, '', 'AUTOR PRUEBA 2', 'TITULO PRUEBA 2', 1, '2017-05-25', NULL, NULL, NULL, NULL, NULL, NULL, 'DESCRIP PRUEBA 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NO 2', 'PRUEBA USO 2', '2dA PRUEBA', 'PRUEBA 2', 4),
(10, 3, 146, 123456, 10, NULL, '', 'AUTOR DE PRUEBA', 'PRUEBA', 1, '2017-05-25', NULL, NULL, NULL, NULL, 6, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CONGRESO PRUEBA', 'México', 'TLANEPANTAL', NULL, NULL, NULL, NULL, NULL, 1),
(11, 3, 146, 13259, 10, NULL, '', 'AUTOR DE PRUEBA', 'PRUEBA', 1, '2017-05-25', NULL, NULL, NULL, NULL, 6, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CONGRESO PRUEBA', 'México', 'TLANEPANTAL', NULL, NULL, NULL, NULL, NULL, 1),
(12, 4, 146, 13259, 9, NULL, '', 'PRUEBA', 'PRUEBA', 1, '2017-05-25', NULL, NULL, NULL, NULL, 27, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PRUEBA', 'Baja California Sur', 'AGUASCALIENTE ', NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `cveProfesor` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` tinyint(1) DEFAULT NULL,
  `curp` varchar(18) COLLATE utf8_spanish_ci DEFAULT NULL,
  `entidadNacimiento` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `telefonoProfesor` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefonoTrabajo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emailAdicional` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tienePromep` tinyint(1) DEFAULT NULL,
  `fechaPromep` date DEFAULT NULL,
  `tieneSNI` tinyint(1) DEFAULT NULL,
  `fechaSNI` date DEFAULT NULL,
  `idPais` int(11) NOT NULL,
  `idEdoCivil` int(11) NOT NULL,
  `ext` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `habilitado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`cveProfesor`, `nombre`, `genero`, `curp`, `entidadNacimiento`, `fechaNac`, `telefonoProfesor`, `telefonoTrabajo`, `email`, `emailAdicional`, `tienePromep`, `fechaPromep`, `tieneSNI`, `fechaSNI`, `idPais`, `idEdoCivil`, `ext`, `habilitado`) VALUES
(13259, 'Ibarra Corona Diego Octavio', 1, 'IACD910628HMCBRG05', 'México', '1991-06-28', '4423178255', '1921200', 'diego.ico@outlook.com', 'diego.octavio.ibarra@uaq.mx', 0, '0000-00-00', 0, '0000-00-00', 146, 1, '5914', 0),
(123456, 'Olvera De Jesus Josue', 1, 'OEJJ921115HQTLSS05', 'Querétaro', '1992-12-15', '123456789410', '12345678', 'jdej271@gmail.com', 'josue.olvera@uaq.com.mx', 0, '0000-00-00', 0, '0000-00-00', 146, 1, '4561', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proposito`
--

CREATE TABLE `proposito` (
  `idProposito` int(11) NOT NULL,
  `proposito` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proposito`
--

INSERT INTO `proposito` (`idProposito`, `proposito`) VALUES
(1, 'Asimilación de Tecnología'),
(2, 'Divulgación Científica'),
(3, 'Divulgación del Conocimiento'),
(4, 'Generación de Conocimiento'),
(5, 'Investigación Aplicada'),
(6, 'Investigación Científica'),
(7, 'Investigación Teórica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectoinvestigacion`
--

CREATE TABLE `proyectoinvestigacion` (
  `cveProyectoInvestigacion` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombrePatrocinador` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaInicioProyecto` date DEFAULT NULL,
  `fechaFinProyecto` date DEFAULT NULL,
  `patrocinadorInterno` tinyint(1) DEFAULT NULL,
  `investigadores` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alumnos` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividades` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `consideracionCurriculum` tinyint(1) DEFAULT NULL,
  `miembros` int(11) DEFAULT NULL,
  `LGACs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyectoinvestigacion`
--

INSERT INTO `proyectoinvestigacion` (`cveProyectoInvestigacion`, `cveProfesor`, `titulo`, `nombrePatrocinador`, `fechaInicioProyecto`, `fechaFinProyecto`, `patrocinadorInterno`, `investigadores`, `alumnos`, `actividades`, `consideracionCurriculum`, `miembros`, `LGACs`) VALUES
(2, 13259, '  Titulo 2', 'Patrocinador', '2016-12-15', '2017-05-25', 0, 'Investigadores 2', 'Alumnos', 'Actividades 2', NULL, 100, 500),
(4, 13259, 'Prueba', 'Prueba', '2017-05-15', '2017-05-02', 1, 'PRUEBAS', 'PRUEBAS', 'PRUEBAS', NULL, 111, 111),
(5, 13259, 'PRUEBA2', 'PRUEBA2', '2017-05-15', '2017-05-18', 1, 'PRUEBA', 'PRUEBA1', 'PRUEBA', NULL, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproduccion`
--

CREATE TABLE `tipoproduccion` (
  `cveTipoProduccion` int(11) NOT NULL,
  `nombreTipoProduccion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipoproduccion`
--

INSERT INTO `tipoproduccion` (`cveTipoProduccion`, `nombreTipoProduccion`) VALUES
(1, 'Artículo'),
(2, 'Artículo arbitrado'),
(3, 'Artículo en revista indexada'),
(4, 'Asesoría'),
(5, 'Capítulo de libro'),
(6, 'Consultoría'),
(7, 'Libro'),
(8, 'Material de apoyo'),
(9, 'Memorias'),
(10, 'Memorias en extenso'),
(11, 'Patente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE `tutoria` (
  `cveTutoria` int(11) NOT NULL,
  `cveProfesor` int(11) NOT NULL,
  `cvePlan` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombreEstudiante` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `tipo` varchar(160) COLLATE utf8_spanish_ci DEFAULT NULL,
  `terminado` tinyint(1) DEFAULT NULL,
  `idEstudio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tutoria`
--

INSERT INTO `tutoria` (`cveTutoria`, `cveProfesor`, `cvePlan`, `nombreEstudiante`, `fechaInicio`, `fechaFin`, `tipo`, `terminado`, `idEstudio`) VALUES
(1, 13259, 'POS', 'Josue Olvera De Jesus', '2014-05-05', '2017-05-25', 'Tipo 2', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(6) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `password`) VALUES
(1, 'root', '1234'),
(2, '14431', '14431.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idArea`);

--
-- Indices de la tabla `asesoriaconsultoria`
--
ALTER TABLE `asesoriaconsultoria`
  ADD PRIMARY KEY (`cveAsesoriaConsultoria`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cveTipoProduccion` (`cveTipoProduccion`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cveCurso`),
  ADD KEY `cvePlan` (`cvePlan`);

--
-- Indices de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  ADD PRIMARY KEY (`cveDatosLaborales`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cveInstitucion` (`cveInstitucion`);

--
-- Indices de la tabla `direccionindividualizada`
--
ALTER TABLE `direccionindividualizada`
  ADD PRIMARY KEY (`cveDireccionInd`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cveInstitucion` (`cveInstitucion`),
  ADD KEY `idEstudio` (`idEstudio`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `docencia`
--
ALTER TABLE `docencia`
  ADD PRIMARY KEY (`cveDocencia`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cveInstitucion` (`cveInstitucion`),
  ADD KEY `cveCurso` (`cveCurso`),
  ADD KEY `idEstudio` (`idEstudio`);

--
-- Indices de la tabla `edocivil`
--
ALTER TABLE `edocivil`
  ADD PRIMARY KEY (`idEdoCivil`);

--
-- Indices de la tabla `estadoactual`
--
ALTER TABLE `estadoactual`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`cveEstudio`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cveInstitucion` (`cveInstitucion`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idArea` (`idArea`),
  ADD KEY `idEstudio` (`idEstudio`);

--
-- Indices de la tabla `gestionacademica`
--
ALTER TABLE `gestionacademica`
  ADD PRIMARY KEY (`cveGestionAcademica`),
  ADD KEY `cveProfesor` (`cveProfesor`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`cveInstitucion`);

--
-- Indices de la tabla `lgac`
--
ALTER TABLE `lgac`
  ADD PRIMARY KEY (`cveGAC`),
  ADD KEY `cveProfesor` (`cveProfesor`);

--
-- Indices de la tabla `nivelestudio`
--
ALTER TABLE `nivelestudio`
  ADD PRIMARY KEY (`idEstudio`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`cvePlan`);

--
-- Indices de la tabla `premio`
--
ALTER TABLE `premio`
  ADD PRIMARY KEY (`cvePremio`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cveInstitucion` (`cveInstitucion`);

--
-- Indices de la tabla `produccionacademica`
--
ALTER TABLE `produccionacademica`
  ADD PRIMARY KEY (`cveProduccionAcademica`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cveInstitucion` (`cveInstitucion`),
  ADD KEY `cveTipoProduccion` (`cveTipoProduccion`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idEstado` (`idEstado`),
  ADD KEY `idProposito` (`idProposito`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`cveProfesor`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idEdoCivil` (`idEdoCivil`);

--
-- Indices de la tabla `proposito`
--
ALTER TABLE `proposito`
  ADD PRIMARY KEY (`idProposito`);

--
-- Indices de la tabla `proyectoinvestigacion`
--
ALTER TABLE `proyectoinvestigacion`
  ADD PRIMARY KEY (`cveProyectoInvestigacion`),
  ADD KEY `cveProfesor` (`cveProfesor`);

--
-- Indices de la tabla `tipoproduccion`
--
ALTER TABLE `tipoproduccion`
  ADD PRIMARY KEY (`cveTipoProduccion`);

--
-- Indices de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`cveTutoria`),
  ADD KEY `cveProfesor` (`cveProfesor`),
  ADD KEY `cvePlan` (`cvePlan`),
  ADD KEY `idEstudio` (`idEstudio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `asesoriaconsultoria`
--
ALTER TABLE `asesoriaconsultoria`
  MODIFY `cveAsesoriaConsultoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `cveCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;
--
-- AUTO_INCREMENT de la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  MODIFY `cveDatosLaborales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `direccionindividualizada`
--
ALTER TABLE `direccionindividualizada`
  MODIFY `cveDireccionInd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `docencia`
--
ALTER TABLE `docencia`
  MODIFY `cveDocencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `edocivil`
--
ALTER TABLE `edocivil`
  MODIFY `idEdoCivil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `estadoactual`
--
ALTER TABLE `estadoactual`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `cveEstudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `gestionacademica`
--
ALTER TABLE `gestionacademica`
  MODIFY `cveGestionAcademica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `cveInstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT de la tabla `lgac`
--
ALTER TABLE `lgac`
  MODIFY `cveGAC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `nivelestudio`
--
ALTER TABLE `nivelestudio`
  MODIFY `idEstudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT de la tabla `premio`
--
ALTER TABLE `premio`
  MODIFY `cvePremio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `produccionacademica`
--
ALTER TABLE `produccionacademica`
  MODIFY `cveProduccionAcademica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `proposito`
--
ALTER TABLE `proposito`
  MODIFY `idProposito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `proyectoinvestigacion`
--
ALTER TABLE `proyectoinvestigacion`
  MODIFY `cveProyectoInvestigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipoproduccion`
--
ALTER TABLE `tipoproduccion`
  MODIFY `cveTipoProduccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  MODIFY `cveTutoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asesoriaconsultoria`
--
ALTER TABLE `asesoriaconsultoria`
  ADD CONSTRAINT `asesoriaconsultoria_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `asesoriaconsultoria_ibfk_2` FOREIGN KEY (`cveTipoProduccion`) REFERENCES `tipoproduccion` (`cveTipoProduccion`),
  ADD CONSTRAINT `asesoriaconsultoria_ibfk_3` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `asesoriaconsultoria_ibfk_4` FOREIGN KEY (`idEstado`) REFERENCES `estadoactual` (`idEstado`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`cvePlan`) REFERENCES `plan` (`cvePlan`);

--
-- Filtros para la tabla `datoslaborales`
--
ALTER TABLE `datoslaborales`
  ADD CONSTRAINT `datoslaborales_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `datoslaborales_ibfk_2` FOREIGN KEY (`cveInstitucion`) REFERENCES `institucion` (`cveInstitucion`);

--
-- Filtros para la tabla `direccionindividualizada`
--
ALTER TABLE `direccionindividualizada`
  ADD CONSTRAINT `direccionindividualizada_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `direccionindividualizada_ibfk_2` FOREIGN KEY (`cveInstitucion`) REFERENCES `institucion` (`cveInstitucion`),
  ADD CONSTRAINT `direccionindividualizada_ibfk_3` FOREIGN KEY (`idEstudio`) REFERENCES `nivelestudio` (`idEstudio`),
  ADD CONSTRAINT `direccionindividualizada_ibfk_4` FOREIGN KEY (`idEstado`) REFERENCES `estadoactual` (`idEstado`);

--
-- Filtros para la tabla `docencia`
--
ALTER TABLE `docencia`
  ADD CONSTRAINT `docencia_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `docencia_ibfk_2` FOREIGN KEY (`cveInstitucion`) REFERENCES `institucion` (`cveInstitucion`),
  ADD CONSTRAINT `docencia_ibfk_3` FOREIGN KEY (`cveCurso`) REFERENCES `curso` (`cveCurso`),
  ADD CONSTRAINT `docencia_ibfk_4` FOREIGN KEY (`idEstudio`) REFERENCES `nivelestudio` (`idEstudio`);

--
-- Filtros para la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD CONSTRAINT `estudio_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `estudio_ibfk_2` FOREIGN KEY (`cveInstitucion`) REFERENCES `institucion` (`cveInstitucion`),
  ADD CONSTRAINT `estudio_ibfk_3` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `estudio_ibfk_4` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`),
  ADD CONSTRAINT `estudio_ibfk_5` FOREIGN KEY (`idEstudio`) REFERENCES `nivelestudio` (`idEstudio`);

--
-- Filtros para la tabla `gestionacademica`
--
ALTER TABLE `gestionacademica`
  ADD CONSTRAINT `gestionacademica_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`);

--
-- Filtros para la tabla `lgac`
--
ALTER TABLE `lgac`
  ADD CONSTRAINT `lgac_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `premio`
--
ALTER TABLE `premio`
  ADD CONSTRAINT `premio_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `premio_ibfk_2` FOREIGN KEY (`cveInstitucion`) REFERENCES `institucion` (`cveInstitucion`);

--
-- Filtros para la tabla `produccionacademica`
--
ALTER TABLE `produccionacademica`
  ADD CONSTRAINT `produccionacademica_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `produccionacademica_ibfk_2` FOREIGN KEY (`cveInstitucion`) REFERENCES `institucion` (`cveInstitucion`),
  ADD CONSTRAINT `produccionacademica_ibfk_3` FOREIGN KEY (`cveTipoProduccion`) REFERENCES `tipoproduccion` (`cveTipoProduccion`),
  ADD CONSTRAINT `produccionacademica_ibfk_4` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `produccionacademica_ibfk_5` FOREIGN KEY (`idEstado`) REFERENCES `estadoactual` (`idEstado`),
  ADD CONSTRAINT `produccionacademica_ibfk_6` FOREIGN KEY (`idProposito`) REFERENCES `proposito` (`idProposito`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `profesor_ibfk_2` FOREIGN KEY (`idEdoCivil`) REFERENCES `edocivil` (`idEdoCivil`);

--
-- Filtros para la tabla `proyectoinvestigacion`
--
ALTER TABLE `proyectoinvestigacion`
  ADD CONSTRAINT `proyectoinvestigacion_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`);

--
-- Filtros para la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD CONSTRAINT `tutoria_ibfk_1` FOREIGN KEY (`cveProfesor`) REFERENCES `profesor` (`cveProfesor`),
  ADD CONSTRAINT `tutoria_ibfk_2` FOREIGN KEY (`cvePlan`) REFERENCES `plan` (`cvePlan`),
  ADD CONSTRAINT `tutoria_ibfk_3` FOREIGN KEY (`idEstudio`) REFERENCES `nivelestudio` (`idEstudio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
