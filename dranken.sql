-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 jun 2019 om 12:52
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alcohol&drugs`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dranken`
--

CREATE TABLE `dranken` (
  `id` int(11) NOT NULL,
  `Jaar` int(5) NOT NULL,
  `Bier` decimal(2,1) NOT NULL,
  `Wijn` decimal(2,1) NOT NULL,
  `Gedestilleerd` decimal(2,1) NOT NULL,
  `Totaal` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dranken`
--

INSERT INTO `dranken` (`id`, `Jaar`, `Bier`, `Wijn`, `Gedestilleerd`, `Totaal`) VALUES
(1, 1960, '9.9', '0.2', '1.9', '2.6'),
(2, 1965, '1.9', '0.5', '1.9', '4.2'),
(3, 1970, '2.9', '0.8', '2.0', '5.7'),
(4, 1975, '4.0', '1.5', '3.4', '8.9'),
(5, 1980, '4.8', '1.4', '2.7', '8.9'),
(6, 1985, '4.2', '2.0', '2.2', '8.5'),
(7, 1990, '4.1', '1.9', '2.0', '8.1'),
(8, 1995, '4.1', '2.2', '1.7', '8.0'),
(9, 2000, '4.1', '2.3', '1.7', '8.2'),
(10, 2001, '4.0', '2.3', '1.7', '8.1'),
(11, 2002, '4.0', '2.3', '1.7', '8.0'),
(12, 2003, '4.0', '2.5', '1.5', '7.9'),
(13, 2004, '3.9', '2.6', '1.4', '7.9'),
(14, 2005, '3.9', '2.7', '1.3', '7.9'),
(15, 9000, '1.5', '1.6', '2.6', '0.0');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `dranken`
--
ALTER TABLE `dranken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `dranken`
--
ALTER TABLE `dranken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
