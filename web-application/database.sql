-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 27. Feb 2020 um 17:49
-- Server-Version: 5.7.24
-- PHP-Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `web-application`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `country`
--

CREATE TABLE `country` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `states` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `country`
--

INSERT INTO `country` (`id`, `name`, `states`, `created_at`, `updated_at`) VALUES
(1, 'Österreich', '1,2,3,4,5,6,7,8,9', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(2, 'Deutschland', '10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', '2020-02-19 23:00:00', '2020-02-19 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `departments`
--

CREATE TABLE `departments` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Innendienst', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(2, 'Außendienst', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(3, 'Einkauf', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(4, 'Verkauf', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(5, 'Management', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(6, 'Informationstechnik', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(7, 'Lager', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(8, 'Recht', '2020-02-17 00:00:00', '2020-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `employeetypes`
--

CREATE TABLE `employeetypes` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `employeetypes`
--

INSERT INTO `employeetypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Geschäftsführung', '2020-02-17 00:00:00', '2020-02-10 00:00:00'),
(2, 'Manager', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(3, 'Mitarbeiter', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(4, 'Auszubildender', '2020-02-17 00:00:00', '2020-02-17 00:00:00'),
(5, 'Praktikant', '2020-02-17 00:00:00', '2020-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `instoredepartments`
--

CREATE TABLE `instoredepartments` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `instoredepartments`
--

INSERT INTO `instoredepartments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Obstabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(2, 'Gemüseabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(3, 'Fleisch und Fischabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(4, 'Gebäckabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(5, 'Hygieneabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(6, 'Tiefkühlabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(7, 'Süßwahrenabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(8, 'Getränkeabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(9, 'Spirituosenabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(10, 'Technikabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00'),
(11, 'Garten und Landwirtschaftsabteilung', '2020-02-18 23:00:00', '2020-02-18 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abteilungen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `öffnungszeiten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `öffnungszeitenWochenende` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telnummer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locationPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `locations`
--

INSERT INTO `locations` (`id`, `location`, `street`, `postCode`, `city`, `country`, `state`, `abteilungen`, `öffnungszeiten`, `öffnungszeitenWochenende`, `employees`, `manager`, `email`, `telnummer`, `locationPicture`, `created_at`, `updated_at`) VALUES
(1, 'Filiale Graz St. Peter', 'Grazstraße 2', '8010', 'Graz', 'Österreich', 'Steiermark', 'Obstabteilung,Gemüseabteilung,Fleisch und Fischabteilung,Gebäckabteilung,Hygieneabteilung,Tiefkühlabteilung,Süßwahrenabteilung,Getränkeabteilung', 'Montag bis Freitag: 8:30 - 18:00', 'Samstag und an Feiertagen: 10:00 - 14:00', 'Thomas Mayer,Hermann Walter', 'Thomas Mayer', 'graz.stpeter@intern.at', '065013579246', 'http://localhost/upload/locations/Filiale_Graz_St._Peter/picture.jpg', '2020-02-19 12:59:21', '2020-02-19 12:59:21'),
(2, 'Filiale Weiz Mitte', 'Weizweg 69', '8160', 'Weiz', 'Österreich', 'Steiermark', 'Obstabteilung,Gemüseabteilung,Fleisch und Fischabteilung,Gebäckabteilung,Hygieneabteilung,Tiefkühlabteilung,Süßwahrenabteilung,Getränkeabteilung,Spirituosenabteilung,Technikabteilung,Garten und Landwirtschaftsabteilung', 'Montag bis Freitag: 8:30 - 18:00', 'Samstag und an Feiertagen: 10:00 - 14:00', 'Thomas Mayer,Hermann Walter', 'Hermann Walter', 'weiz.mitte@intern.at', '0650135677', 'http://localhost/upload/locations/Filiale Weiz Mitte/picture.jpg', '2020-02-19 13:04:05', '2020-02-19 13:04:05');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_09_14_203953_create_locations_table', 1),
(20, '2019_09_15_114914_create_country_table', 2),
(21, '2019_09_15_115045_create_states_table', 3),
(22, '2020_02_17_131639_create_mitarbeiter_table', 4),
(23, '2020_02_17_134231_create_workers_table', 5),
(24, '2020_02_17_140241_create_workers_table', 6),
(25, '2020_02_17_150211_create_workers_table', 7),
(26, '2020_02_20_132809_create_products_table', 8),
(27, '2020_02_20_154100_create_messages_table', 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `permissions`
--

CREATE TABLE `permissions` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accessLevel` int(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `accessLevel`, `created_at`, `updated_at`) VALUES
(1, 'root', 0, '2020-02-18 00:00:00', '2020-02-18 00:00:00'),
(2, 'Administrator', 1, '2020-02-18 00:00:00', '2020-02-18 00:00:00'),
(3, 'Manager', 2, '2020-02-18 00:00:00', '2020-02-18 00:00:00'),
(4, 'Mitarbeiter', 3, '2020-02-18 00:00:00', '2020-02-18 00:00:00'),
(5, 'Praktikant', 4, '2020-02-18 00:00:00', '2020-02-18 00:00:00'),
(6, 'Gast', 5, '2020-02-18 00:00:00', '2020-02-18 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hersteller` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produktart` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verpackung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inhaltsstoffe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `name`, `hersteller`, `produktart`, `verpackung`, `inhaltsstoffe`, `product_img`, `created_at`, `updated_at`) VALUES
(1, 'Rundsemmel', 'ja! Natürlich.', 'Gebäck', '/', 'Bio-WEIZENMEHL • Wasser • Hefe • Speisesalz • Bio-Sonnenblumenöl • Stabilisator (Bio-Guarkernmehl) • Bio-GERSTENMALZMEHL • Bio-WEIZENMALZMEHL • Bio-Glukosesirup Getrocknet • Bio-GERSTENMALZ • Bio-ROGGENMEHL • Bio-Bestreuung Optional (Bio-Mohn • Bio-SESAM • Bio-Sonnenblumenkerne • Bio-Leinsamen • Bio-Kürbiskerne)', 'http://localhost/upload/products/Rundsemmel/picture.jpg', '2020-02-20 13:06:32', '2020-02-20 13:06:32'),
(2, 'Alpenmilch_Schokolade', 'Milka', 'Süßwahre', 'Plastik', 'Alpenmilch Schokolade.\r\nZutaten: Zucker, Kakaobutter, Magermilchpulver, Kakaomasse, Süßmolkenpulver (Milch), Butterreinfett, Emulgator (Sojalecithin), Haselnüsse, Aroma.\r\nKakao: 30% mindestens.\r\n16,7g = 4 Stücke, 6 x 4 Stücke pro Tafel.\r\nKann andere Nüsse und Weizen enthalten.\r\nOhne künstliche Farbstoffe** und Konservierungsstoffe** -**Gemäß rechtlicher Vorschriften.', 'http://localhost/upload/products/Alpenmilch_Schokolade/picture.jpg', '2020-02-20 13:11:54', '2020-02-20 13:11:54');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `producttype`
--

CREATE TABLE `producttype` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `producttype`
--

INSERT INTO `producttype` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fleisch', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(2, 'Fisch', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(3, 'Gebäck', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(4, 'Obst', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(5, 'Gemüse', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(6, 'Getränk', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(7, 'Milchprodukt', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(8, 'Süßwahre', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(9, 'Alkoholisches Getränk', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(10, 'Technisches Produkt', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(11, 'Tiefkühl Produkt', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(12, 'Regionale Spezialität', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(13, 'Zeitschrift oder Buch', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(14, 'Zigaretten', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(15, 'Garten Produkt', '2020-02-19 23:00:00', '2020-02-19 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `states`
--

INSERT INTO `states` (`id`, `name`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Burgenland', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(2, 'Kärnten', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(3, 'Niederösterreich', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(4, 'Oberösterreich', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(5, 'Salzburg', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(6, 'Steiermark', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(7, 'Tirol', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(8, 'Vorarlberg', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(9, 'Wien', '1', '2019-09-14 22:00:00', '2019-09-14 22:00:00'),
(10, 'Baden-Württemberg', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(11, 'Bayern', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(12, 'Berlin', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(13, 'Brandenburg', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(14, 'Bremen', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(15, 'Hamburg', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(16, 'Hessen', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(17, 'Mecklenburg-Vorpommern', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(18, 'Niedersachsen ', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(19, 'Nordrhein-Westfalen', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(20, 'Rheinland-Pfalz', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(21, 'Saarland', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(22, 'Sachsen', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(23, 'Sachsen-Anhalt', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(24, 'Schleswig-Holstein', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00'),
(25, 'Thüringen ', '2', '2020-02-19 23:00:00', '2020-02-19 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `worker`, `accountName`, `firstName`, `lastName`, `email`, `password`, `permissions`, `picture`, `remember_token`, `last_login_at`, `last_login_ip`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'root', 'root', 'root', 'root@test.at', '$2y$10$lbKUd/Uhh8m.gR05vuFzMuCdUk4NvyrqyAsrf.P5QAC59P0EYw0Oi', '0', 'https://via.placeholder.com/150', NULL, '2020-02-20 22:47:32', '::1', 0, '2019-09-14 22:00:00', '2020-02-21 12:43:35'),
(2, '1', 'thomas.mayer', 'Thomas', 'Mayer', 'thomas.mayer@intern.at', '$2y$10$Xo5Xnz8vj17oRQgD0VsQZ.Zaby97SNZ/2II5SzpIQbvIPQaT6XnMm', '1', 'https://via.placeholder.com/150', NULL, '2020-02-22 10:24:23', '::1', 1, '2020-02-20 14:38:14', '2020-02-22 10:24:23'),
(3, '2', 'hermann.walter', 'Hermann', 'Walter', 'hermann.walter@intern.at', '$2y$10$F1Rt2rRhGfP0l7izbcZwqeszuDEgFFkofk6y7WBtU6GImyzW6CP3K', '3', 'https://via.placeholder.com/150', NULL, '2020-02-21 21:17:47', '::1', 0, '2020-02-20 14:38:28', '2020-02-22 10:24:23'),
(4, '3', 'martina.hammer', 'Martina', 'Hammer', 'martina.hammer@intern.at', '$2y$10$SO4GHbM7rZPXAPyFKL7UXOUZbY7w6RpdXudgTHn8QWDcsuQuCH0M.', '3', 'https://via.placeholder.com/150', NULL, '2020-02-21 16:35:10', '::1', 0, '2020-02-20 14:38:48', '2020-02-21 16:47:53');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfBirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privateEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `internalEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privatePhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `internalPhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passportPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterOfApplication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curriculumVitae` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `workers`
--

INSERT INTO `workers` (`id`, `gender`, `title`, `firstName`, `lastName`, `dateOfBirth`, `country`, `state`, `postCode`, `city`, `address`, `department`, `employeeType`, `privateEmail`, `internalEmail`, `privatePhoneNumber`, `internalPhoneNumber`, `passportPicture`, `letterOfApplication`, `curriculumVitae`, `contract`, `conditions`, `created_at`, `updated_at`) VALUES
(1, 'Mann', 'Ing.', 'Thomas', 'Mayer', '04/13/1999', 'Österreich', 'Steiermark', '8062', 'Kumberg', 'Infangweg 20', 'Informationstechnik', 'Geschäftsführung', 'thomas.mayer13@outlook.com', 'thomas.mayer@intern.at', '0664/4676456', '01234/111222333', 'http://localhost/upload/workers/Thomas-Mayer/picture.jpg', 'http://localhost/upload/workers/Thomas-Mayer/letterOfApplication.pdf', 'http://localhost/upload/workers/Thomas-Mayer/curriculumVitae.pdf', 'http://localhost/upload/workers/Thomas-Mayer/contract.pdf', 'http://localhost/upload/workers/Thomas-Mayer/conditions.pdf', '2020-02-17 14:57:40', '2020-02-17 14:57:40'),
(2, 'Mann', 'DI', 'Hermann', 'Walter', '11/22/1989', 'Österreich', 'Steiermark', '8010', 'Graz', 'Grazstraße 2', 'Außendienst', 'Mitarbeiter', 'adöflgj@gmx.net', 'hermann.walter@intern.at', '0664/5476582', '01234/22334466', 'http://localhost/upload/workers/Hermann-Walter/picture.jpg', 'http://localhost/upload/workers/Hermann-Walter/letterOfApplication.pdf', 'http://localhost/upload/workers/Hermann-Walter/curriculumVitae.pdf', 'http://localhost/upload/workers/Hermann-Walter/contract.pdf', 'http://localhost/upload/workers/Hermann-Walter/conditions.pdf', '2020-02-18 09:51:02', '2020-02-18 09:51:02'),
(3, 'Frau', 'Ing.', 'Martina', 'Hammer', '11/22/1989', 'Deutschland', 'Bremen', '22175', 'Bramfeld', 'Heilsberger Hang 9 c', 'Informationstechnik', 'Auszubildender', 'martina-hammer@gmail.com', 'martina.hammer@intern.at', '0880/1290345543', '065013579246', 'http://localhost/upload/workers/Martina-Hammer/picture.jpg', 'http://localhost/upload/workers/Martina-Hammer/letterOfApplication.pdf', 'http://localhost/upload/workers/Martina-Hammer/curriculumVitae.pdf', 'http://localhost/upload/workers/Martina-Hammer/contract.pdf', 'http://localhost/upload/workers/Martina-Hammer/conditions.pdf', '2020-02-19 22:54:05', '2020-02-19 22:54:05');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `employeetypes`
--
ALTER TABLE `employeetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `instoredepartments`
--
ALTER TABLE `instoredepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indizes für die Tabelle `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`accountName`);

--
-- Indizes für die Tabelle `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `country`
--
ALTER TABLE `country`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `instoredepartments`
--
ALTER TABLE `instoredepartments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT für Tabelle `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
