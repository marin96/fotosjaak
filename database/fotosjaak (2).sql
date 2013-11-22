-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 22 nov 2013 om 09:58
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1b`
--
CREATE DATABASE IF NOT EXISTS `am1b-fotosjaak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1b-fotosjaak`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentnummer` int(2) NOT NULL,
  `achternaam` varchar(15) NOT NULL,
  `roepnaam` varchar(15) NOT NULL,
  `klas` varchar(4) NOT NULL,
  `tel` int(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `geboortedatum` varchar(10) NOT NULL,
  PRIMARY KEY (`studentnummer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` char(150) NOT NULL,
  `infix` char(100) NOT NULL,
  `surname` char(150) NOT NULL,
  `city` char(150) NOT NULL,
  `zip_code` varchar(6) NOT NULL,
  `street` char(150) NOT NULL,
  `house_number` int(100) NOT NULL,
  `birthday` date NOT NULL,
  `sex` char(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(50) NOT NULL,
  `game_type` char(9) NOT NULL,
  `favo_game` varchar(50) NOT NULL,
  `userrole` enum('customer','root','admin') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `city`, `zip_code`, `street`, `house_number`, `birthday`, `sex`, `email`, `password`, `game_type`, `favo_game`, `userrole`) VALUES
(12, 'hoi', 'van', 'hoi', 'hoiegein', '2345HO', 'hoilaan', 3, '1999-12-12', 'male', 'hoi@hoi.hoi', 'hoi', 'fps', 'hoi2', 'customer'),
(13, 'Marin', '', 'Schermij', 'nieuwegein', '3438RS', 'bombardonlaan', 38, '1996-07-30', 'male', 'A@A.nl', 'hoi', 'fps', 'gta 5', 'customer');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werknemer`
--

CREATE TABLE IF NOT EXISTS `werknemer` (
  `wnr` varchar(10) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `voorletters` varchar(10) NOT NULL,
  `voorvoegsel` varchar(10) DEFAULT NULL,
  `adres` varchar(50) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `datum_in_dienst` varchar(10) NOT NULL,
  `sal` varchar(12) DEFAULT NULL,
  `chef` varchar(10) NOT NULL,
  PRIMARY KEY (`wnr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
