-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2015 a las 22:00:27
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE IF NOT EXISTS `datospersonales` (
  `NIF` varchar(10) DEFAULT NULL,
  `NOMBRE` varchar(15) DEFAULT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL,
  `EDAD` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`NIF`, `NOMBRE`, `APELLIDO`, `EDAD`) VALUES
('51972854W', 'MARÍA', 'GOMEZ', 27),
('50193568W', 'Juán', 'Gómez', 18),
('51982457B', 'Elena', 'Martín', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos3`
--

CREATE TABLE IF NOT EXISTS `productos3` (
  `CODIGOARTICULO` varchar(4) DEFAULT NULL,
  `SECCION` varchar(11) DEFAULT NULL,
  `NOMBREARTICULO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos3`
--

INSERT INTO `productos3` (`CODIGOARTICULO`, `SECCION`, `NOMBREARTICULO`) VALUES
('uno', 'uno', 'uno'),
('uno', 'uno', 'uno'),
('AR43', 'CONFECCIÓN', 'VESTIDO SEÑORA'),
('AR44', 'DEPORTES', 'RAQUETA BADMINGTON'),
('123', 'juegos', 'XBOX 360'),
('AR88', 'DEPORTES', 'BALON BALONMANO'),
('AR88', 'DEPORTES', 'BALON BALONMANO'),
('AR69', 'picos', 'picos parados'),
('99', 'PICHULAS', 'PICHULA RICA'),
('9999', 'saiyajin', 'saiyajin pichulon'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sheet1`
--

CREATE TABLE IF NOT EXISTS `sheet1` (
  `People QuickFacts` varchar(85) DEFAULT NULL,
  `Georgia` varchar(11) DEFAULT NULL,
  `USA` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sheet1`
--

INSERT INTO `sheet1` (`People QuickFacts`, `Georgia`, `USA`) VALUES
('Population, 2014 estimate', '10,097,343', '318,857,056'),
('Population, 2010 (April 1) estimates base', '9,688,681', '308,758,105'),
('Population, percent change - April 1, 2010 to July 1, 2014', '4.2%', '3.3%'),
('Population, 2010', '9,687,653', '308,745,538'),
('Persons under 5 years, percent, 2014', '6.6%', '6.2%'),
('Persons under 18 years, percent, 2014', '24.7%', '23.1%'),
('Persons 65 years and over, percent, 2014', '12.4%', '14.5%'),
('Female persons, percent, 2014', '51.2%', '50.8%'),
('White alone, percent, 2014 (a)', '62.1%', '77.4%'),
('Black or African American alone, percent, 2014 (a)', '31.5%', '13.2%'),
('American Indian and Alaska Native alone, percent, 2014 (a)', '0.5%', '1.2%'),
('Asian alone, percent, 2014 (a)', '3.8%', '5.4%'),
('Native Hawaiian and Other Pacific Islander alone, percent, 2014 (a)', '0.1%', '0.2%'),
('Two or More Races, percent, 2014', '2.0%', '2.5%'),
('Hispanic or Latino, percent, 2014 (b)', '9.3%', '17.4%'),
('White alone, not Hispanic or Latino, percent, 2014', '54.3%', '62.1%'),
('Living in same house 1 year & over, percent, 2009-2013', '83.6%', '84.9%'),
('Foreign born persons, percent, 2009-2013', '9.7%', '12.9%'),
('Language other than English spoken at home, pct age 5+, 2009-2013', '13.3%', '20.7%'),
('High school graduate or higher, percent of persons age 25+, 2009-2013', '84.7%', '86.0%'),
('Bachelor''s degree or higher, percent of persons age 25+, 2009-2013', '28.0%', '28.8%'),
('Veterans, 2009-2013', '690,208', '21,263,779'),
('Mean travel time to work (minutes), workers age 16+, 2009-2013', '27', '25,5'),
('Housing units, 2014', '4,151,190', '133,957,180'),
('Homeownership rate, 2009-2013', '65.1%', '64.9%'),
('Housing units in multi-unit structures, percent, 2009-2013', '20.5%', '26.0%'),
('Median value of owner-occupied housing units, 2009-2013', '$151,300', '$176,700'),
('Households, 2009-2013', '3,518,097', '115,610,216'),
('Persons per household, 2009-2013', '2,71', '2,63'),
('Per capita money income in past 12 months (2013 dollars), 2009-2013', '$25,182', '$28,155'),
('Median household income, 2009-2013', '$49,179', '$53,046'),
('Persons below poverty level, percent, 2009-2013', '18.2%', '15.4%'),
('Business QuickFacts', 'Georgia', 'USA'),
('Private nonfarm establishments, 2013', '217,559', '7,488,353'),
('Private nonfarm employment, 2013', '3,458,050', '118,266,253'),
('Private nonfarm employment, percent change, 2012-2013', '2.0%', '2.0%'),
('Nonemployer establishments, 2013', '816,360', '23,005,620'),
('Total number of firms, 2007', '901,105', '27,092,908'),
('Black-owned firms, percent, 2007', '20.4%', '7.1%'),
('American Indian- and Alaska Native-owned firms, percent, 2007', '0.7%', '0.9%'),
('Asian-owned firms, percent, 2007', '5.1%', '5.7%'),
('Native Hawaiian and Other Pacific Islander-owned firms, percent, 2007', '0.1%', '0.1%'),
('Hispanic-owned firms, percent, 2007', '3.6%', '8.3%'),
('Women-owned firms, percent, 2007', '30.9%', '28.8%'),
('Manufacturers shipments, 2007 ($1000)', '144,280,774', '5,319,456,312'),
('Merchant wholesaler sales, 2007 ($1000)', '141,962,359', '4,174,286,516'),
('Retail sales, 2007 ($1000)', '117,516,907', '3,917,663,456'),
('Retail sales per capita, 2007', '$12,326', '$12,990'),
('Accommodation and food services sales, 2007 ($1000)', '16,976,235', '613,795,732'),
('Building permits, 2014', '39,423', '1,046,363'),
('Geography QuickFacts', 'Georgia', 'USA'),
('Land area in square miles, 2010', '57,513.49', '3,531,905.43'),
('Persons per square mile, 2010', '168,4', '87,4'),
('FIPS Code', '13', ''),
('(a) Includes persons reporting only one race.', NULL, NULL),
('(b) Hispanics may be of any race, so also are included in applicable race categories.', NULL, NULL),
('FN: Footnote on this item for this area in place of data', NULL, NULL),
('NA: Not available', NULL, NULL),
('D: Suppressed to avoid disclosure of confidential information', NULL, NULL),
('X: Not applicable', NULL, NULL),
('S: Suppressed; does not meet publication standards', NULL, NULL),
('Z: Value greater than zero but less than half unit of measure shown', NULL, NULL),
('F: Fewer than 100 firms', NULL, NULL),
('Source: US Census Bureau State & County QuickFacts', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
