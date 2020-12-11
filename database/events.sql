-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Dez 2020 um 15:01
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cf-robertcastillo-cr13`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date_start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_phone_number` int(11) NOT NULL,
  `event_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date_start_time`, `event_description`, `event_image`, `event_capacity`, `event_email`, `event_phone_number`, `event_address`, `event_url`, `event_type`) VALUES
(1, 'Brew your ownbeer', '2020-09-10 19:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'https://cdn.pixabay.com/photo/2015/07/10/17/53/cheers-839865_1280.jpg', '15', 'brew@beer.com', 2147483647, 'Beerstreet 1, 1160 Vienna ', 'https://byo.com/', 'adventure'),
(2, 'Cirque de Soleil', '2019-12-12 20:00', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. ', 'https://cdn.pixabay.com/photo/2015/07/02/10/16/circus-828680_1280.jpg', '10 000', 'cirque@dusoleil.com', 2147483647, 'Wiener Stadthalle Roland-Rainer-Platz 1, 1150 Vienna', 'www.cirquedusoleil.com', 'circus'),
(3, 'Dinner at the Beach', '2020-07-09 19:00', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'https://cdn.pixabay.com/photo/2016/05/31/21/09/couple-1427863_1280.jpg', '6', 'dinner@gmail.com', 2147483647, 'Beach 2', 'https://www.avilabeachhotel.com/restaurants-bars/dinner-on-the-beach', 'romantic dinner');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
