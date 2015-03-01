-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2015 a las 01:36:18
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `talleresintegra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departaments`
--

CREATE TABLE IF NOT EXISTS `departaments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `departament` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_02_15_191053_create_users_table', 1),
('2015_02_20_191744_create_departaments_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nick` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celphone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suburb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ps` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nick_unique` (`nick`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname_1`, `lastname_2`, `nick`, `email`, `password`, `rfc`, `phone`, `celphone`, `street`, `number`, `suburb`, `ps`, `city`, `state`, `rank`, `status`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Israel', 'Hohenheim', '', 'Shikari', 'Shikari.Guns@gmail.com', '$2y$10$oDAoxZEf0J9wlzztV1q1N.2Jc2vD4pKQ8W7aCbqxklO.3u8ovXY/u', '', '', '', '', '', '', '', '', '', 2, 1, '2015-03-01 00:32:56', '2015-03-01 00:33:51', 'eagxsoGkAUSzA2qHN8nPUkNg18U2nLPVuLC1XPlKkcNveJ169pAUlVLainol'),
(2, 'Demo', 'Demo', '', 'Demo', 'demo@demo.com', '$2y$10$FOIe4VcoAtU8Vgek6AG0Ju2GUet0HYBlT0sM6tmhr1XZfe/zBuKeW', '', '', '', '', '', '', '', '', '', 2, 1, '2015-03-01 00:33:37', '2015-03-01 00:33:37', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
