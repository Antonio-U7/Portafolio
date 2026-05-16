-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2020 a las 03:16:48
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votos2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `estado` varchar(40) NOT NULL,
  `capital` varchar(30) NOT NULL,
  `abrev` varchar(10) NOT NULL,
  `democrata` float NOT NULL,
  `republicano` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`estado`, `capital`, `abrev`, `democrata`, `republicano`) VALUES
('Alabama', 'Montgomery', 'AL', 32.4, 62.5),
('Alaska', 'Juneau', 'AK', 33.5, 62.1),
('Arizona', 'Phoenix', 'AZ', 50.1, 48.5),
('Arkansas', 'Little Rock', 'AR', 34.6, 62.6),
('California', 'Sacramento', 'CA', 65.1, 33),
('Carolina del Norte', 'Raleigh', 'NC', 48.7, 50.1),
('Carolina del Sur', 'Columbia', 'SC', 43.5, 55.1),
('Colorado', 'Denver', 'CO', 55.2, 42.2),
('Connecticut', 'Hartford', 'CT', 58, 40.4),
('Dakota del Norte', 'Bismarck', 'ND', 31.9, 65.5),
('Dakota del Sur', 'Pierre', 'SD', 35.6, 61.8),
('Delaware', 'Dover', 'DE', 58.8, 39.8),
('Florida', 'Tallahassee', 'FL', 47.9, 51.2),
('Georgia', 'Atlanta', 'GA', 49.4, 49.4),
('Hawái', 'Honolulu', 'HI', 63.7, 34.3),
('Idaho', 'Boise', 'ID', 33.1, 63.9),
('Illinois', 'Springfield', 'IL', 55.6, 42.6),
('Indiana', 'Indianápolis', 'IN', 40.8, 57.2),
('Iowa', 'Des Moines', 'IA', 45, 53.2),
('Kansas', 'Topeka', 'KS', 41.3, 56.5),
('Kentucky', 'Frankfort', 'KY', 35.7, 62.6),
('Luisiana', 'Baton Rouge', 'LA', 39.8, 58.5),
('Maine', 'Augusta', 'ME', 52.9, 44.2),
('Maryland', 'Annapolis', 'MD', 62.5, 35.8),
('Massachusetts', 'Boston', 'MA', 65.6, 32.6),
('Míchigan', 'Lansing', 'MI', 50.6, 47.9),
('Minnesota', 'Saint Paul', 'MN', 52.6, 45.4),
('Misisipi', 'Jackson', 'MS', 38.8, 59.7),
('Misuri', 'Jefferson City', 'MO', 41.3, 56.9),
('Montana', 'Helena', 'MT', 40.6, 56.9),
('Nebraska', 'Lincoln', 'NE', 39.1, 58.8),
('Nevada', 'Carson City', 'NV', 49.4, 48.5),
('New Hampshire', 'Concord', 'NH', 52.8, 45.6),
('Nueva Jersey', 'Trenton', 'NJ', 59.7, 39.2),
('Nueva York', 'Albany', 'NY', 55.7, 43),
('Nuevo México', 'Santa Fe', 'NM', 54.2, 43.6),
('Ohio', 'Columbus', 'OH', 45.2, 53.4),
('Oklahoma', 'Oklahoma City', 'OK', 32.3, 65.4),
('Oregón', 'Salem', 'OR', 57, 40.5),
('Pensilvania', 'Harrisburg', 'PA', 49.5, 49.4),
('Rhode Island', 'Providence', 'RI', 39.2, 59.4),
('Tennessee', 'Nashville', 'TN', 37.4, 60.7),
('Texas', 'Austin', 'TX', 46.4, 52.2),
('Utah', 'Salt Lake City', 'UT', 37.6, 58.7),
('Vermont', 'Montpelier', 'VT', 66.4, 30.8),
('Virginia', 'Richmond', 'VA', 54, 44.6),
('Virginia Occidental', 'Charleston', 'WV', 29.6, 68.7),
('Washington', 'Olympia', 'WA', 59.5, 38),
('Wisconsin', 'Madison', 'WI', 49.6, 48.9),
('Wyoming', 'Cheyenne', 'WY', 26.7, 70.4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
