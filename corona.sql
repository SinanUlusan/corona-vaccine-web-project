-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 Ara 2020, 13:29:36
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `corona`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `kimlik` bigint(20) NOT NULL,
  `soru1` smallint(6) NOT NULL,
  `soru2` smallint(6) NOT NULL,
  `soru3` smallint(6) NOT NULL,
  `soru4` smallint(6) NOT NULL,
  `soru5` smallint(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `answer`
--

INSERT INTO `answer` (`ID`, `kimlik`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`) VALUES
(1, 11111111110, 1, 1, 0, 1, 0),
(2, 11111111111, 1, 1, 1, 1, 1),
(3, 11111111113, 1, 0, 1, 0, 1),
(4, 11111111110, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `kimlik` bigint(20) NOT NULL,
  `hescode` varchar(50) NOT NULL,
  `asidurum` smallint(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `kimlik`, `hescode`, `asidurum`) VALUES
(1, 11111111110, 'TEST-CODE-01', 1),
(2, 11111111111, 'TEST-CODE-02', 1),
(3, 11111111112, 'TEST-CODE-03', 0),
(4, 11111111113, 'TEST-CODE-04', 1),
(5, 11111111114, 'TEST-CODE-05', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
