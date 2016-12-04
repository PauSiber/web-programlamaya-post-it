-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Ara 2016, 10:55:13
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `postit_vt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `postlar`
--

CREATE TABLE `postlar` (
  `Post_ID` int(11) NOT NULL,
  `Post_Sahibi` int(11) NOT NULL,
  `Post` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Post_Tarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `Kullanici_ID` int(11) NOT NULL,
  `Kullanici_Adi` varchar(32) NOT NULL,
  `Mail` varchar(128) NOT NULL,
  `Sifre` varchar(64) NOT NULL,
  `Profil_Resmi` varchar(128) NOT NULL,
  `Hakkinda` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `Kayit_Tarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `postlar`
--
ALTER TABLE `postlar`
  ADD PRIMARY KEY (`Post_ID`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`Kullanici_ID`),
  ADD UNIQUE KEY `Kullanici_Adi` (`Kullanici_Adi`),
  ADD UNIQUE KEY `Mail` (`Mail`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `postlar`
--
ALTER TABLE `postlar`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `Kullanici_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
