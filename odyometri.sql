-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 17 Eki 2018, 19:13:44
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odyometri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odyometri`
--

CREATE TABLE `odyometri` (
  `odyometri_id` int(11) NOT NULL,
  `odyometri_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `odyometri_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `odyometri_kanaat` text COLLATE utf8_turkish_ci NOT NULL,
  `sol250hz` int(11) NOT NULL,
  `sol500hz` int(11) NOT NULL,
  `sol1khz` int(11) NOT NULL,
  `sol2khz` int(11) NOT NULL,
  `sol3khz` int(11) NOT NULL,
  `sol4khz` int(11) NOT NULL,
  `sol6khz` int(11) NOT NULL,
  `sol8khz` int(11) NOT NULL,
  `sag250hz` int(11) NOT NULL,
  `sag500hz` int(11) NOT NULL,
  `sag1khz` int(11) NOT NULL,
  `sag2khz` int(11) NOT NULL,
  `sag3khz` int(11) NOT NULL,
  `sag4khz` int(11) NOT NULL,
  `sag6khz` int(11) NOT NULL,
  `sag8khz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odyometri`
--

INSERT INTO `odyometri` (`odyometri_id`, `odyometri_ad`, `odyometri_tarih`, `odyometri_kanaat`, `sol250hz`, `sol500hz`, `sol1khz`, `sol2khz`, `sol3khz`, `sol4khz`, `sol6khz`, `sol8khz`, `sag250hz`, `sag500hz`, `sag1khz`, `sag2khz`, `sag3khz`, `sag4khz`, `sag6khz`, `sag8khz`) VALUES
(1, 'odyometri1', '2018-10-17 15:17:15', 'kanat alanı deneme', 25, 10, 41, 21, 26, 59, 94, 65, 65, 45, 15, 15, 65, 32, 95, 65),
(2, 'odyometri2', '2018-10-17 15:17:15', 'test', 25, 10, 23, 21, 26, 23, 94, 65, 23, 45, 15, 15, 23, 32, 23, 65),
(3, 'odyometri', '2018-10-17 15:17:15', 'kanat alanı deneme4', 25, 10, 41, 21, 26, 59, 94, 65, 65, 45, 15, 15, 65, 32, 95, 65),
(8, 'odyometri', '2018-10-17 19:04:45', 'kanaat', 7, 77, 7, 7, 7, 77, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `odyometri`
--
ALTER TABLE `odyometri`
  ADD PRIMARY KEY (`odyometri_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `odyometri`
--
ALTER TABLE `odyometri`
  MODIFY `odyometri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
