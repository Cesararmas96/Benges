-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2019 a las 16:27:16
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
-- Base de datos: `bienesnacionales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbitacora`
--

CREATE TABLE `tbitacora` (
  `idtbitacora` int(11) NOT NULL,
  `direccionbit` varchar(100) NOT NULL,
  `fechabit` datetime NOT NULL,
  `ipbit` char(16) NOT NULL,
  `operacionbit` varchar(45) DEFAULT NULL,
  `valoranteriorbit` varchar(45) DEFAULT NULL,
  `nuevovalorbit` varchar(45) DEFAULT NULL,
  `tusuario_idtusuario` char(45) NOT NULL,
  `accesobit` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbitacora`
--

INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(74, '/xampp/la-mala/Benges/vista/intranet.php', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(75, '/xampp/la-mala/Benges/vista/intranet.php?vista=reasignacion/reasignacion', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(76, '/xampp/la-mala/Benges/vista/intranet.php?vista=marca/marca', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(77, '/xampp/la-mala/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(78, '/xampp/la-mala/Benges/vista/intranet.php', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(79, '/xampp/la-mala/Benges/vista/intranet.php?vista=seguridad/modulo', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(80, '/xampp/la-mala/Benges/vista/intranet.php?vista=seguridad/servicio', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(81, '/xampp/la-mala/Benges/vista/intranet.php?vista=seguridad/rol', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(82, '/xampp/la-mala/Benges/vista/intranet.php?vista=seguridad/asignacion', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(83, '/xampp/la-mala/Benges/vista/intranet.php?vista=usuario/usuario', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(84, '/xampp/la-mala/Benges/vista/intranet.php?vista=bien/bien', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(85, '/xampp/la-mala/Benges/vista/intranet.php', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(86, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(87, '/xampp/13-04/Benges/vista/intranet.php?vista=usuario/usuario', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(88, '/xampp/13-04/Benges/vista/intranet.php?vista=usuario/registrar_usuario', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(89, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-13 03:04:00', '::1', '', '', '', '24936851', 1),
(90, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(91, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(92, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(93, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(94, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(95, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(96, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(97, '/xampp/13-04/Benges/vista/intranet.php?vista=condicion/condicion', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(98, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(99, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(100, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(101, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(102, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(103, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(104, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-13 06:04:00', '::1', '', '', '', '24936851', 1),
(105, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(106, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(107, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(108, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(109, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(110, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(111, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(112, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(113, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(114, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(115, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(116, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(117, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(118, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(119, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(120, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(121, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(122, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(123, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(124, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(125, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(126, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(127, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(128, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(129, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(130, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(131, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(132, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(133, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(134, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(135, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(136, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(137, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 02:04:00', '::1', '', '', '', '24936851', 1),
(138, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(139, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(140, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(141, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(142, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(143, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(144, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(145, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(146, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(147, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(148, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(149, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(150, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(151, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(152, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(153, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(154, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(155, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(156, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(157, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(158, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(159, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(160, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(161, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(162, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(163, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(164, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(165, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(166, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(167, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(168, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(169, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(170, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(171, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(172, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(173, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(174, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(175, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(176, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(177, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(178, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(179, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(180, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/consultar_sede&id=1', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(181, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/consultar_sede&id=1', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(182, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/consultar_sede&id=1', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(183, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/consultar_sede&id=1', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(184, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/consultar_sede&id=1', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(185, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(186, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(187, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(188, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(189, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(190, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(191, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(192, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(193, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(194, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(195, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(196, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(197, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(198, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(199, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(200, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(201, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(202, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(203, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(204, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(205, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(206, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(207, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(208, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(209, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(210, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(211, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(212, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(213, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(214, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(215, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(216, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 03:04:00', '::1', '', '', '', '24936851', 1),
(217, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(218, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(219, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(220, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(221, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(222, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(223, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(224, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(225, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(226, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(227, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(228, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(229, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(230, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(231, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(232, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(233, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(234, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(235, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(236, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(237, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(238, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(239, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(240, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(241, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(242, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(243, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(244, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(245, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(246, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(247, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(248, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(249, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(250, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(251, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(252, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(253, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(254, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(255, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(256, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(257, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(258, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(259, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(260, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(261, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(262, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(263, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/registrar_sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(264, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(265, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(266, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(267, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(268, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(269, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(270, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(271, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(272, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(273, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(274, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(275, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(276, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(277, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(278, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(279, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(280, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(281, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(282, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(283, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(284, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(285, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(286, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(287, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(288, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(289, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(290, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(291, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(292, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(293, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/consultar_sede&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(294, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(295, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/consultar_sede&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(296, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(297, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/rol', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(298, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/consultar_rol&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(299, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/rol', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(300, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(301, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(302, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(303, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(304, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(305, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(306, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(307, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(308, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(309, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(310, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(311, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(312, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(313, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(314, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(315, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(316, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(317, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/rol', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(318, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/consultar_rol&id=7', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(319, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/rol', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(320, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/consultar_rol&id=7', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(321, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/rol', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(322, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(323, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(324, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(325, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(326, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(327, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(328, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(329, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(330, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(331, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(332, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(333, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(334, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(335, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(336, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 04:04:00', '::1', '', '', '', '24936851', 1),
(337, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(338, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(339, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(340, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(341, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(342, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(343, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(344, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(345, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(346, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(347, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(348, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(349, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(350, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-14 05:04:00', '::1', '', '', '', '24936851', 1),
(351, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(352, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(353, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(354, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(355, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(356, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '', 0),
(357, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(358, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(359, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(360, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(361, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(362, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-16 04:04:00', '::1', '', '', '', '24936851', 1),
(363, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 05:04:00', '::1', '', '', '', '24936851', 1),
(364, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-16 05:04:00', '::1', '', '', '', '24936851', 1),
(365, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/asignacion', '2019-04-16 05:04:00', '::1', '', '', '', '24936851', 1),
(366, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/asignar_servicio', '2019-04-16 05:04:00', '::1', '', '', '', '24936851', 1),
(367, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/asignar_servicio&id=7', '2019-04-16 05:04:00', '::1', '', '', '', '24936851', 1),
(368, '/xampp/13-04/Benges/vista/intranet.php?vista=seguridad/asignar_servicio&id=7', '2019-04-16 05:04:00', '::1', '', '', '', '24936851', 1),
(369, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(370, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(371, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(372, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(373, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(374, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(375, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(376, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(377, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=0', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(378, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(379, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=0', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(380, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(381, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(382, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(383, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(384, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(385, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-16 09:04:00', '::1', '', '', '', '24936851', 1),
(386, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(387, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(388, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(389, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(390, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(391, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(392, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(393, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(394, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(395, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(396, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(397, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(398, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(399, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(400, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '', 0),
(401, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(402, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(403, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(404, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(405, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(406, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(407, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=0', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(408, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=0', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(409, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=0', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(410, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=0', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(411, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=0', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(412, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(413, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(414, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/consultar_tipo&id=0', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(415, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(416, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(417, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(418, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(419, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(420, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(421, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(422, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(423, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(424, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/consultar_tipo&id=1', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(425, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(426, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(427, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(428, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(429, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(430, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/consultar_tipo&id=1', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(431, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(432, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(433, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(434, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(435, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(436, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(437, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(438, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(439, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(440, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(441, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(442, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(443, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(444, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(445, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(446, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(447, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(448, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(449, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(450, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(451, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1);
INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(452, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(453, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(454, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(455, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(456, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(457, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(458, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(459, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(460, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(461, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(462, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(463, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(464, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(465, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(466, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=125', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(467, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(468, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=124', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(469, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(470, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(471, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(472, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=124', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(473, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=124', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(474, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(475, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(476, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(477, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(478, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(479, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(480, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(481, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(482, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(483, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(484, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(485, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(486, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(487, '/xampp/13-04/Benges/vista/intranet.php?vista=sede/sede', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 0),
(488, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(489, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(490, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(491, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(492, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(493, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(494, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(495, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(496, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(497, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(498, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(499, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(500, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(501, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(502, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(503, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(504, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(505, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(506, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(507, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(508, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=1', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(509, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(510, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(511, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(512, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(513, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(514, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(515, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(516, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(517, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(518, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(519, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(520, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(521, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(522, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(523, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(524, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(525, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(526, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(527, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(528, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(529, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(530, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(531, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(532, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(533, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 03:04:00', '::1', '', '', '', '24936851', 1),
(534, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(535, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(536, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(537, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(538, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(539, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(540, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(541, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(542, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(543, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(544, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(545, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(546, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(547, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(548, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(549, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(550, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(551, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(552, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 04:04:00', '::1', '', '', '', '24936851', 1),
(553, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(554, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(555, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(556, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(557, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(558, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(559, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(560, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(561, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(562, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(563, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(564, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(565, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(566, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(567, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(568, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(569, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(570, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(571, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(572, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(573, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(574, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(575, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(576, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(577, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(578, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(579, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(580, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(581, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(582, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/registrar_tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(583, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(584, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/consultar_tipo&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(585, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/consultar_tipo&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(586, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/consultar_tipo&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(587, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(588, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(589, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(590, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(591, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(592, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(593, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(594, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(595, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(596, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(597, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(598, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(599, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(600, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(601, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(602, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=12345678', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(603, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(604, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(605, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(606, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 05:04:00', '::1', '', '', '', '', 0),
(607, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(608, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(609, '/xampp/13-04/Benges/vista/intranet.php?vista=condicion/condicion', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(610, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(611, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(612, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(613, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(614, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(615, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(616, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(617, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(618, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(619, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(620, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(621, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(622, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(623, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(624, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(625, '/xampp/13-04/Benges/vista/intranet.php?vista=condicion/condicion', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(626, '/xampp/13-04/Benges/vista/intranet.php?vista=condicion/condicion', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 0),
(627, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(628, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(629, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(630, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(631, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=126', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(632, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(633, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(634, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(635, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=126', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(636, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=126', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(637, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=126', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(638, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(639, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(640, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(641, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=126', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(642, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(643, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/consultar_categoria&id=0', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(644, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(645, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/registrar_categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(646, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(647, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/consultar_categoria&id=0', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(648, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/consultar_categoria&id=0', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(649, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/consultar_categoria&id=0', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(650, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(651, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(652, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(653, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(654, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/consultar_tipo&id=3', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(655, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(656, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/consultar_categoria&id=0', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(657, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(658, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(659, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=126', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(660, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/consultar_modelo&id=126', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(661, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(662, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(663, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(664, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/consultar_categoria&id=0', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(665, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(666, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(667, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(668, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(669, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(670, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(671, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(672, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(673, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(674, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(675, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(676, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(677, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(678, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(679, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(680, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(681, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(682, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(683, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(684, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(685, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(686, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(687, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(688, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(689, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(690, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(691, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(692, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1234', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(693, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1234', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(694, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(695, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 05:04:00', '::1', '', '', '', '24936851', 1),
(696, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 06:04:00', '::1', '', '', '', '24936851', 1),
(697, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(698, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(699, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(700, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(701, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(702, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(703, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(704, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(705, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(706, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(707, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(708, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(709, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(710, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1234', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(711, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(712, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=12345678', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(713, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(714, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(715, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(716, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(717, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(718, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(719, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(720, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(721, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(722, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(723, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(724, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(725, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(726, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(727, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(728, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(729, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(730, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(731, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(732, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(733, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(734, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(735, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(736, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(737, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(738, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(739, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(740, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(741, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(742, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(743, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(744, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(745, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(746, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(747, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(748, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(749, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(750, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(751, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(752, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(753, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(754, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(755, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '1', 1),
(756, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '1', 1),
(757, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '1', 1),
(758, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '', 0),
(759, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(760, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(761, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(762, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(763, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(764, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(765, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(766, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(767, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(768, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1234', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(769, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(770, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=12345678', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(771, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(772, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(773, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(774, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(775, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(776, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(777, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(778, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(779, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(780, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(781, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(782, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(783, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(784, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(785, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(786, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(787, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(788, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(789, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(790, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(791, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(792, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(793, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(794, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(795, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(796, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-17 10:04:00', '::1', '', '', '', '24936851', 1),
(797, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(798, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(799, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(800, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(801, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(802, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(803, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(804, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(805, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(806, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(807, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(808, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(809, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(810, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(811, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(812, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(813, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(814, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(815, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(816, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(817, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(818, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(819, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=undefined', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(820, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(821, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1);
INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(822, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(823, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(824, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(825, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(826, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(827, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(828, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(829, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(830, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=2', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(831, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(832, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(833, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(834, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(835, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(836, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(837, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(838, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(839, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(840, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(841, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(842, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(843, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(844, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(845, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(846, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(847, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(848, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(849, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(850, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(851, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(852, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(853, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(854, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(855, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(856, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(857, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(858, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(859, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(860, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(861, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(862, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(863, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(864, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(865, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=1', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(866, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(867, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(868, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(869, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(870, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(871, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(872, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(873, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(874, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(875, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(876, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(877, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(878, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(879, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(880, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(881, '/xampp/13-04/Benges/vista/intranet.php?vista=asignacion/asignacion', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(882, '/xampp/13-04/Benges/vista/intranet.php?vista=asignacion/registrar_asignacion', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(883, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(884, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(885, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(886, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(887, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(888, '/xampp/13-04/Benges/vista/intranet.php?vista=reasignacion/reasignacion', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(889, '/xampp/13-04/Benges/vista/intranet.php?vista=reasignacion/registrar_reasignacion', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(890, '/xampp/13-04/Benges/vista/intranet.php?vista=reasignacion/registrar_reasignacion', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(891, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(892, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 12:04:00', '::1', '', '', '', '24936851', 1),
(893, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(894, '/xampp/13-04/Benges/vista/intranet.php?vista=tipo/tipo', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(895, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(896, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(897, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(898, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(899, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(900, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(901, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(902, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(903, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(904, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(905, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(906, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(907, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(908, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(909, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(910, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(911, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(912, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(913, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(914, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(915, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '24936851', 1),
(916, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(917, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(918, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(919, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(920, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(921, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(922, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(923, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(924, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(925, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(926, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(927, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(928, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(929, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(930, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(931, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(932, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(933, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(934, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(935, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(936, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(937, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(938, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(939, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(940, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(941, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(942, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 02:04:00', '::1', '', '', '', '1', 1),
(943, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(944, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(945, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(946, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(947, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(948, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(949, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(950, '/xampp/13-04/Benges/vista/intranet.php?vista=usuario/usuario', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(951, '/xampp/13-04/Benges/vista/intranet.php?vista=usuario/consultar_usuario&id=24936851', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(952, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(953, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(954, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(955, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(956, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(957, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(958, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(959, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(960, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(961, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(962, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(963, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(964, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(965, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(966, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(967, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(968, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(969, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(970, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(971, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(972, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(973, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(974, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(975, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(976, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(977, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(978, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(979, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(980, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(981, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(982, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(983, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(984, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(985, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(986, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(987, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(988, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(989, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(990, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(991, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(992, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(993, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(994, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(995, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(996, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(997, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(998, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(999, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1000, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1001, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1002, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1003, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1004, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1005, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1006, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1007, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1008, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1009, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=11111', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1010, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1011, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1012, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1013, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1014, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1015, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1016, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1017, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1018, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=9989', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1019, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1020, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1021, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1022, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1023, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1024, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1025, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1026, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1027, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1028, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1029, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1030, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1031, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1032, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1033, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1034, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1035, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1036, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1037, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1038, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=99999999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1039, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=99999999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1040, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=99999999', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1041, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1042, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1043, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1044, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=923243', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1045, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 03:04:00', '::1', '', '', '', '1', 1),
(1046, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1047, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1048, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1049, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1050, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1051, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1052, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1053, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1054, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1055, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1056, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1057, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1058, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1059, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1060, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1061, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1062, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1063, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1064, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936853', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1065, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1066, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1067, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936853', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1068, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1069, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1070, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936851', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1071, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1072, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/registrar_personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1073, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1074, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936854', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1075, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1076, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936854', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1077, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1078, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1079, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1080, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/consultar_personal&id=24936854', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1081, '/xampp/13-04/Benges/vista/intranet.php?vista=personal/personal', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1082, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1083, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1084, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1085, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1086, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1087, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1088, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1089, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1090, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1091, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1092, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1093, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1094, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1095, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1096, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1097, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1098, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1099, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1100, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1101, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1102, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=34', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1103, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1104, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1105, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1106, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1107, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1108, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1109, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1110, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1111, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1112, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1113, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1114, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1115, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1116, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1117, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1118, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1119, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1120, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1121, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1122, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1123, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1124, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1125, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1126, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '', 0),
(1127, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1128, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1129, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1130, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1131, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1132, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1133, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1134, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1135, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1136, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1137, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1138, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-18 04:04:00', '::1', '', '', '', '24936851', 1),
(1139, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-18 11:04:00', '::1', '', '', '', '24936851', 1),
(1140, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1141, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/registrar_marca', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1142, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1143, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1144, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1145, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1146, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1147, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1148, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43434', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1149, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1150, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43434', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1151, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1152, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1153, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1154, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43434', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1155, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1156, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43434', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1157, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1158, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1159, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1160, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=1', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1161, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1162, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1163, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1164, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1165, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1166, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1167, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1168, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1169, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1170, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1171, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1172, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1173, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1174, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1175, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1176, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1177, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1178, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1179, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1180, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1181, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1182, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1183, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1184, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1185, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1);
INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(1186, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1187, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1188, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1189, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1190, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1191, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1192, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1193, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1194, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1195, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1196, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1197, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1198, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1199, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1200, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1201, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1202, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1203, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1204, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1205, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1206, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1207, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1208, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1209, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1210, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1211, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1212, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1213, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1214, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1215, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1216, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1217, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1218, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1219, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1220, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1221, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1222, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1223, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1224, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1225, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1226, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1227, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1228, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1229, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1230, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1231, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1232, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1233, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1234, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1235, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1236, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1237, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1238, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1239, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1240, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1241, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1242, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1243, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1244, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1245, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1246, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1247, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1248, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1249, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1250, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1251, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1252, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1253, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1254, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1255, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1256, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1257, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1258, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1259, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1260, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1261, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1262, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/consultar_marca&id=3', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1263, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1264, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1265, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1266, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 12:04:00', '::1', '', '', '', '24936851', 1),
(1267, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1268, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1269, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1270, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1271, '/xampp/bienesNacionales01-26.2/vista/intranet.php', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1272, '/xampp/bienesNacionales01-26.2/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1273, '/xampp/bienesNacionales01-26.2/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1274, '/xampp/bienesNacionales01-26.2/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1275, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1276, '/xampp/bienesNacionales01-26.2/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1277, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1278, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1279, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1280, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1281, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1282, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1283, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1284, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1285, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1286, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1287, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1288, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1289, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1290, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1291, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1292, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1293, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1294, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1295, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1296, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1297, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1298, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1299, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1300, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1301, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1302, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1303, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1304, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1305, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1306, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1307, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1308, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1309, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1310, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1311, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1312, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1313, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43439', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1314, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1315, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1316, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1317, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1318, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1319, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1320, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1321, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1322, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1323, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1324, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1325, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1326, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1327, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1328, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1329, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43441', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1330, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1331, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1332, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1333, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1334, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1335, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43441', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1336, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1337, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1338, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1339, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1340, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1341, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1342, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1343, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1344, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1345, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1346, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1347, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1348, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1349, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 01:04:00', '::1', '', '', '', '24936851', 1),
(1350, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1351, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1352, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1353, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1354, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1355, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1356, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1357, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1358, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1359, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1360, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1361, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1362, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1363, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1364, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1365, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1366, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1367, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1368, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1369, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1370, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1371, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1372, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1373, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1374, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1375, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1376, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1377, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1378, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1379, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1380, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1381, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1382, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1383, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1384, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1385, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1386, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1387, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1388, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1389, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1390, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1391, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1392, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1393, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1394, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1395, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1396, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1397, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/registrar_departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1398, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1399, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43445', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1400, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1401, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1402, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1403, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1404, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1405, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1406, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1407, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1408, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1409, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1410, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1411, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1412, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1413, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1414, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1415, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1416, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1417, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1418, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43445', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1419, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1420, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1421, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1422, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1423, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', 'Administrador', 1),
(1424, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1425, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1426, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1427, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1428, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1429, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1430, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1431, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1432, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1433, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1434, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1435, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1436, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1437, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1438, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1439, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1440, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43445', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1441, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1442, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1443, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1444, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1445, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1446, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1447, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1448, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1449, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1450, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&datos=existe', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1451, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1452, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1453, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1454, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1455, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1456, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1457, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43445', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1458, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1459, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1460, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1461, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1462, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1463, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1464, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/consultar_departamento&id=43444', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1465, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1466, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1467, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 02:04:00', '::1', '', '', '', '24936851', 1),
(1468, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1469, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1470, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1471, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1472, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1473, '/xampp/13-04/Benges/vista/intranet.php?vista=ejemplar/ejemplar', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1474, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1475, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1476, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1477, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1478, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1479, '/xampp/13-04/Benges/vista/intranet.php?vista=categoria/categoria', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1480, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1481, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1482, '/xampp/13-04/Benges/vista/intranet.php?vista=marca/marca', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1483, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1484, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/registrar_modelo', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1485, '/xampp/13-04/Benges/vista/intranet.php?vista=modelo/modelo', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1486, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1487, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1488, '/xampp/13-04/Benges/vista/intranet.php?vista=ejemplar/ejemplar', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1489, '/xampp/13-04/Benges/vista/intranet.php?vista=ejemplar/registrar_ejemplar', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1490, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1491, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1492, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1493, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1494, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1495, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1496, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1497, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1498, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1499, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1500, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 03:04:00', '::1', '', '', '', '24936851', 1),
(1501, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1502, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1503, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien&datos=existe', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1504, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1505, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1506, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1507, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1508, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1509, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1510, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1511, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1512, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1513, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1514, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1515, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1516, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1517, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1518, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1519, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1520, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1521, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1522, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1523, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1524, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1525, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1526, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1527, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1);
INSERT INTO `tbitacora` (`idtbitacora`, `direccionbit`, `fechabit`, `ipbit`, `operacionbit`, `valoranteriorbit`, `nuevovalorbit`, `tusuario_idtusuario`, `accesobit`) VALUES
(1528, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1529, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1530, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1531, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1532, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1533, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1534, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1535, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/consultar_bien&id=10219001', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1536, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1537, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/consultar_bien&id=10219001', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1538, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1539, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1540, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1541, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 05:04:00', '::1', '', '', '', '24936851', 1),
(1542, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 05:04:00', '::1', '', '', '', '24936851', 1),
(1543, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 05:04:00', '::1', '', '', '', '24936851', 1),
(1544, '/xampp/13-04/Benges/vista/intranet.php?vista=departamento/departamento', '2019-04-19 05:04:00', '::1', '', '', '', '24936851', 1),
(1545, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 05:04:00', '::1', '', '', '', '24936851', 1),
(1546, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 05:04:00', '::1', '', '', '', '24936851', 1),
(1547, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 05:04:00', '::1', '', '', '', '24936851', 1),
(1548, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1549, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1550, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1551, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1552, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/consultar_bien&id=10219001', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1553, '/xampp/13-04/Benges/vista/intranet.php', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1554, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1),
(1555, '/xampp/13-04/Benges/vista/intranet.php?vista=bien/registrar_bien', '2019-04-19 04:04:00', '::1', '', '', '', '24936851', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcatalogo`
--

CREATE TABLE `tcatalogo` (
  `idtcatalogo` int(11) NOT NULL,
  `disponibilidadcata` int(11) NOT NULL DEFAULT '0',
  `existenciacata` int(11) NOT NULL DEFAULT '0',
  `colorcat` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcioncat` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estatuscata` tinyint(1) NOT NULL DEFAULT '1',
  `idtmodelo` int(11) NOT NULL,
  `idtcategoria` int(11) NOT NULL,
  `idtmarca` int(11) NOT NULL,
  `idttipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tcatalogo`
--

INSERT INTO `tcatalogo` (`idtcatalogo`, `disponibilidadcata`, `existenciacata`, `colorcat`, `descripcioncat`, `estatuscata`, `idtmodelo`, `idtcategoria`, `idtmarca`, `idttipo`) VALUES
(10219001, 0, 0, '#000000', 'DFDF', 1, 19001, 0, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcategoria`
--

CREATE TABLE `tcategoria` (
  `idtcategoria` int(11) NOT NULL,
  `nombrecat` varchar(100) NOT NULL,
  `estatuscat` tinyint(1) NOT NULL DEFAULT '1',
  `idttipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tcategoria`
--

INSERT INTO `tcategoria` (`idtcategoria`, `nombrecat`, `estatuscat`, `idttipo`) VALUES
(0, 'NOSD', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tclasificacion`
--

CREATE TABLE `tclasificacion` (
  `idtclasificacion` int(11) NOT NULL,
  `nombrecla` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatuscla` tinyint(1) NOT NULL,
  `idttipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdepartamento`
--

CREATE TABLE `tdepartamento` (
  `iddepartamento` int(11) NOT NULL,
  `codigodep` int(11) NOT NULL,
  `denominacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusdep` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tdepartamento`
--

INSERT INTO `tdepartamento` (`iddepartamento`, `codigodep`, `denominacion`, `estatusdep`) VALUES
(43444, 0, 'PRUE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tejemplar`
--

CREATE TABLE `tejemplar` (
  `idtejemplar` int(11) NOT NULL,
  `codigoejemp` int(11) NOT NULL,
  `serialejemp` int(11) DEFAULT NULL,
  `condicionejemp` tinyint(1) NOT NULL,
  `idtcatalogo` int(11) NOT NULL,
  `idtmovimientoalmacen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmarca`
--

CREATE TABLE `tmarca` (
  `idtmarca` int(11) NOT NULL,
  `nombremar` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusmar` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tmarca`
--

INSERT INTO `tmarca` (`idtmarca`, `nombremar`, `estatusmar`) VALUES
(1, 'HPIMK', 1),
(2, 'KG', 1),
(3, 'CANAIMA H', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmodelo`
--

CREATE TABLE `tmodelo` (
  `idtmodelo` int(11) NOT NULL,
  `nombremode` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatusmode` tinyint(1) NOT NULL DEFAULT '1',
  `idtmarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tmodelo`
--

INSERT INTO `tmodelo` (`idtmodelo`, `nombremode`, `estatusmode`, `idtmarca`) VALUES
(126, 'ERER', 1, 1),
(19000, 'krer', 1, 1),
(19001, 'GK', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmodulo`
--

CREATE TABLE `tmodulo` (
  `idtmodulo` int(11) NOT NULL,
  `nombremod` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tmodulo`
--

INSERT INTO `tmodulo` (`idtmodulo`, `nombremod`) VALUES
(4, 'Departamento'),
(3, 'Seguridad'),
(1, 'Movilizacion'),
(8, 'Configuracion'),
(10, 'Mobiliario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmovilizacion`
--

CREATE TABLE `tmovilizacion` (
  `idtmovilizacion` int(11) NOT NULL,
  `tipomov` tinyint(1) NOT NULL,
  `observacionmov` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `departamentoemimov` int(11) NOT NULL,
  `departamentorecmov` int(11) NOT NULL,
  `idtejemplar` int(11) NOT NULL,
  `idtdepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmovimientoalmacen`
--

CREATE TABLE `tmovimientoalmacen` (
  `idtmovimientoalmacen` int(11) NOT NULL,
  `tipomov` tinyint(1) NOT NULL,
  `fechamov` datetime NOT NULL,
  `cantmov` int(11) NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpersona`
--

CREATE TABLE `tpersona` (
  `idtpersona` int(11) NOT NULL,
  `cedulaper` int(8) NOT NULL,
  `nacionalidadper` tinyint(1) NOT NULL,
  `nombreunoper` varchar(45) NOT NULL,
  `nombredosper` varchar(45) DEFAULT NULL,
  `apellidounoper` varchar(45) NOT NULL,
  `apellidodosper` varchar(45) DEFAULT NULL,
  `fechanacimientoper` date NOT NULL,
  `direccionper` varchar(150) NOT NULL,
  `telefonoper` char(11) NOT NULL,
  `estatusper` tinyint(1) NOT NULL DEFAULT '1',
  `correoper` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tpersona`
--

INSERT INTO `tpersona` (`idtpersona`, `cedulaper`, `nacionalidadper`, `nombreunoper`, `nombredosper`, `apellidounoper`, `apellidodosper`, `fechanacimientoper`, `direccionper`, `telefonoper`, `estatusper`, `correoper`) VALUES
(24936851, 24936851, 1, 'CESAR', '', 'ARMAS', '', '2000-04-10', 'SFSFSFS', '11111', 1, 'CAAL2096@GMAIL.COM'),
(24936854, 460606, 0, 'FELIX', '', 'ARMAS', '', '1958-10-30', 'DAD', '', 1, 'f@f.f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trol`
--

CREATE TABLE `trol` (
  `idtrol` int(11) NOT NULL,
  `nombrerol` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trol`
--

INSERT INTO `trol` (`idtrol`, `nombrerol`) VALUES
(1, 'ADMINISTRADORS'),
(7, 'JEFE DEPARTAMENTOSD'),
(10, 'BIEN NACIONAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trol_has_tmodulo`
--

CREATE TABLE `trol_has_tmodulo` (
  `trol_idtrol` int(11) NOT NULL,
  `tmodulo_idtmodulo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trol_has_tmodulo`
--

INSERT INTO `trol_has_tmodulo` (`trol_idtrol`, `tmodulo_idtmodulo`) VALUES
(0, 7),
(0, 8),
(1, 1),
(1, 3),
(1, 4),
(1, 8),
(1, 10),
(2, 1),
(3, 1),
(3, 3),
(4, 1),
(7, 1),
(7, 8),
(7, 10),
(8, 4),
(8, 8),
(8, 10),
(9, 1),
(9, 3),
(9, 4),
(9, 8),
(9, 10),
(10, 1),
(10, 3),
(10, 4),
(10, 8),
(10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trol_has_tservicio`
--

CREATE TABLE `trol_has_tservicio` (
  `trol_idtrol` int(11) NOT NULL,
  `tservicio_idtservicio` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trol_has_tservicio`
--

INSERT INTO `trol_has_tservicio` (`trol_idtrol`, `tservicio_idtservicio`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(1, 7),
(1, 8),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 27),
(1, 28),
(1, 29),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 50),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(7, 17),
(7, 18),
(7, 19),
(7, 20),
(7, 25),
(7, 27),
(7, 28),
(7, 37),
(7, 38),
(7, 39),
(7, 40),
(7, 41),
(7, 42),
(7, 43),
(7, 44),
(7, 45),
(7, 46),
(7, 47),
(7, 48),
(7, 50),
(7, 52),
(7, 53),
(7, 54),
(7, 55),
(7, 57),
(7, 58),
(7, 67),
(7, 68),
(7, 69),
(7, 70),
(7, 71),
(7, 72),
(7, 73),
(7, 74),
(7, 75),
(7, 76),
(7, 77),
(7, 80),
(7, 82),
(7, 83),
(7, 84),
(7, 85),
(7, 86),
(7, 87),
(7, 88),
(7, 89),
(7, 91),
(7, 92),
(9, 1),
(9, 2),
(9, 4),
(9, 5),
(9, 7),
(9, 8),
(9, 10),
(9, 17),
(9, 18),
(9, 19),
(9, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tsede`
--

CREATE TABLE `tsede` (
  `idsede` int(11) NOT NULL,
  `nombresede` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatussed` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tsede`
--

INSERT INTO `tsede` (`idsede`, `nombresede`, `estatussed`) VALUES
(1, 'VENTA', 1),
(12, 'POPO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tservicio`
--

CREATE TABLE `tservicio` (
  `idtservicio` int(11) NOT NULL,
  `nombreser` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `enlaceser` varchar(40) NOT NULL,
  `visibleser` char(1) DEFAULT NULL,
  `tmodulo_idtmodulo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tservicio`
--

INSERT INTO `tservicio` (`idtservicio`, `nombreser`, `enlaceser`, `visibleser`, `tmodulo_idtmodulo`) VALUES
(1, 'Modulo', 'seguridad/modulo', '1', 3),
(2, 'Registrar modulo', 'seguridad/registrar_modulo', '0', 3),
(4, 'Servicio', 'seguridad/servicio', '1', 3),
(5, 'Registrar servicio', 'seguridad/registrar_servicio', '0', 3),
(7, 'Rol', 'seguridad/rol', '1', 3),
(8, 'Registrar rol', 'seguridad/registrar_rol', '0', 3),
(10, 'Asignacion de modulo/servicio', 'seguridad/asignacion', '1', 3),
(11, 'Asignar mÃ³dulo', 'seguridad/asignar_modulo', '0', 3),
(12, 'Asignar servicios', 'seguridad/asignar_servicio', '0', 3),
(13, 'Consultar modulo', 'seguridad/consultar_modulo', '0', 3),
(14, 'Consultar servicio', 'seguridad/consultar_servicio', '0', 3),
(15, 'Consultar rol', 'seguridad/consultar_rol', '0', 3),
(16, 'Eliminar servicio', 'seguridad/eliminar_servicio', '0', 3),
(17, 'Asignacion ', 'asignacion/asignacion', '1', 1),
(18, 'Registrar asignacion', 'asignacion/registrar_asignacion', '0', 1),
(19, 'Consultar asignacion', 'asignacion/asignacion', '0', 1),
(20, 'Desactivar traspaso', 'asignacion/desactivar_asignacion', '0', 1),
(21, 'Departamento', 'departamento/departamento', '1', 4),
(22, 'Registrar Departamento', 'departamento/registrar_departamento', '0', 4),
(23, 'Consultar Departamento', 'departamento/consultar_departamento', '0', 4),
(24, 'Desactivar Departamento', 'departamento/desactivar_departamento', '0', 4),
(25, 'Almacen', 'bien/bien', '1', 10),
(27, 'Consultar bien', 'bien/consultar_bien', '0', 10),
(28, 'Desactivar bien', 'bien/desactivar_bien', '0', 10),
(29, 'Eliminar modulo', 'seguridad/eliminar_modulo', '0', 3),
(30, 'InscripciÃ³n', 'inscripcion/curso', '1', 6),
(31, 'Registrar InscripciÃ³n', 'inscripcion/registrar_inscripcion', '0', 6),
(58, 'Consultar Personal', 'personal/consultar_personal', '0', 8),
(59, 'Usuario', 'usuario/usuario', '1', 3),
(60, 'consultar usuario', 'usuario/consultar_usuario', '0', 3),
(37, 'Marca', 'marca/marca', '1', 8),
(38, 'Registrar Marca', 'marca/registrar_marca', '0', 8),
(39, 'Tipo', 'tipo/tipo', '1', 8),
(40, 'Consultar tipo', 'tipo/consultar_tipo', '0', 8),
(41, 'Registrar tipo', 'tipo/registrar_tipo', '0', 8),
(42, 'Desactivar tipo', 'tipo/desactivar_tipo', '0', 8),
(43, 'Consultar Marca', 'marca/consultar_marca', '0', 8),
(44, 'Desactivar Marca', 'marca/desactivar_marca', '0', 8),
(45, 'Clasificacion', 'categoria/categoria', '1', 8),
(46, 'Consultar Categoria', 'categoria/consultar_categoria', '0', 8),
(47, 'Registrar Categoria', 'categoria/registrar_categoria', '0', 8),
(48, 'Desactivar Categoria', 'categoria/desactivar_categoria', '0', 8),
(50, 'Registro de Bien', 'bien/registrar_bien', '0', 10),
(54, 'Personal', 'personal/personal', '1', 8),
(55, 'Registrar Personal', 'personal/registrar_personal', '0', 8),
(57, 'Desactivar personal', 'personal/desactivar_personal', '0', 8),
(61, 'Registrar usuario', 'usuario/registrar_usuario', '0', 3),
(62, 'Desactivar usuario', 'usuario/desactivar_usuario', '0', 3),
(90, 'Reporte por usuario', 'usuario/detalle_usuario', '0', 3),
(89, 'Mostrar usuario activos', 'seguridad/seguridad', '0', 1),
(67, 'Modelo', 'modelo/modelo', '1', 8),
(68, 'consultar modelo', 'modelo/consultar_modelo', '0', 8),
(69, 'registrar modelo', 'modelo/registrar_modelo', '0', 8),
(70, 'desactivar modelo', 'modelo/desactivar_modelo', '0', 8),
(74, 'Ejemplares ', 'ejemplar/ejemplar', '1', 10),
(75, 'Consultar Ejemplar ', 'ejemplar/consultar_ejemplar', '0', 10),
(76, 'Registrar Ejemplar', 'ejemplar/registrar_ejemplar', '0', 10),
(77, 'Desactivar Ejemplar', 'ejemplar/desactivar_ejemplar', '0', 10),
(78, 'Mostrar activos del departamento', 'departamento/activos_departamento', '0', 4),
(79, 'Eliminar rol', 'seguridad/eliminar_rol', '0', 3),
(80, 'Reporte de ejemplar', '../reporte/listado_ejemplar', '0', 10),
(81, 'Reporte ejemplar departamento', 'departamento/departamento_ejemplar', '0', 4),
(91, 'Reasignacion', 'reasignacion/reasignacion', '1', 1),
(92, 'Registrar reasignacion', 'reasignacion/registrar_reasignacion', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttipo`
--

CREATE TABLE `ttipo` (
  `idttipo` int(11) NOT NULL,
  `nombretip` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatustip` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ttipo`
--

INSERT INTO `ttipo` (`idttipo`, `nombretip`, `estatustip`) VALUES
(1, 'RERDDFDF', 1),
(2, 'XCX', 1),
(3, 'ARRECHO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `idtusuario` char(45) NOT NULL,
  `claveusu` varchar(45) NOT NULL,
  `preguntausu` varchar(60) NOT NULL,
  `respuestausu` varchar(60) NOT NULL,
  `estatususu` tinyint(1) NOT NULL DEFAULT '1',
  `trol_idtrol` int(11) NOT NULL,
  `tpersona_idtpersona` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`idtusuario`, `claveusu`, `preguntausu`, `respuestausu`, `estatususu`, `trol_idtrol`, `tpersona_idtpersona`) VALUES
('24936851', '81dc9bdb52d04dc20036dbd8313ed055', 'Â¿Frio o caliente?', 'frio', 1, 1, '24936851'),
('1234', '81dc9bdb52d04dc20036dbd8313ed055', 'cargo', 'bienes nacionales', 1, 7, '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  ADD PRIMARY KEY (`idtbitacora`),
  ADD KEY `fk_tbitacora_tusuario1_idx` (`tusuario_idtusuario`);

--
-- Indices de la tabla `tcatalogo`
--
ALTER TABLE `tcatalogo`
  ADD PRIMARY KEY (`idtcatalogo`),
  ADD UNIQUE KEY `idtcategoria` (`idtcategoria`),
  ADD KEY `fk_tmodelo_idtmodelo` (`idtmodelo`),
  ADD KEY `fk_ttipo_idttipo` (`idttipo`),
  ADD KEY `fk_tmarca_idtmarca` (`idtmarca`);

--
-- Indices de la tabla `tclasificacion`
--
ALTER TABLE `tclasificacion`
  ADD PRIMARY KEY (`idtclasificacion`),
  ADD KEY `fk_ttipo_idttipo2` (`idttipo`);

--
-- Indices de la tabla `tdepartamento`
--
ALTER TABLE `tdepartamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `tejemplar`
--
ALTER TABLE `tejemplar`
  ADD PRIMARY KEY (`idtejemplar`),
  ADD KEY `fk_tcatalogo_idtcatalogo` (`idtcatalogo`),
  ADD KEY `fk_tmovimientoalmacen_idtmovimientoalmacen` (`idtmovimientoalmacen`);

--
-- Indices de la tabla `tmarca`
--
ALTER TABLE `tmarca`
  ADD PRIMARY KEY (`idtmarca`);

--
-- Indices de la tabla `tmodelo`
--
ALTER TABLE `tmodelo`
  ADD PRIMARY KEY (`idtmodelo`),
  ADD KEY `fk_tmarca_idtmarca2` (`idtmarca`);

--
-- Indices de la tabla `tmodulo`
--
ALTER TABLE `tmodulo`
  ADD PRIMARY KEY (`idtmodulo`);

--
-- Indices de la tabla `tmovilizacion`
--
ALTER TABLE `tmovilizacion`
  ADD PRIMARY KEY (`idtmovilizacion`),
  ADD KEY `fk_tejemplar_idtejemplar` (`idtejemplar`);

--
-- Indices de la tabla `tmovimientoalmacen`
--
ALTER TABLE `tmovimientoalmacen`
  ADD PRIMARY KEY (`idtmovimientoalmacen`);

--
-- Indices de la tabla `tpersona`
--
ALTER TABLE `tpersona`
  ADD PRIMARY KEY (`idtpersona`);

--
-- Indices de la tabla `trol`
--
ALTER TABLE `trol`
  ADD PRIMARY KEY (`idtrol`);

--
-- Indices de la tabla `trol_has_tmodulo`
--
ALTER TABLE `trol_has_tmodulo`
  ADD PRIMARY KEY (`trol_idtrol`,`tmodulo_idtmodulo`),
  ADD KEY `fk_trol_has_tmodulo_trol_idx` (`trol_idtrol`),
  ADD KEY `fk_trol_has_tmodulo_tmodulo_idx` (`tmodulo_idtmodulo`);

--
-- Indices de la tabla `trol_has_tservicio`
--
ALTER TABLE `trol_has_tservicio`
  ADD PRIMARY KEY (`trol_idtrol`,`tservicio_idtservicio`),
  ADD KEY `fk_trol_has_tservicio_trol1_idx` (`trol_idtrol`),
  ADD KEY `fk_trol_has_tservicio_tservicio1_idx` (`tservicio_idtservicio`);

--
-- Indices de la tabla `tsede`
--
ALTER TABLE `tsede`
  ADD PRIMARY KEY (`idsede`);

--
-- Indices de la tabla `tservicio`
--
ALTER TABLE `tservicio`
  ADD PRIMARY KEY (`idtservicio`),
  ADD KEY `fk_tservicio_tmodulo1_idx` (`tmodulo_idtmodulo`);

--
-- Indices de la tabla `ttipo`
--
ALTER TABLE `ttipo`
  ADD PRIMARY KEY (`idttipo`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`idtusuario`),
  ADD KEY `fk_tusuario_trol1_idx` (`trol_idtrol`),
  ADD KEY `fk_tusuario_tpersona1_idx` (`tpersona_idtpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  MODIFY `idtbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1556;

--
-- AUTO_INCREMENT de la tabla `tdepartamento`
--
ALTER TABLE `tdepartamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43445;

--
-- AUTO_INCREMENT de la tabla `tmarca`
--
ALTER TABLE `tmarca`
  MODIFY `idtmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tmodelo`
--
ALTER TABLE `tmodelo`
  MODIFY `idtmodelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19002;

--
-- AUTO_INCREMENT de la tabla `tmodulo`
--
ALTER TABLE `tmodulo`
  MODIFY `idtmodulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tpersona`
--
ALTER TABLE `tpersona`
  MODIFY `idtpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24936855;

--
-- AUTO_INCREMENT de la tabla `trol`
--
ALTER TABLE `trol`
  MODIFY `idtrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tservicio`
--
ALTER TABLE `tservicio`
  MODIFY `idtservicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `ttipo`
--
ALTER TABLE `ttipo`
  MODIFY `idttipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tcatalogo`
--
ALTER TABLE `tcatalogo`
  ADD CONSTRAINT `fk_tcategoria_idtcategoria` FOREIGN KEY (`idtcategoria`) REFERENCES `tclasificacion` (`idtclasificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ttipo_idttipo` FOREIGN KEY (`idttipo`) REFERENCES `ttipo` (`idttipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tclasificacion`
--
ALTER TABLE `tclasificacion`
  ADD CONSTRAINT `fk_ttipo_idttipo2` FOREIGN KEY (`idttipo`) REFERENCES `ttipo` (`idttipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tejemplar`
--
ALTER TABLE `tejemplar`
  ADD CONSTRAINT `fk_tcatalogo_idtcatalogo` FOREIGN KEY (`idtcatalogo`) REFERENCES `tcatalogo` (`idtcatalogo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tmovimientoalmacen_idtmovimientoalmacen` FOREIGN KEY (`idtmovimientoalmacen`) REFERENCES `tmovimientoalmacen` (`idtmovimientoalmacen`);

--
-- Filtros para la tabla `tmodelo`
--
ALTER TABLE `tmodelo`
  ADD CONSTRAINT `fk_tmarca_idtmarca2` FOREIGN KEY (`idtmarca`) REFERENCES `tmarca` (`idtmarca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tmovilizacion`
--
ALTER TABLE `tmovilizacion`
  ADD CONSTRAINT `fk_tejemplar_idtejemplar` FOREIGN KEY (`idtejemplar`) REFERENCES `tejemplar` (`idtejemplar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
